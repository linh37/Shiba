@extends('home')
@section('content')
<div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="#">
							<div class="group-input">
								<label for="name">User Name</label>
								<input type="text" name="name" id="name" placeholder="Your Name" required/>
							</div>
                            <div class="group-input">
                                <label for="email">Email address *</label>
                                <input type="email" id="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="text" id="pass">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Confirm Password *</label>
                                <input type="text" id="con-pass">
							</div>
							<div class="group-input">
								<input type="file" id="img_up" style="display: none">
							</div>
							<div class="group-input">
								<p id="Up_img" style="cursor: pointer;">Upload Avatar</p>
							</div>
                            <button type="submit" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="{{route('signin')}}" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../resources/js/signup.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection