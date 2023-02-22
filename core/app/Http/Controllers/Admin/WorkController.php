<?php

namespace App\Http\Controllers\Admin;

use App\WorkCategory;
use App\WorkDetails;
use Session;
use App\Blog;
use App\Language;
use App\Bcategory;
use App\Sectiontitle;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default', 1)->first();
    }

    public function work(Request $request){
        $lang = Language::where('code', $request->language)->first()->id;

        $blogs = WorkDetails::where('language_id', $lang)->orderBy('id', 'DESC')->get();

        $saectiontitle = Sectiontitle::where('language_id', $lang)->first();
      
        return view('admin.work.index', compact('blogs', 'saectiontitle'));
    }

    // Add Blog 
    public function add(){
        return view('admin.work.add');
    }

    public function blog_get_category($id){

        $bcategories = Bcategory::where('status', 1)->where('language_id', $id)->get();
        $output = '';

        foreach($bcategories as $bcategory){
            $output .= '<option value="'.$bcategory->id.'">'.$bcategory->name.'</option>';
        }
        return $output;
    }

    // Store Blog 
    public function store(Request $request){

        $slug = Helper::make_slug($request->title);
        $blogs = WorkDetails::select('slug')->get();
        $request->validate([
            'main_image' => 'required|mimes:jpeg,jpg,png',
            'title' => [
                'required',
                'unique:blogs,title',
                'max:255',
                function($attribute, $value, $fail) use ($slug, $blogs){
                    foreach($blogs as $blog){
                        if($blog->slug == $slug){
                            return $fail('Title already taken!');
                        }
                    }
                }
            ],
            'status' => 'required',
            'bcategory_id' => 'required',
            'language_id' => 'required',
        ]);


        $blog = new WorkDetails();

        if($request->hasFile('main_image')){

            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $main_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $main_image);

            $blog->image = $main_image;
        }


        $blog->title = $request->title;
        $blog->language_id = $request->language_id;
        $blog->status = $request->status;
        $blog->slug = $slug;
        $blog->bcategory_id = $request->bcategory_id;
        $blog->save();

        $notification = array(
            'messege' => 'Work Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);

    }

    // Blog  Delete
    public function delete($id){

        $blog = WorkDetails::find($id);
        @unlink('assets/front/img/'. $blog->image);
        $blog->delete();
        $notification = array(
            'messege' => 'Work Delete successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Blog  Edit
    public function edit($id){
       
        $blog = WorkDetails::findOrFail($id);
        $blog_lan = $blog->language_id;
       
        $bcategories = WorkCategory::where('status', 1)->where('language_id', $blog_lan)->get();
        
        return view('admin.work.edit', compact('bcategories', 'blog'));

    }

    // Blog Update
    public function update(Request $request, $id){

        $slug = Helper::make_slug($request->title);
        $blogs = WorkDetails::select('slug')->get();
        $blog = WorkDetails::findOrFail($id);

        $request->validate([
            'main_image' => 'mimes:jpeg,jpg,png',
            'title' => [
                'required',
                'max:255',
                function($attribute, $value, $fail) use ($slug, $blogs, $blog){
                    foreach($blogs as $blg){
                        if($blog->slug != $slug){
                            if($blg->slug == $slug){
                                return $fail('Title already taken!');
                            }
                        }
                    }
                },
                'unique:blogs,title,'.$id
            ],
            'status' => 'required',
            'bcategory_id' => 'required',
            'language_id' => 'required',

        ]);

        if($request->hasFile('image')){
            @unlink('assets/front/img/'. $blog->main_image);

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $main_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/', $main_image);

            $blog->image = $main_image;
            
        }

        $blog->title = $request->title;
        $blog->language_id = $request->language_id;
        $blog->status = $request->status;
        $blog->slug = $slug;
        $blog->bcategory_id = $request->bcategory_id;

        $blog->save();

        $notification = array(
            'messege' => 'Work Updated successfully!',
            'alert' => 'success'
        );

        return redirect(route('admin.work').'?language='.$this->lang->code)->with('notification', $notification);

    }
}
