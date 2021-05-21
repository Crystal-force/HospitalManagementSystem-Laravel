<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
      $category_data = Category::all();

      return view('category')->with([
        'category' => $category_data
      ]);
    }
    public function addcategory(Request $request) {
      $category = $request->add_category;
      $data = array('name'=>$category);
      
      $res = Category::insert($data);
      if ($res == true) {
        return response() ->json(['data' => '1']);
      }
    }

    public function editcategory(Request $request) {
        $id = $request->id;
        $content = $request->editcategory;
        $res = Category::where('id', $id)->update(array('name'=>$content));
        if($res = '1') {
         return response()->json(['data' => '1']);
        }
    }

    public function removecategory(Request $request) {
      $remove_id = $request->id;
      
      $res = Category::destroy($remove_id);
      if($res == '1') {
        return response()->json(['data' => '1']);
      }
    }
}
