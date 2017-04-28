<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\State;
use App\Brands;
use App\Area;
use App\Category;
use App\SubCategory;
use App\Auth;
use App\Http\Requests\CreateProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::pluck('state_name','id');
        $brands = Brands::pluck('brands_name','id');

        $areas = Area::pluck('area_name','id');
        $categories = Category::pluck('category_name','id');
        $subcategories = SubCategory::pluck('subcategory_name','id');
        return view ('products.create',compact('states','brands','areas','categories','subcategories'));
            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price;
        $product->brand_id = $request->brand_id;
        $product->area_id = $request->area_id;
        $product->sub_category_id = $request->subcategory_id;
        $product->condition = $request->condition;

        $product->user_id = auth()->id();

        $product->save();

        return redirect()->route('products.index');
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
    // public function destroy($id)
    // {
    //     //
    // }
    //return areas for state

    public function getStateAreas($state_id)
    {
        $areas = Area::whereStateId($state_id)->pluck('area_name','id');

        return $areas;
    }
}
