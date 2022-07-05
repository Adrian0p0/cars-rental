@extends('layouts.front')
@section('body')
<x-head-banner title="Despre noi" />
<section class="py-28">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="b-advantages">
                    <i class="b-advantages__ic flaticon-car-repair-check-list"></i>
                    <div class="b-advantages__title">Easy Financing</div>
                    <div class="b-advantages__info">
                        Edipisicing elit sed eiusmodsul  sed tempor enim min veniam aute nostrud xercitation comsec nsequat duis sintaute irure.
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="b-advantages active">
                    <i class="b-advantages__ic flaticon-speedometer"></i>
                    <div class="b-advantages__title">All Brands Cars</div>
                    <div class="b-advantages__info">
                        Edipisicing elit sed eiusmodsul  sed tempor enim min veniam aute nostrud xercitation comsec nsequat duis sintaute irure.
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="b-advantages">
                    <i class="b-advantages__ic flaticon-car-repair"></i>
                    <div class="b-advantages__title">Quality Services</div>
                    <div class="b-advantages__info">
                        Edipisicing elit sed eiusmodsul  sed tempor enim min veniam aute nostrud xercitation comsec nsequat duis sintaute irure.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-28">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="px-2">Slogan with some details</div>
                    <div class="text-5xl py-3 font-semibold"><h2>Title something <span class="text-red-700">accent</span></h2></div>
                    <div class="pl-4">
                        <p class="pb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ullam ut eveniet blanditiis dignissimos itaque voluptas veniam iste asperiores, ab mollitia quidem vitae dicta distinctio non fugiat sint impedit consectetur.
                        </p>
                        <p class="pb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dolorum iste esse amet laboriosam magni, nihil quae sint qui hic. Nesciunt ratione ad voluptatum totam aspernatur inventore tenetur consequuntur commodi.
                        </p>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4 border-r-2 text-center font-bold text-slate-800">
                            <img src="{{asset('storage/icons/004-car.png')}}" alt="" class="w-12 m-auto mb-3">
                            Lorem ipsum <br>dolor sit amet.
                        </div>
                        <div class="col-4 border-r-2 text-center font-bold text-slate-800">
                            <img src="{{asset('storage/icons/002-gearbox.png')}}" alt="" class="w-12 m-auto mb-3">
                            Lorem ipsum <br>dolor sit amet.
                        </div>
                        <div class="col-4 text-center font-bold text-slate-800">
                            <img src="{{asset('storage/icons/003-wrench.png')}}" alt="" class="w-12 m-auto mb-3">
                            Lorem ipsum <br>dolor sit amet.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container my-[-50px]">
    <ul class="row list-unstyled flex justify-center">
        <li class="col-lg-3 text-center ">
            <div class="relative py-14 bl-corner bg-gray-50 mt-4" x-data="counterUp" x-intersect="startCounter(10000)">
                <span class="block text-base font-bold text-gray-800">
                    VEHICLES STOCK
                </span>
                <span class="block text-4xl text-gray-800" x-text="Math.round(current)">
                </span>
            </div>
        </li>
        <li class="col-lg-3 text-center ">
            <div class="relative py-14 bl-corner bg-gray-50 mt-4" x-data="counterUp" x-intersect="startCounter(10000)">
                <span class="block text-base font-bold text-gray-800">
                    VEHICLES STOCK
                </span>
                <span class="block text-4xl text-gray-800" x-text="Math.round(current)">
                </span>
            </div>
        </li>
        <li class="col-lg-3 text-center ">
            <div class="relative py-14 bl-corner bg-gray-50 mt-4" x-data="counterUp" x-intersect="startCounter(10000)">
                <span class="block text-base font-bold text-gray-800">
                    VEHICLES STOCK
                </span>
                <span class="block text-4xl text-gray-800" x-text="Math.round(current)">
                </span>
            </div>
        </li>
    </ul>
</div>
<section class="bg-slate-800 py-32">
    <div class="container-lg">
        <div class="row text-white">
            <div class="col-xl-6">
                <h2 class="calltoaction mb-4">Lorem ipsum dolor sit amet.</h2>
                <p class="text-sm text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro vero natus deleniti aut soluta veniam.</p>
            </div>
            <div class="col-xl-6 md:pt-0 pt-4">
                <div class="flex flex-row flex-wrap">
                    <a href="" class="flex items-center justify-center m-auto py-3 px-5 bg-red-700 hover:bg-red-600 text-white font-semibold w-full md:w-auto">
                        Get Registered
                    </a>
                    <a href="" class="ml-10 hover:text-red-600 w-full md:w-auto mt-4 md:mt-0">
                        <p class="text-gray-400 text-sm">Call Us For Booking Vehicle</p>
                        <div class="flex justify-start items-center text-2xl font-bold">
                            <span class="material-symbols-outlined text-[35px] text-red-700">
                                call
                            </span>
                            <span>{{$data['phone']['value']}}</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-slate-100 py-28">
    <div class="container">
        <div class="row">
            <div class="mb-10 text-center">
                <div class="px-2">Slogan with some details</div>
                <div class="text-5xl py-3 font-semibold"><h2>Title something <span class="text-red-700">accent</span></h2></div>
            </div>
        </div>
        <div class="row mt-4">

            <div class="col-lg-3 lg:mx-6 mt-14 numberLines relative text-center">
                <div class="numberLarge">
                    01
                </div>
                <div class="text-gray-800 font-bold text-lg mb-3 text-center">
                    Search Our Inventory
                </div>
                <div class="text-center">
                    Magna aliqua enim aduas dui veniam quis nostrud exercitation ullam laboris aut aliquip ex consequat.
                </div>
            </div>

            <div class="col-lg-3 lg:mx-6 mt-14 numberLines relative text-center">
                <div class="numberLarge">
                    01
                </div>
                <div class="text-gray-800 font-bold text-lg mb-3 text-center">
                    Search Our Inventory
                </div>
                <div class="text-center">
                    Magna aliqua enim aduas dui veniam quis nostrud exercitation ullam laboris aut aliquip ex consequat.
                </div>
            </div>

        </div>
    </div>
</section>
<div class="footer_glide bg-slate-800">
    <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
            <li class="glide__slide p-0">
                <div class="row bg-white">
                    <img class="object-cover max-h-[300px]" src="{{asset('storage/icons/007-gearshift.png')}}" alt="">
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection
@section('footerScripts')
<script>
let footerViews = 10

if(window.innerWidth<450){
    footerViews = 2
}
else if(window.innerWidth<720){
    footerViews = 5
}
else if(window.innerWidth<1024){
    footerViews = 10
}

let footerCarousel = {
    type: 'carousel',
    startAt: 0,
    perView: footerViews,
    autoplay:4000,
    hoverpause:true,
}

</script>
@endsection
