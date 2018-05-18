<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Category;
use App\Http\Models\Book;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function index(){
        $categories = Category::all();
        return response($categories);
    }

    public function update(Request $request,$id)
    {
        $categories = Category::findOrFail($id);
        $categories->update($request->all());
        return response($categories);
    }

    public function destroy($id)
    {
       $categories = Category::findOrFail($id);
	   $categories->delete();
	   return response($categories);
    }
	
	public function store(Request $request)
	{
		$categories = new Category();
		$categories->nama = $request->input('nama');
		$categories->save();
		
        return response($categories);
	}
	
	public function show($id)
	{
		$categories = Category::where('id', $id)->get();
		return response ($categories);
	}
	
}