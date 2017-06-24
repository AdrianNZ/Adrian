<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Exception;
use JWTAuth;
use App\Http\Libraries\AjaxResponse;
use App\Todo;

class TodoController extends Controller
{
    private function auth()
    {
        return JWTAuth::parseToken()->authenticate();
    }

    private function successResponse($list)
    {
        $rsp = new AjaxResponse();
        $rsp->success = true;
        $rsp->data = $list;
        $rsp->messages = 'Hello World';
        return $rsp->toArray();
    }

    private function errorResponse($code, $message)
    {
        $rsp = new AjaxResponse();
        $rsp->success = false;
        $rsp->error_code = $code;
        $rsp->error_msg = $message;

        return $rsp->toArray();
    }

    public function index()
    {
        try {
            $user = $this->auth();
            $todoList = Todo::where('user_id', '=', $user->id)->orderBy('date')->get();

            return $this->successResponse($todoList);

        } catch (Exception $e) {
            return $this->errorResponse(500, $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $user = $this->auth();
            $user or die('invalided user');

            $todo = new Todo();
            $todo->user()->associate($user->id);
            $todo->title = $request->title;
            $todo->date = $request->date;
            if ($request->type != null) {
                $todo->type = $request->type;
            } else {
                $todo->type = 'INBOX';
            };
            $todo->save();

            return $this->successResponse($todo);

        } catch (Exception $e) {
            return $this->errorResponse(500, $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $user = $this->auth();
            $user or die('invalided user');

            $todo = Todo::findOrFail($id);
            $todo->title = $request->title;
            $todo->date = $request->date;
            $todo->type = $request->type;

            $todo->save();

            return $this->successResponse($todo);

        } catch (Exception $e) {
            return $this->errorResponse(500, $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $user = $this->auth();
            $user or die('invalided user');

            $todo = Todo::findOrFail($id);
            $todo->delete();

            return $this->successResponse($id);

        } catch (Exception $e) {
            return $this->errorResponse(500, $e->getMessage());
        }
    }
}
