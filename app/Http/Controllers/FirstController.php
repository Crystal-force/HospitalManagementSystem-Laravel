<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use\App\Models\Category;



class FirstController extends Controller

{

    public function signin() {
        return view('signin');
    }

    public function pCheck(Request $request) {
        $p_name = $request->p_name;
        $p_pwd  = $request->p_pwd;

        if($p_name == "chris" && $p_pwd == "password") {
            return true;
        } else {
            return false;
        }
    }


    public function index() {
      $category_list = Category::orderBy('id', 'ASC')->get();

      return view('firstpage')->with([
        'catelist'=> $category_list
      ]);
    }


    public function postDocument(Request $request) {

    	if(!empty($request->file('file_1'))) {
            $file = $request->file('file_1');
            $fileName = time().'_'.uniqid().'_'.$file->getClientOriginalName();
            $path = 'assets/document';

            if(!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file->move(public_path($path), $fileName);

            return response()->json([
                'status' => 'success',
                'file' => 'front_driving_licence_document',
                'path' => $path."/".$fileName
            ]);
        }

        if(!empty($request->file('file_2'))) {
            $file = $request->file('file_2');
            $fileName = time().'_'.uniqid().'_'.$file->getClientOriginalName();
            $path = 'assets/document';

            if(!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file->move(public_path($path), $fileName);
            return response()->json([
                'status' => 'success',
                'file' => 'rear_driving_licence_document',
                'path' => $path."/".$fileName
            ]);
        }

        if(!empty($request->file('file_3'))) {
            $file = $request->file('file_3');
            $fileName = time().'_'.uniqid().'_'.$file->getClientOriginalName();
            $path = 'assets/document';

            if(!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file->move(public_path($path), $fileName);

            return response()->json([
                'status' => 'success',
                'file' => 'front_licence_certificate_document',
                'path' => $path."/".$fileName
            ]);

        }

        if(!empty($request->file('file_4'))) {
            $file = $request->file('file_4');
            $fileName = time().'_'.uniqid().'_'.$file->getClientOriginalName();
            $path = 'assets/document';

            if(!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file->move(public_path($path), $fileName);

            return response()->json([
                'status' => 'success',
                'file' => 'rear_licence_certificate_document',
                'path' => $path."/".$fileName
            ]);

        }

    }

}

