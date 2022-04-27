<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\GroceryListProduct;
use App\Models\Grocery_List;
use Illuminate\Support\Facades\Auth;

class GroceryListProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $groceryLists = DB::table('grocerylist_products')
        // ->selectRaw('grocerylist_products.id as id, products.id as product_id, products.name as product_name, grocerylist_products.quantity as quantity, grocerylist_products.checked as checked')
        // ->join('products', 'grocerylist_products.product_id', '=', 'products.id')
        // ->where('grocerylist_id', Auth::user()->id)
        // ->get();

        $groceryLists = DB::table('grocerylist_products')
            ->join('products', 'grocerylist_products.product_id', '=', 'products.id')
            ->get();
        return $groceryLists;
    }

    public function indexForRecommendQuantity(){
        $data = DB::table('grocerylist_products')
        ->join('grocerylists', 'grocerylist_products.grocerylist_id', '=', 'grocerylists.id')
        ->get();
        return  $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        return $req;
        //return Grocery_List::create($req->all());
    }

    public function addToGroceryList(Request $request)
    {
        // $data = GroceryListProduct::create($req->all());
        // return $data;
        $validated = $request->validate([
            'quantity' => 'required',
            'product_id' => 'required',
            'checked' => 'required',
        ]);

        $user = $request->user();
        $groceryListId = $user->grocery_list->id ?? null;


        if(!$groceryListId) {
            Grocery_List::create([
                'user_id'=>$user->id
            ]);

            $groceryListId = Grocery_List::latest('id')->first()->id;
        }
        $groceryList = Grocery_List::find($groceryListId);

        // how if user already got that product in grocery list
        // but adding it again in shopping list there?
        $groceryList->products()->attach(
            $validated['product_id'],
            [
                'quantity'=>$validated['quantity']
            ]
        );
        return redirect()->route('groceryList',[Auth::user()->id]);
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
    public function checkGroceryListProduct($id)
    {
        $data = GroceryListProduct::find($id);

        if ($data->checked == "0") {
            // make it to checked = 1
            $data->update(['checked' => "1"]);
        } else if ($data->checked == "1") {
            // make it to checked = 0
            $data->update(['checked' => "0"]);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteGroceryListProduct($id)
    {
        $data = GroceryListProduct::find($id);
        $data->delete();
        return redirect()->back();
    }
}
