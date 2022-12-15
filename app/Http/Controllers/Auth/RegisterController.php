<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Type;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'activity_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:80'],
            'vat_number' => ['required', 'numeric', 'digits:11'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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

        
        
        $user = new User();

        
        $user->name = $data['name'];
        $user->activity_name = $data['activity_name'];
        $user->email = $data['email'];
        $user->address = $data['address'];
        $user->vat_number = $data['vat_number'];
        $user->slug = $data['vat_number'];
        $user->password = Hash::make($data['password']);

        $user->save();

        if(array_key_exists('types', $data)){
            $user->types()->sync($data['types']);
        }

        return $user;

        
        

        // return User::create([
        //     'name' => $data['name'],
        //     'activity_name' => $data['activity_name'],
        //     'email' => $data['email'],
        //     'address' => $data['address'],
        //     'vat_number' => $data['vat_number'],
        //     'slug' => $data['vat_number'],
        //     'password' => Hash::make($data['password']),
        // ]);

        
    }
}
