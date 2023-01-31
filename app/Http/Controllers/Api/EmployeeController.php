<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Validator;
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

        $validatedData= $request->validate([
            'full_name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:employees'],

            'address' => ['required'],

            'salary' => ['required'],

            'address' => ['required'],

            'nid' => ['required'],

            'image' => ['required'],
            
            'joining_date'=>['required']
            
        ]);
 
        // if ($validator->fails()) {
        //     return response([
        //         'message'=>$validator->errors()->all(),
        //     ]);
        // }



        
        // try{
            $input=new Employee();
            $input->full_name=$request->full_name;
            $input->email=$request->email;
            $input->address=$request->address;
            $input->salary=$request->salary;
            $input->nid=$request->nid;
            $input->joining_date=$request->joining_date;
            $input->image=$request->image;
            $input->save();
            // return $this->index($request);
            return response()->json(['message' => 'task was successful']);
            // return response([
            //     "message"=>$input
            // ]);

        // }catch(Exception $e){
        //     return response([
        //         "message"=>$e->getMessage()

        //     ]);

        // }
        
      
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
