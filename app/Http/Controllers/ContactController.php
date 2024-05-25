<?php
namespace App\Http\Controllers; 
use App\Mail\ContactMail;
use App\Models\Product;
use App\Models\Category;
use App\Notifications\ContactFormMessage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Recipient;
use Mail;
Class ContactController extends Controller
{
 public function contact()
 {
  
  return view('contact.indix')->with(
    [
        "products" => Product::latest()->paginate(10),
        "categories" => Category::has("products")->get(),
    ]
    );
 }
 public function sendEmail(Request $request)
 {
  $datalis=[
    'name' => $request->name,
    'email' => $request->email,
    'message' => $request->message,
  ];
  Mail::to('decoshopagence@gmail.com')->send(new contactMail($datalis));
  return back()->with('message_sent','Your Message has been sent successfully!');
 }

}
