<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use\App\Models\PatientData;

use\App\Models\Category;

use Auth;

use App\User;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;



class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index(Request $request)

    {

        $id = $request->get('id');
        if($id == '0') {
          $all_data = PatientData::orderBy('id', 'DESC')->get();
          $category_name = Category::all();
          return view('home')->with([
            'alldata' => $all_data,
            'category_name' => $category_name
          ]);

        }

        else {

          $select_data = PatientData::whereStatus(0)->where('category_id', $id)->orderBy('id', 'DESC')->get();

          $category_name = Category::all();

          return view('home')->with([

            // 'is_first' => $is_first,

            // 'cat_id' => $id,
// 
            'alldata' => $select_data,

            'category_name' => $category_name

          ]);

        }

    }


    public function todayinfo() {

      $date = date("Y/m/d");

      $today_data = PatientData::where('date', $date)->get();

      return view('todayinfo')->with([

        'tdata'=>$today_data,

        'tcount' => count($today_data)

      ]);

      

        // if($today_data == "") {

        //                     // ->with('error','You are not allowed to access this page.');

        // }

    }

}

