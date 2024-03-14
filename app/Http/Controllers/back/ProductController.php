<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

use Exception;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = product::orderBy('id', 'DESC')->paginate(5);
        return view('back.products.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all()->pluck('name', 'id');

        return view('back.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $validatedData = $request->validate([
            'title' => 'required|min:2|max:255',
            'price' => 'required|numeric',
            'im' => 'required',
            'description' => 'required'

        ]);



        // $product=new product;
        // try {

        //     $product = $product->create([$request->all()]);
        //     $product->categories()->attach($request->categories);
        // } catch (Exception $exception) {

        //     return redirect(route('admin.products.create'))->with('warning', $exception->getMessage());
        // }
        $imageName = time() . "_" . rand(1000, 9999) . "." . $request->im->extension();
        $imageFilePatch = $request->im->storeAS("images", $imageName, 'public');

        // $product= product::create([
        //     "title"=>$request->title,
        //     "price"=>$request->price,
        //     "image"=>$imageFilePatch,
        //     "description"=>$request->description,
        //     // $product->categories()->attach($category_id)
        //    ]);

        // dd($request->all());
        $product = new product;
        $product->title = $request->get('title');
        $product->price = $request->get('price');
        $product->image = $imageFilePatch;
        $product->description = $request->get('description');
        $product->save();
        
         ;
        ($product->categories()->attach( $request->input('categories')));

        $msg = "ذخیره محصول با موفقیت انجام شد ";
        return redirect(route('admin.products'))->with('success', $msg);
    }








    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
        $categories = Category::all()->pluck('name', 'id');
        return view('back.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
        $messages = [
            'name.required' => 'فیلد نا م را وارد کنید',
            'price.required' => 'فیلد قیمت را وارد کنید',
            'image.required' => 'فیلدتصویر را وارد کنید',
            'description.required' => 'فیلد توضیحات را وارد کنید  را وارد کنید'

        ];
        $validatedData = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,png|max:2048',
            'description' => 'nullable'
        ], $messages);
        try {
            $product->update($request->all());
            $product->categories()->sync($request->categories);
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
            }
            return redirect(route('admin.products.create'))->with('warning',);
        }

        $msg = "ذخیره محصول جدید با موفقیت انجام شد";
        return redirect(route('admin.products'))->with('success', $msg);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
        try {
            $product->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.products'))->with('warning',);
        }

        $msg = "آیتم مورد نظر حذف گردید";
        return redirect(route('admin.products'))->with('success', $msg);
    }
}
