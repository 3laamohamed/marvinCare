<?php

namespace App\Http\Controllers\Admin;

use App\WorkCategory;
use App\WorkDetails;
use Session;
use App\Blog;
use App\Language;
use App\Bcategory;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkCategoryController extends Controller
{
    public $lang;
    public function __construct()
    {
        $this->lang = Language::where('is_default', 1)->first();
    }

    public function bcategory(Request $request)
    {
        $lang = Language::where('code', $request->language)->first()->id;

        $bcategories = WorkCategory::where('language_id', $lang)->orderBy('id', 'desc')->get();
        return view('admin.work.work-category.index', compact('bcategories'));
    }

    // Add Blog Category
    public function add()
    {
        return view('admin.work.work-category.add');
    }

    // Store Blog Category
    public function store(Request $request)
    {
        $slug = Helper::make_slug($request->name);
        $blogs = WorkCategory::select('slug')->get();

        $request->validate([
            'name' => [
                'required',
                'unique:work_categories,name',
                'max:150',
                function ($attribute, $value, $fail) use ($slug, $blogs) {
                    foreach ($blogs as $blog) {
                        if ($blog->slug == $slug) {
                            return $fail('Title already taken!');
                        }
                    }
                }
            ],
            'status' => 'required',
        ]);

        $bcategory = new WorkCategory();

        $bcategory->language_id = $request->language_id;
        $bcategory->name = $request->name;
        $bcategory->slug = $slug;
        $bcategory->status = $request->status;
        $bcategory->save();


        $notification = array(
            'messege' => 'Work Category Added successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    // Blog Category Delete
    public function delete($id)
    {

        $bcategory = WorkCategory::find($id);
        $blogs = WorkDetails::where('bcategory_id', $id)->get();
        foreach ($blogs as $data) {

            $data->delete();
        }
        $bcategory->delete();
        $notification = array(
            'messege' => 'Work Category Delete successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);

    }

    // Blog Category Edit
    public function edit($id)
    {
        $bcategory = WorkCategory::find($id);
        return view('admin.work.work-category.edit', compact('bcategory'));
    }

    // Blog Skill Category
    public function update(Request $request, $id)
    {
     
        $slug = Helper::make_slug($request->name);
        $bcategories = WorkCategory::select('slug')->get();
        $bcategory = WorkCategory::findOrFail($id);

        $request->validate([
            'name' => [
                'required',
                'max:150',
                function ($attribute, $value, $fail) use ($slug, $bcategories, $bcategory) {
                    foreach ($bcategories as $serv) {
                        if ($bcategory->slug != $slug) {
                            if ($serv->slug == $slug) {
                                return $fail('Title already taken!');
                            }
                        }
                    }
                },
                'unique:work_categories,name,'.$id
            ],
            'status' => 'required',
        ]);

        $bcategory = WorkCategory::find($id);
        $bcategory->name = $request->name;
        $bcategory->status = $request->status;
        $bcategory->slug = $slug;
        $bcategory->save();

        $notification = array(
            'messege' => 'Work Category Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.workcategory').'?language='.$this->lang->code)->with('notification', $notification);
    }
}
