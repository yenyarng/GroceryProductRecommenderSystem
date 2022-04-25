<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Grocery_List;
use App\Models\GroceryListProduct;
use App\Models\Product;
use App\Models\User;


class GroceryListController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_id' => ['required'],
            'product_id' => ['required'],
            'user_pax' =>    ['required', 'numeric', 'min:0'],
            'meal_num' =>    ['required', 'numeric', 'min:0'],
            'quantity' =>    ['required', 'numeric', 'min:0'],
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $category = null)
    {
        return Grocery_List::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $groceryList = Grocery_List::create($req->all());
        $groceryList->save();
        // $userId = Auth::user()->id;
        // $data = Grocery_List::find($userId);
        // return view('home', ['groceryData' => $data]);
        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInCSV($id)
    {
        $fileName = 'groceryListData.csv';
        $filePath =  public_path("files/groceryListData.csv");
        $allData = Grocery_List::all();
        // $allData = DB::table('grocerylist_products')
        // ->join('grocerylists', 'grocerylist_products.grocerylist_id', '=' ,'grocerylists.id')
        // //->where('grocerylist_id', $id)
        // ->get();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "public",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('user_id', 'product_id', 'user_pax', 'meal_num', 'quantity');

        $callback = function () use ($allData, $columns) {
            $file = fopen(public_path("files/groceryListData.csv"), 'w');
            fputcsv($file, $columns);

            foreach ($allData as $data) {
                $row['user_id']  = $data->user_id;
                $row['product_id']  = $data->product_id;
                $row['user_pax']   = $data->user_pax;
                $row['meal_num']  = $data->meal_num;
                $row['quantity']  = $data->quantity;

                fputcsv($file, array($row['user_id'], $row['product_id'], $row['user_pax'], $row['meal_num'], $row['quantity']));
            }

            fclose($file);
        };

        //return response()->download($filePath, $fileName, $headers);
        return response()->stream($callback, 200, $headers);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showGroceryList($id)
    {
        $user = Auth::user();
        $groceryListId = $user->grocery_list->id;
        $groceryLists = DB::table('grocerylist_products')
        ->selectRaw('grocerylist_products.id as id, products.id as product_id, products.name as product_name, grocerylist_products.quantity as quantity, grocerylist_products.checked as checked')
        ->join('products', 'grocerylist_products.product_id', '=', 'products.id')
        ->where('grocerylist_id', $groceryListId)
        ->get();
        // return $groceryLists;
        return view('groceryList', ['groceryLists' => $groceryLists]);

        // $user = Auth::user();
        // $groceryList = $user->grocery_list->id;
        // return $groceryList;
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
    public function showPreferenceUpdatePage($id)
    {
        // $userId = Auth::user()->id;
        $groceryList = User::find($id)->grocery_list;
        if(is_null($groceryList)){
            return view('setNewPreferencePage', ['groceryData' => $groceryList]);
        }
        else{
            return view('setPreferencePage', ['groceryData' => $groceryList]);
        }
    }

    public function updatePreference(Request $request, $id)
    {
        $data = Grocery_List::find($id);
        $data->update($request->all());
        // return view('home', ['groceryData' => $data]);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Grocery_List::find($id);
        $data->delete();
        return $data;
    }

    // public function viewGroceryList()
    // {
    //     $groceryLists = Grocery_List::all();
    //     return view('home', compact('groceryLists'));
    // }

    public function findUser()
    {
        return Grocery_List::find(1)->user;
    }

    public function getProducts()
    {
        return Grocery_List::find(3)->products;
    }

    // public function setPreference()
    // {
        
    // }

    public function setPreferencePage()
    {
        $userId = Auth::user()->id;
        $data = Grocery_List::find($userId);
        return view('setPreferencePage', ['groceryData' => $data]);
    }
}
