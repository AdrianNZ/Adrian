<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Mockery\Exception;
use App\Http\Libraries\AjaxResponse;
use Illuminate\Support\Facades\File;

class ExcelController extends Controller
{
    public function loadUser()
    {
        $users = User::all();
        $rsp = new AjaxResponse();
        $rsp->success = true;
        $rsp->data = $users;

        return $rsp->toArray();
    }

    public function loadExcel(Request $request)
    {
        try {
            if ($request->hasFile('file')) {
                //file이 excel인지 아닌지 확인
                $roles=['file'=>'required|max:50000|mimes:xlsx'];
                $validator = Validator::make($request->all(), $roles);

                if($validator->fails()){
                    $rsp = new AjaxResponse();
                    $list['errors'] = $validator->getMessageBag();
                    $rsp->error_msg = $list['errors'];
                    $rsp->success = 0;
                    return $rsp->toArray();
                } else{
                    // file이름 설정(날짜기준)
                    $fileName = time()."excel_file." . $request->file('file')->getClientOriginalExtension();

                    // 폴더와 파일이 있는지 여부 확인
                    $path = $request->file('file')->move(base_path() . '/public/uploads2', $fileName);
                    if(!file_exists($path)) File::makeDirectory($path);

                    Excel::load($path, function ($reader) {
                        $results = $reader->skipRows(0)->get();
                        $rows = $results->toArray();

                        foreach ($rows as $r) {
                            if ($r !== null) {
                                $user = new User();
                                $user->name = $r['name'];
                                $user->email = $r['email'];
                                $user->mobile = $r['mobile'];

                                $user->save();
                            }
                        }
                    });
                }
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getLine() . ":" . $e->getMessage()]);
        }
    }
}
