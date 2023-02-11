<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use DB;
use Image;

class SupplierController extends Controller
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
        $validateData=$request->validate([
            'name'=>['required'],
            'email'=>['required'],
            'phone'=>['required|unique:suppliers'],
            'address'=>['required'],
            'shopname'=>['required']
        ]);

        if($request->photo){
            $position=strpos($request->photo,';');
            $sub=substr($request->photo,0,$position);
            $ext=explode('/',$sub)[1];
            $name=time().'.'.$ext;
            $img=Image::make($request->photo)->resize(240,200);

            $upload_path='backend/supplier/';

            $image_url=$upload_path.$name;

            $img->save($image_url);

            $supplier=new Supplier();
            $supplier->name=$request->name;
            $supplier->email=$request->email;
            $supplier->phone=$request->phone;
            $supplier->address=$request->address;
            $supplier->shopname=$request->shopname;
            $supplier->photo=$image_url;
            $supplier->save();

        }else{

            $supplier=new Supplier();
            $supplier->name=$request->name;
            $supplier->email=$request->email;
            $supplier->phone=$request->phone;
            $supplier->address=$request->address;
            $supplier->shopname=$request->shopname;
            $supplier->save();

        }

        return response(['Data'=>'Successfully Inserted']);

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
