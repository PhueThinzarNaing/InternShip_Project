<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customers.create_customer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'customer_name'=>'required|max:225',         
            'customer_phno1'=>'required|max:225',
            'customer_phno2'=>'required|max:225',
            'customer_email'=>'required|max:225',
            'customer_address'=>'required|max:225',
            'customer_bankacc'=>'required|max:225',
        ]);
         
          $customer=new Customer();  

          $customer->customer_name= $request->customer_name;
          $customer->phno1= $request->customer_phno1;
          $customer->phno2= $request->customer_phno2;
          $customer->email= $request->customer_email;
          $customer->address= $request->customer_address;
          $customer->bank_account= $request->customer_bankacc;

          $customer->save();
          return redirect();
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
