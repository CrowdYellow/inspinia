<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $request['ip'] = $request->getClientIp();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
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
            'name'     => ['required', 'string', 'between:4,25'],
            'phone'    => ['required', 'unique:users', 'regex:/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|(17[0,3,5-8])|(18[0-9])|166|198|199)\d{8}$/'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'captcha'  => ['required', 'captcha'],
        ], [
            'name.required'      => '用户名不能为空',
            'name.string'        => '用户名必须是字符串',
            'name.between'       => '用户名4，25个字符',
            'phone.required'     => '手机号不能为空',
            'phone.unique'       => '手机号已存在',
            'phone.regex'        => '手机号格式不对',
            'password.required'  => '密码不能为空',
            'password.string'    => '密码必须是字符串',
            'password.min'       => '密码最短8位',
            'password.confirmed' => '两次密码不一致',
            'captcha.required'   => '验证码不能为空',
            'captcha.captcha'    => '请输入正确的验证码',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'ip' => $data['ip'],
            'api_token' => Str::random(60),
            'avatar' => 'images/user/default.png',
        ]);
    }
}
