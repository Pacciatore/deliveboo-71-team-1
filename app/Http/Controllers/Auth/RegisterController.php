<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
            'type' => [ 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:80'],
            'vat_number' => ['required', 'numeric', 'digits:11'],
            'imgPath' => ['string', 'max:150'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Generate a slug for user's registration.
     *
     */
    private function getSlug($activity_name){
        $slug = Str::slug($activity_name);
        $slug_base = $slug;

        $existingUser = User::where('slug', $slug)->first();
        $counter = 1;
        while($existingUser){
            $slug = $slug_base . '_' . $counter;
            $counter++;
            $existingUser = User::where('slug', $slug)->first();
        }
        return $slug;
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
            'activity_name' => $data['activity_name'],
            'type' => $data['type'],
            'email' => $data['email'],
            'address' => $data['address'],
            'vat_number' => $data['vat_number'],
            'slug' => $this->getSlug($data['activity_name']),
            'imgPath' => $data['image'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function store(array $data)
    {
        $imgPath = Storage::put('uploads', $data['image']);
    }


    
}
