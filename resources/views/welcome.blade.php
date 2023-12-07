@extends('layout.app')
@section('content')
<div class="login">
    <div class="loginKiri">
        <h1 class="loginTitle">Sign In</h1>
        <form action="">
            @csrf
            <div class="formLogin">
                <input type="email" name="email" id="email" placeholder="Email" class="inputLogin">
            </div>
            <div class="formLogin">
                <input type="password" name="password" id="password" placeholder="Password" class="inputLogin">
            </div>
            <div class="formLogin">
                <button type="submit" class="buttonLogin">Sign In</button>
            </div>
        </form>
        <p class="regulasi">By continuing with google or email, you agree to task’s Tearms of services and Private policy.</p>
    </div>
    <div class="loginKanan">
        <img class="imgLogin" src="{{ URL::asset('images/Delivery-rafiki 3.png') }}" alt="">
    </div>
</div>
@endsection
