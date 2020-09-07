<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commodity_Exchange;

class Commodity_ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('commodity_exchanges.create');
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
            'ce_name'=>'required|max:225',         
            'address'=>'required|max:225',
            'phno1'=>'required|max:225',
            'phno2'=>'required|max:225',
            'email'=>'required|max:225',
            'Image'=>'required|max:225',
            
        ]);

        $commodity_exchange=new Commodity_Exchange();
         
        if($request->file())
        {
        $fileName=time().'_'.$request->Image->getClientOriginalName();
        $request->Image->move(public_path('uploads'),$fileName);
      
        
        $commodity_exchange->ce_name=$request->ce_name;
        $commodity_exchange->ce_address=$request->address;
        $commodity_exchange->phno1=$request->phno1;
        $commodity_exchange->phno2=$request->phno2;
        $commodity_exchange->email=$request->email;
        $commodity_exchange->Image=$fileName;
        
        $commodity_exchange->save();

        return redirect('Commodity_ExchangeController@index');
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
