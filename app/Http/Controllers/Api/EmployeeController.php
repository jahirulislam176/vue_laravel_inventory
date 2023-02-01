<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Validator;
use Image;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees=Employee::all();
        return \response()->json($employees);
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
        

        // $validator = Validator::make($request->all(), [
        //     'full_name' => ['required'],
        //     'email' => ['required'],
        //     'address' => ['required'],
        //     'salary' => ['required'],
        //     'nid' => ['required'],
        //     'joining_date' => ['required'],
        //     'image' => ['required'],
            
        // ]);

     
 
        // if ($validator->fails()) {
        //     return response([
        //         'message'=>$validator->errors()->all(),
        //     ]);
        // }

        
        $validatedData= $request->validate([

            'full_name' => ['required'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:employees'],

            'address' => ['required'],

            'salary' => ['required'],

            'address' => ['required'],

            'nid' => ['required'],

            'image' => ['required'],
            
            'joining_date'=>['required']
            
        ]);


         $request->image;
         $position=strpos($request->image,';');
         $sub=substr($request->image,0,$position);
         $ext=explode('/',$sub)[1];
         $name=time().'.'.$ext;
         $img=Image::make($request->image)->resize(240,200);
         $upload_path='backend/employee/';
         $image_url= $upload_path.$name;
         $img->save($image_url);

          if($request->image){
            $input=new Employee();
            $input->full_name=$request->full_name;
            $input->email=$request->email;
            $input->address=$request->address;
            $input->salary=$request->salary;
            $input->nid=$request->nid;
            $input->joining_date=$request->joining_date;
            $input->image=$image_url;
          
            // return $this->index($request);
           

            // if($request->file('image')){
            //     $Em_image = $request->file('image');
            //     $destinationPath='backend/employee/';
            //     $EmImage = date('YmdHis') . "." . $Em_image->getClientOriginalExtension();
            //     $Em_image->move($destinationPath.$EmImage);
            //     $input->image="$EmImage";
            // }
            $input->save();
            return response()->json(['message' => 'task was successful']);

         }else{


            $input=new Employee();
            $input->full_name=$request->full_name;
            $input->email=$request->email;
            $input->address=$request->address;
            $input->salary=$request->salary;
            $input->nid=$request->nid;
            $input->joining_date=$request->joining_date;
            $input->save();
          
            return response()->json(['message' => 'task was successful']);

         }
        
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
