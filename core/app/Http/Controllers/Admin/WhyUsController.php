<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Whyus;
use Session;
use App\Service;
use App\Language;
use App\Sectiontitle;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;
use App\Http\Controllers\Controller;

class WhyUsController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default',1)->first();
    }

    public function why_us(Request $request){
        $lang = Language::where('code', $request->language)->first()->id;
     
        $services = Whyus::where('language_id', $lang)->orderBy('id', 'DESC')->get();
        
        $saectiontitle = Sectiontitle::where('language_id', $lang)->first();
        return view('admin.whyus.index', compact('services', 'saectiontitle'));
    }

    // Add Service
    public function add(){
        return view('admin.whyus.add');
    }

    // Store Service
    public function store(Request $request){

        $slug = Helper::make_slug($request->name);
        $services = Whyus::select('slug')->get();

        $request->validate([
            'name' => [
                'required',
                'unique:project_view,name',
                'max:255',
                function($attribute, $value, $fail) use ($slug, $services) {
                    foreach($services as $service) {
                        if ($service->slug == $slug) {
                            return $fail('Name already taken!');
                        }
                    }
                }
            ],
            'icon' => 'mimes:jpeg,jpg,png',
        ]);

        $service = new Whyus();

        if($request->hasFile('icon')){
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $icon = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $icon);

            $service->icon = $icon;
        }



        $service->name = $request->name;
        $service->slug = $slug;
        $service->language_id = $request->language_id;
        $service->status = $request->status;
        $service->disc = $request->disc;
        $service->save();

        $notification = array(
            'messege' => 'Why Us Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Service Delete
    public function delete($id){

        $service = Whyus::find($id);
        @unlink('assets/front/img/'. $service->icon);
        $service->delete();
        $notification = array(
            'messege' => 'Why Us Deleted successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.why_us').'?language='.$this->lang->code)->with('notification', $notification);
    }

    // Service Edit
    public function edit($id){

        $service = Whyus::find($id);
        return view('admin.whyus.edit', compact('service'));
    }

    // Update Service
    public function update(Request $request, $id){

        $slug = Helper::make_slug($request->name);
        $services = Whyus::select('slug')->get();
        $service = Whyus::findOrFail($id);

        $request->validate([
            'name' => [
                'required',
                'max:255',
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
            'icon' => 'mimes:jpeg,jpg,png',
        ]);

        if($request->hasFile('icon')){
            @unlink('assets/front/img/'. $service->icon);
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $icon = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $icon);

            $service->icon = $icon;
        }

        $service->name = $request->name;
        $service->slug = $slug;
        $service->language_id = $request->language_id;
        $service->status = $request->status;
        $service->disc = $request->disc;
        $service->save();

        $notification = array(
            'messege' => 'Why Us Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.why_us').'?language='.$this->lang->code)->with('notification', $notification);
    }

    public function why_uscontent(Request $request, $id){
        
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
