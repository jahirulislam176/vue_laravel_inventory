<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Validator;
use Image;
use DB;
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
        $employee=DB::table('employees')->where('id',$id)->first();
        return response()->json($employee);
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

        // $validatedData= $request->validate([

        //     'full_name' => ['required'],

        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:employees'],

        //     'address' => ['required'],

        //     'salary' => ['required'],

        //     'address' => ['required'],

        //     'nid' => ['required'],

        //     'image' => ['required'],
            
        //     'joining_date'=>['required']
            
        // ]);

        // $input=new Employee();
        $input= Employee::find($id);

        
        // $input=DB::table('employees')->where('id',$id)->first();
        $input->full_name=$request->full_name;
        $input->email=$request->email;
        $input->address=$request->address;
        $input->salary=$request->salary;
        $input->nid=$request->nid;
        $input->joining_date=$request->joining_date;
        $input->save();
        return response()->json(["message"=>"Data SuccessFully Updated"]);
        // $input->save();
        // return response()->json(['message' => 'task was successful']);

          if($request->image){
            $request->image;
            $position=strpos($request->image,';');
            $sub=substr($request->image,0,$position);
            $ext=explode('/',$sub)[1];
            $name=time().'.'.$ext;
            $img=Image::make($request->image)->resize(240,200);
            $upload_path='backend/employee/';
            $image_url= $upload_path.$name;
            $success=$img->save($image_url);
            // return response()->json(['message' => 'task was successful']);
            if($success){
                $input['image']= $image_url;
                $img=DB::table('employees')->where('id',$id)->first();
                $image_path=$img->image;
                $done=unlink($image_path);
                $input->update();
                // $user=DB::table('employees')->where('id',$id)->update($input);
            }else{
                $oldimage=$request->image;
                $input['image']=$oldimage;
                $input->update();
                // $user=DB::table('employees')->where('id',$id)->update($input);

            }

            // $input->update();
        }
        //  }elseif(!$request->image){

        //     $input->update();


        //  }
       
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

        $employee=DB::table('employees')->where('id',$id)->first();
        $image=$employee->image;
        if($image){
            unlink($image);
            DB::table('employees')->where('id',$id)->delete();

        }else{
            DB::table('employees')->where('id',$id)->delete();
        }


       
    }
}
