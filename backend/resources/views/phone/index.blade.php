@extends('layouts.main')

@section("title", $title)

@section('content')
<div class="container">
    <h1>{{$title}}</h1>
    


    <div class="row align-items-stretch">
    @foreach($phones as $phone)
        <div class="col-md-6 col-lg-3 py-3 ">
            <div class="card h-100">
                <img src="img/{{$phone['id']}}.jpg" class="card-img-top" alt="Apple iPhone 16">
                <div class="card-body">
                    <h5 class="card-title">Apple iPhone 16</h5>
                    <p class="card-text">Mobiltelefon - 6,1&quot;-es Super Retina XDR OLED kijelző 2556 × 1179 felbontással, 8 GB RAM, 128 GB belső tárhely, single + eSIM, Apple A18 Bionic processzor, kameramodul: 48Mpx (f/1,6) fő kamera + 12Mpx széles látószögű, GPS, NFC, LTE, 5G, USB-C csatlakozó, IP68 vízálló, gyorstöltés, vezeték nélküli töltés 15W, megjelenés éve 2024, iOS operációs rendszer</p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-8 d-grid">
                            <a href="#" class="btn btn-primary">Apple iPhone 16</a>
                        </div>
                        <div class="col-md-4">
                            <span>399 990 Ft</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
