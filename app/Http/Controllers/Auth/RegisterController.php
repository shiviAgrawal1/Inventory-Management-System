<?php
namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255|alpha',
            'user_id' => 'required|string|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'Address' => 'required|string|max:200|alpha_dash',
            'dob' => 'required|date',
            'Contact_no' => 'required|digits:10|numeric',
            'password' => 'required|string|min:6|confirmed',
            //'Group' => 'required|string|max:20',
            //'avatar' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'user_id' => $data['user_id'],
            'email' => $data['email'],
            'Address' => $data['Address'],
            'dob' => $data['dob'],
            'Contact_no' => $data['Contact_no'],
            'password' => bcrypt($data['password']),
                //'Group' => $data['Group'],
               //'avatar' => $data['avatar'],
        ]);
    }
}
