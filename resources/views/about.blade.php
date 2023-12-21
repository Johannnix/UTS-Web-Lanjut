@extends('layout.app')
@section('content')
<div class="container">
    <div class="kotakLuar">
        <div class="aboutKiri">
            <h1 class="title-about">About</h1>
            <div class="kotakPanjang"> </div>
            <div class="kotakDeskripsi">
                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat tempore doloribus id! Debitis autem nostrum voluptatem harum pariatur temporibus placeat nesciunt sequi nemo laudantium laboriosam aspernatur ipsum assumenda ipsam in quasi atque, facere libero id accusamus minima suscipit. Nesciunt ducimus itaque natus quas est temporibus ad sequi praesentium fugiat quos.</p>
                <h3 class="deskripsi">Our Team:</h3>
                <div class="listNama">
                    <ol type="1">
                        <li class="deskripsi">Johan Hadi Winarto</li>
                        <li class="deskripsi">Viola Gita Jazzica</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="aboutKanan">
            <img class="imgAbout" src="{{ URL::asset('images/179-1793674_yverdon-esports-audience-logo-png-transparent-png-removebg-preview 1.png') }}" alt="">
        </div>
    </div>
</div>
@endsection
