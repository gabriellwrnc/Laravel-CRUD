@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Penawaran Kami</h1>
            </div>
            <div class="card mx-auto" style="width: 50rem;">
                @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                <!-- <img src="{{URL('card-assets/img-1.jpeg')}}" class="card-img-top" alt="..."> -->
                <div id="carouselExampleInterval" class="card-img-top carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{URL('card-assets/img-1.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item h-100" data-bs-interval="2000">
                            <img src="{{URL('card-assets/img-2.jpg')}}" class="d-block w-100" alt="..." height="388">
                        </div>
                        <div class="carousel-item">
                            <img src="{{URL('card-assets/img-3.jpg')}}" class="d-block w-100" alt="..." height="388">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Kursus Mobil Bujeddd</h5>
                    <p class="card-text">Training a defensive driving dengan tujuan meningkatan kemampuan tekhnik mengemudi dan driving awareness untuk meminimalkan resiko kecelakaan yang dapat disebabkan oleh diri sendiri atau orang lain.</p>
                    <h4 class="my-4 pricing-card-title">Rp500.000<small class="text-muted fw-light"> sampai jago</small></h4>
                    <a href="/customer/create" class="w-100 btn btn-lg btn-outline-primary">Daftar</a>
                </div>
            </div>
        </div>
    </div>
    @endsection