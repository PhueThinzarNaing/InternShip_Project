<?php

namespace App\Http\Controllers;

use App\CommodityExchange;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CommodityExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $commodityexchanges=CommodityExchange::get();
        return view('commodity_exchanges.index',['commodityexchanges'=>$commodityexchanges]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('commodity_exchanges.create');
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
        $this->validate($request, [
            'cename' => 'required|max:255',
            'ceaddress' => 'required|max:255',
            'cephone1' => 'required|max:255',
            'cephone2' => 'required|max:255',
            'ceemail' => 'required|max:255',
            
        ]);
        $commodityexchange=new CommodityExchange();
        if($request->file()) {
            $fileName = time().'_'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads'), $fileName);

        $commodityexchange->ce_name=$request->cename;
        $commodityexchange->ce_address=$request->ceaddress;
        $commodityexchange->ce_phone1=$request->cephone1;
        $commodityexchange->ce_phone2=$request->cephone2;
        $commodityexchange->ce_email=$request->ceemail;
        $commodityexchange->ce_photopath=$fileName;
        


        $commodityexchange->save();
        return redirect()->action('CommodityExchangeController@index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommodityExchange  $commodityExchange
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CommodityExchange $commodityexchange)
    {
        return view('commodity_exchanges.show',compact('commodityexchange'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommodityExchange  $commodityExchange
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $commodityexchange = CommodityExchange::find($id);
        return view('commodity_exchanges.edit', compact('commodityexchange')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommodityExchange  $commodityExchange
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    $request->validate([
        'cename' => 'required|max:255',
        'ceaddress' => 'required|max:255',
        'cephone1' => 'required|max:255',
        'cephone2' => 'required|max:255',
        'ceemail' => 'required|max:255',
      
    ]);
   

    $commodityexchange = CommodityExchange::find($id);
    
    $commodityexchange->ce_name=$request->get('cename');
    $commodityexchange->ce_address=$request->get('ceaddress');
    $commodityexchange->ce_phone1=$request->get('cephone1');
    $commodityexchange->ce_phone2=$request->get('cephone2');
    $commodityexchange->ce_email=$request->get('ceemail');
    
    if($request->file()) {
        $fileName = time().'_'.$request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads'), $fileName);

        $commodityexchange->ce_photopath = $fileName;
    }
    
    
    $commodityexchange->save();

    return redirect('/commodityexchanges')->with('success', 'Commodity Exchange updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommodityExchange  $commodityExchange
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $commodityexchange = CommodityExchange::find($id);
        $commodityexchange->delete();

        return redirect('/commodityexchanges')->with('success', 'Commodity Exchange deleted!');
    }
}
