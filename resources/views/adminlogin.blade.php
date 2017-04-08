@extends('layouts.signup')
@section('content')        

        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{ route('adminlogin') }}" method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2016 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
              <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
          </section>
        </div>

@endsection