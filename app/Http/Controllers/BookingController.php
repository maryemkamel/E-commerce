<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Rating;

use Illuminate\Http\Request;

class BookingController extends Controller
{public function __construct()
    {
        $this->middleware("auth");
    }
    
  
        public function reviewstore(Request $request){

            $review = new Rating();
            $review->product_id = session('id');
            $review->comment= $request->comment;
            $review->rating = $request->rating;
            $review->user_id = auth()->user()->id;
          
            $review->save();
            return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
        }
 

   
}