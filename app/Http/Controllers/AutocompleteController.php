<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutocompleteController extends Controller
{
    //for create controller - php artisan make:controller AutocompleteController

    function index()
    {
     return view('autocomplete');
    }

    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('hotel')
                ->where('city', 'LIKE', "%{$query}%")->distinct()
                ->get();
            $output = '<ul id="cityL" class="dropdown-menu col-md-12" style="display:block; position:relative">';
            foreach($data->unique('city') as $row2)
            {
                $output .= '
                    <li class="col-md-12 p-2"><a href="#" class="text-dark">'.$row2->city.'</a></li>
                ';
            }
            $output .= '</ul>';

            // $output2 = '
            // <div id="hotelList" class="col-md-12 bg-success" style="margin-top: 16.0px;">';

            // foreach($data as $row)
            // {
            
            //     $output2 .= '
            //     <div class="row">
            //     <div class="col-md-6 col-sm-12">
            //             <h4>'.$row->name_of_property.'</h4>
            //         </div>
            //         <div class="col-md-6 col-sm-12">
            //             <h5>'.$row->contact_no.'</h5>
            //         </div>
            //         </div>';
            // }
            // $output2 .='</div>';
            echo $output;
            // echo $output2;
        }else{
            echo "";
        }
    }

}