<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Results;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function search(Request $request)
    {
        $text = $request->input('text');
        $products = DB::table('choices')
            ->orWhere('products', 'like', '%' . $text . '%')->paginate(15);
        return view('search.results', compact('text', 'products'));
    }

    public function see($id){
        return view("search.product")
    }
}
