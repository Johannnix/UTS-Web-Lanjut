@extends('layout.app')
@section('content')
<div class="login">
    <div class="loginKanan">
        <img class="imgLogin" src="{{ URL::asset('images/Delivery-rafiki 2.png') }}" alt="">
    </div>
    <div class="loginKiri">
        <div class="layoutKanan">
            <h1 class="loginTitle">Sign Up</h1>
            <form action="">
                @csrf
                <a class="google input">
                    <img class="logoGoogle" src="{{ URL::asset('images/flat-color-icons_google.png') }}" alt="">
                    <p class="conGoogle">CONNECT WITH GOOGLE</p>
                </a>
                <div class="formLogin">
                    <input type="email" name="email" id="email" placeholder="Email" class="inputLogin">
                </div>
                <div class="formLogin">
                    <input type="password" name="password" id="password" placeholder="Password" class="inputLogin">
                </div>
                <div class="formLogin">
                    <button type="submit" class="buttonLogin">Sign Up</button>
                </div>
            </form>
            <p class="regulasi">By continuing with google or email, you agree to task’s Tearms of services and Private policy.</p>
        </div>
    </div>
</div>
@endsection
