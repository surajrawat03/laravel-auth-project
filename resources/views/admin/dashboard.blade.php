@extends('layouts.app')

@section('content')
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="py-3">
        <div class="single-slider">
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/xph0vf5pvbxjf8xchwjk" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/xph0vf5pvbxjf8xchwjk" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap"></div>
            <div class="text-center" style="height:30vh"><img class="foodImage p-3" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap"></div>
        </div>
         {{-- <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div> --}}
    </div>
    <div class="topRestaurantContainer pt-5">
        <h4 class="">Top restaurant</h4>
        <div class="row topRestaurant">
            <div class="col-sm-4 col-md-3 col-lg-3 mb-3">
                <img class="foodImage" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap">
                <div class="">
                    <p class="mb-0"><strong>Dev International</strong></p>
                    <p class="text-muted detailTypeDetail">North Indian, Chinese, Fast Food, Beverages.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 mb-3">
                <img class="foodImage" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap">
                <div class="">
                    <p class=" mb-0"><strong>Dev International</strong></p>
                    <p class="text-muted detailTypeDetail">North Indian, Chinese, Fast Food, Beverages.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 mb-3">
                <img class="foodImage" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap">
                <div class="">
                    <p class=" mb-0"><strong>Dev International</strong></p>
                    <p class="text-muted detailTypeDetail">North Indian, Chinese, Fast Food, Beverages.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 mb-3">
                <img class="foodImage" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap">
                <div class="">
                    <p class=" mb-0"><strong>Dev International</strong></p>
                    <p class="text-muted detailTypeDetail">North Indian, Chinese, Fast Food, Beverages.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 mb-3">
                <img class="foodImage" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap">
                <div class="">
                    <p class=" mb-0"><strong>Dev International</strong></p>
                    <p class="text-muted detailTypeDetail">North Indian, Chinese, Fast Food, Beverages.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 mb-3">
                <img class="foodImage" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap">
                <div class="">
                    <p class=" mb-0"><strong>Dev International</strong></p>
                    <p class="text-muted detailTypeDetail">North Indian, Chinese, Fast Food, Beverages.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 mb-3">
                <img class="foodImage" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap">
                <div class="">
                    <p class=" mb-0"><strong>Dev International</strong></p>
                    <p class="text-muted detailTypeDetail">North Indian, Chinese, Fast Food, Beverages.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 mb-3">
                <img class="foodImage" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap">
                <div class="">
                    <p class=" mb-0"><strong>Dev International</strong></p>
                    <p class="text-muted detailTypeDetail">North Indian, Chinese, Fast Food, Beverages.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 mb-3">
                <img class="foodImage" src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/enj3srsnhbltbom2ovvh" alt="Card image cap">
                <div class="">
                    <p class=" mb-0"><strong>Dev International</strong></p>
                    <p class="text-muted detailTypeDetail">North Indian, Chinese, Fast Food, Beverages.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

<!-- Slick Carousel JS -->
<script type="module" type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Initialize Slick Carousel -->
<script type="module">
    $(document).ready(function(){
        $('.single-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>

@endsection
