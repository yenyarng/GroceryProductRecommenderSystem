<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Grocery_List;
use App\Models\Product;
use App\Models\Product_Category;
use App\Models\User;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class UserController extends Controller
{
    public function viewGroceryList()
    {
        $groceryLists = Grocery_List::all();
        return view('home', compact('groceryLists'));
    }

    public function findPreference()
    {
        $userId = Auth::user()->id;
        $groceryList = User::find($userId)->grocery_list;
        if(is_null($groceryList)){
            return view('setNewPreferencePage', ['groceryData' => $groceryList]);
        }
        else{
            return view('setPreferencePage', ['groceryData' => $groceryList]);
        }
    }

    public function preferencePage()
    {
        $userId = Auth::user()->id;
        $groceryList = User::find($userId)->grocery_list;
        if(is_null($groceryList)){
            return view('preferencePage', ['groceryData' => $groceryList]);
        }
        else{
            return view('preferencePage', ['groceryData' => $groceryList]);
        }
    }
}
