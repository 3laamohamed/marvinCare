<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use Session;
use App\Service;
use App\Language;
use App\Sectiontitle;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    public function service(Request $request){
        $lang = Language::where('code', $request->language)->first()->id;
     
        $services = Project::where('language_id', $lang)->orderBy('id', 'DESC')->get();
        
        $saectiontitle = Sectiontitle::where('language_id', $lang)->first();
        return view('admin.projects.index', compact('services', 'saectiontitle'));
    }

    // Add Service
    public function add(){
        return view('admin.projects.add');
    }

    // Store Service
    public function store(Request $request){

        $slug = Helper::make_slug($request->name);
        $services = Project::select('slug')->get();
      
        $request->validate([
            'name' => [
              'required',
              'unique:project_view,name',
              'max:150',
              function($attribute, $value, $fail) use ($slug, $services) {
                  foreach($services as $service) {
                    if ($service->slug == $slug) {
                      return $fail('Name already taken!');
                    }
                  }
                }
            ],
            'image' => 'required',
        ]);

        $service = new Project();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $image);

            $service->image = $image;
        }
        

        $service->name = $request->name;
        $service->slug = $slug;
        $service->content = Purifier::clean($request->content);
        $service->language_id = $request->language_id;
        $service->status = $request->status;
        $service->save();

        $notification = array(
            'messege' => 'Project Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Service Delete
    public function delete($id){

        $service = Project::find($id);
        @unlink('assets/front/img/'. $service->icon);
        $service->delete();

        return back();
    }

    // Service Edit
    public function edit($id){

        $service = Project::find($id);
        return view('admin.projects.edit', compact('service'));

    }

    // Update Service
    public function update(Request $request, $id){

        $slug = Helper::make_slug($request->name);
        $services = Project::select('slug')->get();
        $service = Project::findOrFail($id);

         $request->validate([
            'name' => [
              'required',
              'max:150',
              function($attribute, $value, $fail) use ($slug, $services, $service) {
                  foreach($services as $serv) {
                    if ($service->slug != $slug) {
                      if ($serv->slug == $slug) {
                        return $fail('Title already taken!');
                      }
                    }
                  }
                },
                'unique:services,name,'.$id
            ],
            'content' => 'required'
        ]);

        if($request->hasFile('image')){
            @unlink('assets/front/img/'. $service->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $image);

            $service->image = $image;
        }

        $service->name = $request->name;
        $service->slug = $slug;
        $service->content = Purifier::clean($request->content);
        $service->language_id = $request->language_id;
        $service->status = $request->status;
        $service->save();

        $notification = array(
            'messege' => 'Service Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.project').'?language='.$this->lang->code)->with('notification', $notification);
    }

    public function projectcontent(Request $request, $id){
        
        $request->validate([
            'service_title' => 'required',
            'service_subtitle' => 'required',
        ]);

        $service_title = Sectiontitle::where('language_id', $id)->first();

        $service_title->update($request->all());

        $notification = array(
            'messege' => 'Service Content Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.project').'?language='.$this->lang->code)->with('notification', $notification);
    }
}
