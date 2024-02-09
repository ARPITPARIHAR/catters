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
    <h2 class="sec-title" style="margin-bottom:0px;">Make Your Marriage Event Unforgettable at Chai Theka</h2>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-6">
   

    <div class="event">Celebrate the union of two souls in the warm and inviting ambiance of Chai Theka. Elevate your marriage event with our exquisite tea and coffee offerings, adding a touch of sophistication and flavor to your special day. Our dedicated team is here to ensure that your celebration is seamless, delightful, and filled with beautiful memories.At Chai Theka, we understand the significance of your marriage event, and we are committed to making it a day to remember. From the ceremony to the reception, let us be a part of your love story and create an enchanting experience for you and your guests.</div>
</div>
</div>
<br>
<br>
<br>
   <div class="center" style="text-align:center;">
    <h2>Our Marriage Event Highlights:</h2>
    <ul>
        <li>Customized tea and coffee menus to suit the preferences of the bride and groom</li>
        <li>Elegant and thematic decorations for a romantic atmosphere</li>
        <li>Exclusive seating arrangements to accommodate your guests comfortably</li>
        <li>Professional and friendly staff to cater to your every need</li>
        <li>Complimentary dessert for the newlyweds to sweeten the celebration</li>
        <li>Special offers for bulk orders and extended celebrations</li>
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