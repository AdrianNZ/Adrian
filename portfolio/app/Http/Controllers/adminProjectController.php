<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use App\Slideimage;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use Illuminate\Support\Facades\Storage;
//use Purifier;
use Image;
use Validator;

class adminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $rsp = new AjaxResponse();
        $list['projects'] = Project::all();
        $data['html'] = \View::make('admin.project.index', array('projects' => $list['projects'], 'user' => $user))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rsp = new AjaxResponse();
        $list['categories'] = Category::all();
        $data['html'] = \View::make('admin.project.add', array('categories' => $list['categories']))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = [
            'project_name' => 'required|max:255',
            'project_desc' => 'required',
            'project_slug' => 'required',
            'categories' => 'required',
            'project_img' => 'required'
        ];
        $validator = Validator::make($request->all(), $roles);

        if ($validator->fails()) {
            $rsp = new AjaxResponse();
            $list['errors'] = $validator->getMessageBag();
            $data['html'] = \View::make('admin.valid', array('errors' => $list['errors']))->render();
            $rsp->error_msg = $list['errors'];
            $rsp->success = 0;
            $rsp->data = $data;
            return $rsp->toArray();
        }

        $rsp = new AjaxResponse();
        $project = new Project();

        $user = \Auth::user();
        $project->name = $request->project_name;
//        $project->description = Purifier::clean($request->project_desc);
        $project->description = $request->project_desc;
        $project->href = $request->project_slug;
        $project->img = $request->fake_img;

        if ($request->hasFile('project_img')) {
            $image = $request->file('project_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/upload/img/projects/' . $filename);
            Image::make($image)->resize(350, 230)->save($location);

            $project->title_img = $filename;
        }

        $project->save();

        if ($request->hasFile('project_slide_imges')) {
            $forSlides = $request->file('project_slide_imges');
            $count = 1;
            foreach ($forSlides as $forSlide) {
                $slideimage = new Slideimage();
                $imagename = time() . '_' . $count . '.' . $forSlide->getClientOriginalExtension();
                $imagelocation = public_path('/upload/img/projects/slide/' . $imagename);
                Image::make($forSlide->getRealPath())->resize(540, 310)->save($imagelocation);

                $slideimage->slug = $imagename;
                $slideimage->description = 'Project ' . $project->id . ' for slide image';

                $project->slideimages()->save($slideimage);
                $count += 1;
            }
        }


        $project->categories()->sync($request->categories, false);

        $list['projects'] = Project::all();
        $data['html'] = \View::make('admin.project.index', array('projects' => $list['projects'], 'user' => $user))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rsp = new AjaxResponse();
        $list['project'] = Project::findOrFail($id);
        $list['categories'] = Category::all();
        $project = Project::find($id);
        $belongtocategory = $project->categories()->get();

        $data['html'] = \View::make('admin.project.show',
            array('project' => $list['project'], 'categories' => $list['categories'], 'belongcategorires' => $belongtocategory))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function idupdate(Request $request, $id)
    {
        $roles = [
            'project_name' => 'required|max:255',
            'project_desc' => 'required',
            'project_slug' => 'required',
            'categories' => 'required'
        ];
        $validator = Validator::make($request->all(), $roles);

        if ($validator->fails()) {
            $rsp = new AjaxResponse();
            $list['errors'] = $validator->getMessageBag();
            $data['html'] = \View::make('admin.valid', array('errors' => $list['errors']))->render();
            $rsp->error_msg = $list['errors'];
            $rsp->success = 0;
            $rsp->data = $data;
            return $rsp->toArray();
        }

        $user = \Auth::user();
        $rsp = new AjaxResponse();
        $project = Project::findOrFail($id);
        $project->name = $request->project_name;
//        $project->description = Purifier::clean($request->project_desc);
        $project->description = $request->project_desc;
        $project->href = $request->project_slug;
        $project->img = $request->fake_img;

        if ($request->hasFile('project_img')) {

            $oldFilename = $project->title_img;
            Storage::delete('/projects/' . $oldFilename);

            $image = $request->file('project_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/upload/img/projects/' . $filename);
            Image::make($image)->resize(350, 230)->save($location);

            $project->title_img = $filename;
        }

        $project->save();

        if ($request->hasFile('project_slide_imges')) {

//            $oldSlideimg = $project->slideimages()->where('slug'); what method should use????
//            Storage::delete('/projects/slide/'.$oldSlideimg);
            $project->slideimages()->delete();

            $forSlides = $request->file('project_slide_imges');
            $count = 1;
            foreach ($forSlides as $forSlide) {
                $slideimage = new Slideimage();
                $imagename = time() . '_' . $count . '.' . $forSlide->getClientOriginalExtension();
                $imagelocation = public_path('/upload/img/projects/slide/' . $imagename);
                Image::make($forSlide->getRealPath())->resize(540, 310)->save($imagelocation);

                $slideimage->slug = $imagename;
                $slideimage->description = 'Project ' . $project->id . ' for slide image';

                $project->slideimages()->save($slideimage);
                $count += 1;
            }
        }

        $project->categories()->sync($request->categories);

        $list['projects'] = Project::all();
        $data['html'] = \View::make('admin.project.index', array('projects' => $list['projects'], 'user' => $user))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function iddelete($id)
    {
        $user = \Auth::user();
        $rsp = new AjaxResponse();
        $project = Project::findOrFail($id);
        $project->categories()->detach();
        $project->slideimages()->delete();
        $project->delete();

        $list['projects'] = Project::all();
        $data['html'] = \View::make('admin.project.index', array('projects' => $list['projects'], 'user' => $user))->render();
        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }
}
