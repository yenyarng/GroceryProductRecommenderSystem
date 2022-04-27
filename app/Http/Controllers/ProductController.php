<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Grocery_List;
use App\Services\GetRecommendProduct;
use App\Services\GetRecommendQuantity;

class ProductController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'image_path' => ['required'],
            'desc' => ['required', 'string', 'max:255'],
            'overview' => ['required'],
            'product_category_id' =>   ['required'],
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsData = Product::all();
        $products = $productsData->sortBy('product_category_id');
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        return Product::create($req->all());
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
    public function show(
        Product $product
        /** this is product id*/
    ) {
        // get user id
        $user = Auth::user()->id;

        // get product id
        $productId = $product->id;

        // get product name
        $productName = $product->name;

        // get user preference
        $preference = Grocery_List::select('user_pax', 'meal_num')
            ->where('user_id', $user)
            ->first();

        // get recommended quantity
        $recommendQuantity = (new GetRecommendQuantity())->getQuantity(
            $preference->user_pax,
            $preference->meal_num,
            $productId
        );

        // return $recommendQuantity;
        // get recommended product
        $productLists = (new GetRecommendProduct())->getProduct(
            $productName
        );

        //how to return the several product object from product list?
        //$newProductList = Product::all()->whereIn('name', $productLists)->get();

        $newProductList = DB::table('products')->whereIn('name', $productLists)->get();
        // return $newProductList;
        
        return view('product.show', [
            'product'=>$product,
            'recommendQuantity'=>$recommendQuantity,
            'productLists'=>$newProductList
        ]);

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
        $data = Product::find($id);
        $data->update($request->all());
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();
        return $data;
    }
}
