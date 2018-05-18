<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Category;
use App\Http\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
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
        $data = Book::all();
        return response($data);
    }

    public function update(Request $request,$kd_buku)
    {
        $data = Book::findOrFail($kd_buku);
        $data->update($request->all());
        return response($data);
    }

    public function destroy($kd_buku)
    {
       $data = Book::findOrFail($kd_buku);
	   $data->delete();
	   return response($data);
    }
	
	public function store(Request $request)
	{
		$data = new Book();
		$data->judul = $request->input('judul');
		$data->save();
		
        return response($data);
	}
	
	public function show($kd_buku)
	{
		$data = Book::where('kd_buku', $kd_buku)->get();
		return response ($data);
	}
	
}