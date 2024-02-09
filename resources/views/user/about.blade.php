@extends('user.layouts.app')
@section('meta_title','caters')


@include('user.includes.navbar')


       

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
<br>
<br>
                    <h1 class="display-3 text-white mb-3 animated slideInDown" style="text-align:center;">About Us</h1>
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


<div class="container-xxl py-5" style="background-color:#bffd89; margin: -50px 0;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="abt">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Chai Thekha</h1>
                <p class="section-description">
                    Welcome to ChaiTheka, where passion for tea meets the art of hospitality. We are a team of tea enthusiasts dedicated to creating unforgettable experiences through the essence of chai. Our journey began with a simple goal - to share the warmth and flavors of our favorite beverage with chai lovers like you.
                </p>
                <p class="section-description">
                    At Chai Theka, we believe in the power of a perfectly brewed cup of tea to bring people together. Whether it's a corporate event, a social gathering, or a private celebration, our skilled team crafts a tea experience that transcends the ordinary. We source the finest tea leaves, blend them with precision, and serve each cup with a touch of love.
                </p>
                <p class="section-description">
                    Our commitment goes beyond just tea; it's about curating moments that linger on taste buds and in memories. Join us on this flavorful journey, and let Chai Theka add a dash of warmth to your special occasions.
                </p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
            </div>
        </div>
    </div>
</div>
</div>
<style>
.section-description{
    color:#d17979;
    font-size: 20px;
    font-family: cursive;
}
.abt {
    margin-top: 50px;
    margin-bottom: 50px;
    box-shadow: black 0 0px 15px -3px;
    padding: 50px 30px 50px 30px;
    border-radius: 15px;
    background-color: white;
}

</style>
<script>
    function openCommentModal() {
    var id = 1; 
    $('#comment-modal-body').html(null);
    $.post("{{ route('get-comment') }}", {
        _token: '{{ csrf_token() }}',
        id: id
    }, function(data) {
        $('#comment-modal').modal('show');
        $('#comment-modal-body').html(data);
    });
    }
    </script>

@include('user.includes.footer')

@section('style')
    
@endsection
@section('script')
    
@endsection