
@extends('user.layouts.app')
@section('meta_title','caters')

@include('user.includes.navbar')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
<br>
<br>
            <h1 class="display-3 text-white mb-3 animated slideInDown" style="text-align:center;">Our Services</h1>
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



<body>
    <h2 class="sec-title" style="margin-bottom:0px;">Experience Festive Joy at Chai Theka</h2>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-6">
    <div class="event">Celebrate the spirit of festivals with Chai Theka, where our special tea and coffee blends bring a burst of flavor to the festivities in a joyful and vibrant ambiance. Immerse yourself in the magic of the season and create lasting memories with our delightful offerings.Come join us in celebrating the joy of festivals!</div>
        </div>
    </div>
    <br>
    <br>
<div class="center" style="text-align: center;">
    <h2>Our Festival Specials:</h2>
    <ul>
        <li>Special festival-themed tea and coffee varieties</li>
        <li>Traditional festive decorations and ambiance</li>
        <li>Exclusive discounts during the festival season</li>
        <li>Festive music and cultural performances</li>
    </ul>

</div>


</body>


<style>

    .sec-title{
margin: 0 0 4px;
    padding: 0;
    font-size: 48px;
    line-height: 40px;
    color: #CB0000;
    text-align: center;
    font-family: 'Great Vibes';
    font-weight: normal;
    }


    .event{
    margin-top: 0;
    margin-bottom: 1rem;
    font-size: 22px;
    margin-left:60px;
}
.event {
    font-family: 'Dancing Script', cursive !important;
    color:#0b00f1;
}
.event {
    margin: 0 0 20px;
}
li{
    font-family: 'Dancing Script', cursive !important;
    font-size: 22px;
    color:#0b00f1;
}
</style> 

@include('user.includes.footer')

@section('style')
    
@endsection
@section('script')
    
@endsection