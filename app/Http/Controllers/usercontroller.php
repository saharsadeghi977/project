<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;
class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
        $pagetitle='ویرایش پروفایل';
        return view('front.auth.profile',compact('pagetitle','user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
        $messages=[
            'name.required'=>'نام را وارد کنید ',
            'email.required'=>'فیلد ایمیل را وارد کنید ',
            
        ];

        if (!empty($request->password)) {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'min:8',
                'password_confirmation' => 'min:8',
            ], $messages);

            $password = Hash::make($request->password);
            $user->password = $password;
        } else {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                
            ], $messages);
        }

        $user->name = $request->name;
        $user->email = $request->email;
       


        try {
            $user->save();
        } catch (Exception $exception) {
            switch ($exception->getCode()) { }
            return redirect()->back()->with('warning', $exception->getCode());
        }

        $msg = "ویرایش با موفقیت انجام شد";
        return redirect(route('home'))->with('success', $msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
