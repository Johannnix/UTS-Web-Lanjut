@extends('layout.app')
@section('content')
<div class="container">
    <div>
        <h1 class="title-about">Services</h1>
        <div class="kotakPanjangSV"> </div>
        <div class="sv">
            @foreach($data as $service)
            <div class="card">
                <img src="{{ $service['path'] }}" alt="{{ $service['title'] }}">
                <h1>{{ $service['title'] }}</h1>
                <div class="kotakCard">
                    <p class="regulasi sv-text">{{ $service['description'] }}</p>
                    <h5 class="deskripsi sv-bot">
                        @foreach($service['services'] as $serviceItem)
                            {{ $serviceItem }} <br>
                        @endforeach
                    </h5>
                    <button class="order">Order Now!</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
