@extends('user.layouts.app')
@section('meta_title','caters')

@include('user.includes.navbar')
       

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
<br>
<br>
                    <h1 class="display-3 text-white mb-3 animated slideInDown" style="text-align:center;">Gallery>Photos</h1>
                    {{-- <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                    </div> --}}
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="img/.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="image-row">
        <img src="img/image1.jpg" alt="Image 1" class="image">
        <img src="img/image2.jpg" alt="Image 2" class="image">
        <img src="img/image3.jpg" alt="Image 3" class="image">
    </div>

    <div class="image-row">
        <img src="img/image4.jpg" alt="Image 1" class="image">
        <img src="img/image5.jpg" alt="Image 2" class="image">
        <img src="img/image6.jpg" alt="Image 3" class="image">
    </div>
    <div class="image-row">
        <img src="img/image7.jpg" alt="Image 1" class="image">
        <img src="img/image8.jpg" alt="Image 2" class="image">
        <img src="img/image9.jpg" alt="Image 3" class="image">
    </div>

    <style>
        .image-row {
            display: flex;
            justify-content: space-between;
        }

        .image {
            width: 30%; /* Adjust the width as needed */
            margin: 10px;
        }
    </style>

    @include('user.includes.footer')

@section('style')
    
@endsection
@section('script')
    
@endsection