<?php

namespace App\Http\Controllers;
use Log;
use Exception;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Hash;
use Mail;
class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userRef = null;
        $userRef = [
            'name' => 'le.thi.thu',
            'email' => 'le.thi.thu@sun-asterisk.com',
        ];
         try {
            $this->database->getReference('users')->push($testData);
             $userRef = $this->database->getReference('users')
                ->orderByKey()
                ->getSnapshot();
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
        }
         dd($userRef->getValue());
    }
    public function home(){
        return view('welcome');
    }

    public function showLogin(){
        return view('login');
    }

    public function login(Request $request){
        $rules = [
        'email' =>'required|email',
        'password' => 'required|min:6'
        ];
        $messages = [
        'email.required' => 'Email là trường bắt buộc',
        'email.email' => 'Email không đúng định dạng',
        'password.required' => 'Mật khẩu là trường bắt buộc',
        'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
        // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
        return redirect('login')->withErrors($validator)->withInput();
        } else {
            $email = $request['email'];
            $password = $request['password']; 
            if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $userLogin = Auth::user();
            return redirect()->route('home');
            }
            else {
            return view('login',['error'=>"Kiểm tra lại email hoặc mật khẩu."]);
            }
        }
    }
}

