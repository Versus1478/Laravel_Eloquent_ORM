<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        return DB::table('categories')->get();
    }

    public function store(Request $request)
    {
        $id = DB::table('categories')->insertGetId([
            'name'=>$request->name,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        return DB::table('categories')->where('id',$id)->first();
    }

    public function show($id)
    {
        return DB::table('categories')->where('id',$id)->first();
    }

    public function update(Request $request,$id)
    {
        DB::table('categories')
            ->where('id',$id)
            ->update([
                'name'=>$request->name,
                'updated_at'=>now()
            ]);

        return DB::table('categories')->where('id',$id)->first();
    }

    public function destroy($id)
    {
        DB::table('categories')->where('id',$id)->delete();

        return ['message'=>'deleted'];
    }
}
