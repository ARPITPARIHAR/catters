
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
    <h2 class="sec-title" style="margin-bottom:0px;">Host Your Kids' Party at Chai Theka</h2>

    <br>
    <br>
    <div class="row">
        <div class="col-lg-6">
   

            <div class="event">Create unforgettable moments for your little ones by hosting their party at Chai Theka. Our delightful tea and coffee options, specially crafted for kids, combined with a cheerful and kid-friendly atmosphere, make every celebration here truly magical. Let the vibrant decorations and themed parties with beloved characters bring joy to your child's special day. Chai Theka is dedicated to ensuring a safe, entertaining, and memorable experience for every young guest.Book your kids' party with us and create wonderful memories for your little ones!</div>


        </div>
    </div>
            <br>
            <br>
            <br>
               <div class="center" style="text-align:center;">

   
    <h2>Our Kids' Party Packages:</h2>
    <ul>
        <li>Special kids' menu with fun and delicious tea and coffee options</li>
        <li>Cute and colorful decorations to create a lively and cheerful ambiance</li>
        <li>Themed parties with characters and activities that kids love</li>
        <li>Party favors and surprises for the little guests</li>
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