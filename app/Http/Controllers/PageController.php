<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function getIndex(){
        return view('page.Homepage');
    }

    public function getSignUp(){
        return view('page.signup');
    }

    public function getSignIn(Request $request){
        if ($request->session()->get('user')) {
        return redirect('/');
        }

        return view('page.signin');
    }

    public function postSignIn(LoginRequest $request, UserService $userService)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $users = $userService->getUserByEmail($email);

        $user = reset($users);

        if (sizeof($users) <= 0 || $user['deleted_at']) {
           $errors = new MessageBag(['email' => 'Email not exists.']);

            return redirect()->back()->withInput()->withErrors($errors);
        }

        if (!Hash::check($password, $user['password'])) {
            $errors = new MessageBag(['password' => 'Password wrong.']);

            return redirect()->back()->withInput()->withErrors($errors);
        }
        $userRef = [
            'id' => array_key_first($users),
            'email' => $user['email'],
            'name' => $user['name'],
        ];

        $request->session()->put('user', $userRef);

        return redirect('/');
    }
    public function postSignUp(Request $request){
        /*$this->validate($request,
            [
                'name' => 'required|min:3',
                'email' => 'required|email|unique:users,email',
                'password' => 'required| min:6|max:32',
                'passwordAgain' => 'required|same:password'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên người dùng',
                'name.min' => 'tên người dùng phải ít nhất 3 kí tự',
                'email.required'=> 'Bạn chưa nhập email',
                'email.email'=>'bạn chua nhập đúng định dạng email',
                'email.unique'=>'Email đã tồn tại',
                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu phải có ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu có nhiều nhất 32 kí tự',
                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu chưa khớp'

            ]);*/
        $userRef = null;
        $testData = [
            'username' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avata'=>$request->img_up,
        ];
       
         try {
            $this->database->getReference('users')->push($testData);
             $userRef = $this->database->getReference('users')
                ->orderByKey()
                ->getSnapshot();
        } catch (Exception $exception) {
            Log::error($exception->getMessage());

        }
         
         return redirect()->route('HomePage');
    }
    
}
