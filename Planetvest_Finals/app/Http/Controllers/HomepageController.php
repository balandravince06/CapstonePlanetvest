<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Models\User;
use Hash;
use Session;


class HomepageController extends Controller
{
    public function index(Request $request): Factory|View|Application
    {
        return view('layout');
    }
    public function login(Request $request): Factory|View|Application
    {
        return view('login');
    }
    public function register(Request $request): Factory|View|Application
    {
        return view('register');
    }
    public function registerUser(Request $request){
        
       $data = $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'confirm_password'=>'required|min:6|same:password',
        ],[
            'confirm_password.same' => 'Password did not matched!',
            'confirm_password.required' => 'Confirm password is required!'
        ]
    );
        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->confirm_password = Hash::make($request->confirm_password);
        $res = $user->save();
        if($res){
          
            return back()->with('success', 'You have registered successfully!');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }
    public function loginUser(Request $request){
        $input = $request->all();
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if(!$user){
            return back()->with('fail', 'We do not recognize your email address.');
        }else{
            if(Hash::check($request->password, $user->password)){
                if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
                    $request->session()->put('LoggedUser', $user->id);
                }
                     if(auth()->user()->role == 'admin'){
                        return redirect()->route('admin');
                    }
                     if(auth()->user()->role == 'farmer'){
                        return redirect()->route('farmer');
                    }
                    else{
                        return redirect('/dashboard');
                    }
            }else{
                return back()->with('fail', 'Incorrect password.');
    }
    // if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    // {
    // //    else if(auth()->user()->role == 'admin'){
    // //         return redirect()->route('admin');
    // //     }
    // //     else if(auth()->user()->role == 'farmer'){
    // //         return redirect()->route('farmer');
    // //     }
    //     // else{
    //     //     return redirect()->route('dashboard');
    //     // }
    // }
}
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function logout(){
        if(Session::has('LoggedUser')){
            Session::pull('LoggedUser');
           return redirect('login');
        }
    }
    public function admin(){
        return view('admin');
    }
    public function farmer(){
        return view('farmer');
    }
}

       

   

    
        