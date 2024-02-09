

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
    <h2 class="sec-title" style="margin-bottom:0px;">Celebrate Your Special Occasion at Chai Theka</h2>

    <br>
    <br>
    <div class="row">
        <div class="col-lg-6">
    <div class="event">Celebrate your special occasion with Chai Theka, where joy and happiness are brewed into every cup. Our exquisite tea and coffee offerings are designed to elevate your celebration, creating moments that are as unique as you are. Let us be a part of your special day, turning it into a delightful experience filled with warmth and flavor</div>
</div>
</div>
        <br>
        <br>
        <br>
           <div class="center" style="text-align:center;">
    <h2>Our Special Occasion Packages:</h2>
    <ul>
        <li>Customized tea and coffee menu</li>
        <li>Decorations and themes as per your occasion</li>
        <li>Exclusive seating arrangements for your guests</li>
        <li>Personalized service to make your occasion memorable</li>
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