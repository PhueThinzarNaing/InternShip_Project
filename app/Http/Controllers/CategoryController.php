<?php

namespace App\Http\Controllers;

use App\Category;
use App\CommodityExchange;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$commodityexchanges=CommodityExchange::get();
        $categories=Category::get();
        return view('categories.index',[/*'commodityexchanges'=>$commodityexchanges,*/'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $commodityexchanges=CommodityExchange::get();
        return view('categories.create',['commodityexchanges'=>$commodityexchanges]);
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
            'ctname' => 'required|max:255',
            'ctdescription' => 'required|max:255',
            'commodity_id' => 'required|max:255',
            
            
        ]);
        $category=new Category();
       
        $category->category_name=$request->ctname;
        $category->c_description=$request->ctdescription;
        $category->commodity_id=$request->commodity_id;

        
        


        $category->save();
        return redirect()->action('CategoryController@index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
