<?php

namespace App\Http\Controllers\back;
use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Exception;
class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderBy('id', 'DESC')->paginate(20);
        return view('back.categories.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'name.required' => 'فیلد عنوان را وارد نمایید',
           
        ];
        $validatedData = $request->validate([
            
            'name' => 'required'
        ], $messages);

        $category = new Category();
        try {
            $category->create($request->all());
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
               
            }
            return redirect(route('admin.categories.create'))->with('warning', $msg);
        }

        $msg = "ذخیره ی دسته بندی جدید با موفقیت انجام شد";
        return redirect(route('admin.categories'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
        return view('back.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
        $messages = [
            'name.required' => 'فیلد عنوان را وارد نمایید',
          
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ], $messages);

        try {
            $category->update($request->all());
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
               
            }
            return redirect(route('admin.categories.edit'))->with('warning', $exception->getCode());
        }

        $msg = "ذخیره ی دسته بندی جدید با موفقیت انجام شد";
        return redirect(route('admin.categories'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        try {
            $category->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.categories'))->with('warning', $exception->getCode());
        }

        $msg = "آیتم مورد نظر حذف گردید";
        return redirect(route('admin.categories'))->with('success', $msg);
    }
}
