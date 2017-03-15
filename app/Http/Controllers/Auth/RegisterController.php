<?php

namespace App\Http\Controllers\Auth;

use App\Mailer\Mailer;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';
    protected $emailVerify;

    /**
     * RegisterController constructor.
     * @param Mailer $emailVerify
     */
    public function __construct(Mailer $emailVerify)
    {
        $this->middleware('guest');
        $this->emailVerify = $emailVerify;
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'avatar' => '/images/default_avatar.png',
            'confirmation_token' => str_random(40),
            'remember_token' => str_random(10),
            'api_token' => str_random(60)
        ]);

        $this->sendVerifyEmailTo($user);
        return $user;
    }

    private function sendVerifyEmailTo($user)
    {
        $data = [
            'url' => route('email.verify',['token' => $user->confirmation_token]),
            'name' => $user->name
        ];
        $this->emailVerify->sendTo('emails.welcome',$data,$user->email,'请激活您的邮件');
    }


}
