
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

    <h1 class="sec-title" style="margin-bottom:0px;">Celebrate Your Birthday at Chai Theka</h1>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-6">
    <div class="event">Make your special day even more extraordinary by celebrating your birthday with us! At Chai Theka, we offer a delightful range of tea and coffee options that are sure to add a touch of warmth and flavor to your celebration.Whether you're planning an intimate gathering or a lively party, Chai Theka is the perfect venue for making your birthday celebration memorable. Book your spot with us and let us add a touch of warmth and flavor to your special day!</div>
    </div>
</div>
<br>
<br>
<br>
   <div class="center" style="text-align:center;">
    <h2>Our Birthday Celebration Highlights:</h2>
    <ul>
        <li>Exclusive birthday blends of tea and coffee for a unique experience</li>
        <li>Customized birthday menu with delicious treats and desserts</li>
        <li>Decorations and themes to match your birthday style</li>
        <li>Complimentary dessert for the birthday guest</li>
        <li>Special discounts for group bookings and large parties</li>
        <li>Personalized service to make you and your guests feel truly special</li>
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