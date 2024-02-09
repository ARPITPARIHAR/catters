
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
    <h2 class="sec-title" style="margin-bottom:0px;">Host Your Kitty Party at Chai Theka</h2>

    <br>
    <br>
    <div class="row">
        <div class="col-lg-6">
   

            <div class="event"> Host your events and parties at Chai Theka, where we bring people together with the perfect blend of delightful tea and coffee options in a welcoming and vibrant setting. Our goal is to make your special occasions truly memorable, whether it's a birthday, anniversary, kitty party, or any other celebration.At Chai Theka, we understand the importance of every celebration, and we're committed to making your events extra special. Let us be your chosen venue for creating lasting memories with your loved ones.</div>
        </div>
    </div>
            <br>
            <br>
            <br>
               <div class="center" style="text-align:center;">
    <h2>Our Event Hosting Highlights:</h2>
    <ul>
        <li>Customized menus featuring a diverse range of teas and coffees</li>
        <li>Themed decorations to suit the occasion and create a festive atmosphere</li>
        <li>Exclusive packages for birthdays, anniversaries, kitty parties, and more</li>
        <li>Flexible seating arrangements for intimate gatherings or larger parties</li>
        <li>Professional and friendly staff to ensure a seamless and enjoyable experience</li>
        <li>Special discounts for group bookings and loyal customers</li>
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