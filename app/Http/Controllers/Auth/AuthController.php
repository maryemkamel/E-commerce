<?php

  

namespace App\Http\Controllers\Auth;

  

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Session;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Hash;

  

class AuthController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()

    {

        return view('auth.login')->with(
            [
                "products" => Product::latest()->paginate(10),
                "categories" => Category::has("products")->get(),
            ]
            );

    }  

      

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function registration()

    {

        return view('auth.registration')->with(
            [
                "products" => Product::latest()->paginate(10),
                "categories" => Category::has("products")->get(),
            ]
            );

    }

      

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function postLogin(Request $request)

    {

        $request->validate([

            'email' => 'required',

            'password' => 'required',

        ]);

   

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            

            return redirect()->intended('')

                        ->withSuccess('Success!You have Successfully loggedin');

        }

  

        return redirect("login")->with('warning','Oppes! You have entered invalid credentials');

    }

      

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function postRegistration(Request $request)

    {  

        $request->validate([

            'name' => 'required',

            'email' => 'required|email|unique:users',

            'password' => 'required|min:6',

        ]);

           

        $data = $request->all();

        $check = $this->create($data);

         

        return redirect("login")->with('Great! You have Successfully loggedin');

    }


    

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function dashboard()

    {

        if(Auth::check()){

            return view('dashboard');

        }

  

        return redirect("login")->withSuccess('Opps! You do not have access');

    }

    

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function create(array $data)

    {

      return User::create([

        'name' => $data['name'],

        'email' => $data['email'],

        'password' => Hash::make($data['password'])

      ]);

    }

    

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function logout(Request $request) {
       
     
        Session::flush();

        Auth::logout();

  

        return Redirect('login');

    }

    public function username()
    {
        $field = Auth::user()->field;
        return $field;
    }
    protected function guard()
    {
        return Auth::guard('guard-name');
    }
}