@extends('layouts.front')
@section('body')
<section class="z-0">
    <div class="relative w-full" x-data="{ active: 1, loop() { setInterval(() => { this.active = this.active === 1 ? 1 : this.active+1 }, 3000) }, }" x-init="loop" >
        <div class="flex overflow-x-hidden relative w-full h-[700px]" >

            <div class="bg-black absolute w-full h-full" x-show="active == 1" x-transition:enter="transition duration-1000" x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition duration-1000" x-transition:leave-start="transform" x-transition:leave-end="transform -translate-x-full" >
                <div class="slider-overlay-tilt flex flex-col justify-between">

                    <div>
                        <div class="slider-overlay-slogan">
                            Slogan
                        </div>
                        <div class="slider-overlay-title text-center">
                            Title
                        </div>
                    </div>

                    <div class="ml-10">
                        <div class="slider-overlay-details pl-1 mb-4 md:mb-0">
                            MiniDetails
                        </div>
                        <a class="btn border-white px-4 py-2 md:absolute right-20 bottom-5 md:bottom-28 text-white hover:!text-red-600 hover:!border-red-600">
                            More details
                        </a>
                    </div>

                </div>
                <img class="w-full h-full object-cover" alt="2" src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" />
            </div>

        </div>
    </div>
</section>
<section class="bg-gray-50 pb-20 md:mt-[-110px] z-10">
    <div class="container max-w-6xl p-8" x-data={modeBuy:true}>
        <div id="quickSearch" class="row flex justify-center" >
            <div class="form-selector row">
                <div x-on:click="modeBuy = true" :class=" modeBuy ? 'bg-white text-slate-800 active-form' : 'bg-slate-800 text-white'" class="col-md-5 relative form-buy p-3 px-5 text-4xl font-light cursor-pointer md:max-w-[12ch]">
                    Buy a car
                </div>
                <div x-on:click="modeBuy = false" :class=" !modeBuy ? 'bg-white text-slate-800 active-form' : 'bg-slate-800 text-white'" class="col-md-5 relative form-rent p-3 px-5 text-4xl font-light cursor-pointer md:max-w-[12ch]">
                    Rent a car
                </div>
            </div>
            <div class="form-body-buy row z-10" >
                <form action="" method="GET" class="p-8 bg-white shadow" x-show="modeBuy">
                    <div class="row flex items-end">
                        <div class="col-md-3 p-0 m-0">
                            <label for="manufacturer" class="mb-1 pl-1 font-semibold">01 Manufacturer</label>
                            <select name="manufacturer" id="manufacturer" class="w-full py-3">
                                <option value="">Select Manufacturer</option>
                            </select>
                        </div>

                        <div class="col-md-3 p-0 m-0">
                            <label for="model" class="mb-1 pl-1 font-semibold">02 Model</label>
                            <select name="model" id="model" class="w-full py-3">
                                <option value="">Select Model</option>
                            </select>
                        </div>

                        <div class="col-md-3 p-0 m-0">
                            <label for="maxPrice" class="mb-1 pl-1 font-semibold">03 Max Price</label>
                            <select name="maxPrice" id="maxPrice" class="w-full py-3">
                                <option value="">Select Producer</option>
                            </select>
                        </div>
                        <input type="submit" value="Submit" class="col-md-3 block py-3 border-[1px] border-red-700 bg-red-700 hover:bg-red-600 text-white font-semibold">
                    </div>
                    <div class="flex gap-5 mt-3">
                        <div class="flex items-center"><input type="radio" name="type" class="mr-2 rounded" id="">New</div>
                        <div class="flex items-center"><input type="radio" name="type" class="mr-2 rounded" id="">Second</div>
                    </div>
                </form>

                <form action="" method="GET" class="p-8 bg-white shadow" x-show="!modeBuy">
                    <div class="row flex items-end">
                        <div class="col-md-3 p-0 m-0">
                            <label for="manufacturer" class="mb-1 pl-1 font-semibold">01 Manufacturer</label>
                            <select name="manufacturer" id="manufacturer" class="w-full py-3">
                                <option value="">Select Manufacturer</option>
                            </select>
                        </div>

                        <div class="col-md-3 p-0 m-0">
                            <label for="model" class="mb-1 pl-1 font-semibold">02 Model</label>
                            <select name="model" id="model" class="w-full py-3">
                                <option value="">Select Model</option>
                            </select>
                        </div>

                        <div class="col-md-3 p-0 m-0">
                            <label for="maxPrice" class="mb-1 pl-1 font-semibold">03 Max Price</label>
                            <select name="maxPrice" id="maxPrice" class="w-full py-3">
                                <option value="">Select Producer</option>
                            </select>
                        </div>
                        <input type="submit" value="Submit" class="col-md-3 block py-3 border-[1px] border-red-700 bg-red-700 hover:bg-red-600 text-white font-semibold">
                    </div>
                </form>

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
<section class="overflow-hidden w-full">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="px-2">Slogan with some details</div>
                <div class="text-5xl py-3 font-semibold"><h2>Title something <span class="text-red-700">accent</span></h2></div>
            </div>
            <div class="col-md-5">

            </div>
        </div>
    </div>
    <div class="glide bg-slate-800">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide p-3 pt-0">
                    <div class="row mb-2 bg-white">
                        <img class="object-cover max-h-[300px]" src="{{asset('storage/icons/007-gearshift.png')}}" alt="">
                    </div>
                    <div class="row bg-white">
                        <div class="w-full p-3 font-semibold text-xl text-center">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <div class="w-full flex text-sm border-t-2">
                            <div class="col-4 text-center py-3 px-2 border-r-2">
                                X km
                            </div>
                            <div class="col-4 text-center py-3 px-2 border-r-2">
                                Model 1231
                            </div>
                            <div class="col-4 text-center py-3 px-2">
                                Benzina
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="col-mad-3 offset-1 py-20">
                <div class="max-w-[250px]">
                    <a href="" class="flex items-center justify-center m-auto py-3 px-5 bg-red-700 hover:bg-red-600 text-white font-semibold w-auto">
                        <span class="material-symbols-outlined mr-1">
                            list
                        </span>
                        See all cars
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="bg-gray-50 py-28">
    <div class="container-lg px-5">
        <div class="row" x-data="{current:0}">
            <div class="col-lg-6 mb-10 md:mb-0">
                <ul class="nav row mr-0 md:mr-8">

                    <li class="col-lg-6 col-md-4 flex-shrink-0 flex-grow-0 serviceShadow"
                    :class="current == 0 ? 'serviceActive bg-red-700':''" x-on:click="current=0">
                        <div class="nav-link relative p-7 text-lg text-right">
                            <span class="absolute top-4 left-5 font-bold text-gray-400"
                            :class="current == 0 ? 'text-white opacity-30 text-4xl':''">01</span>
                            <img src="{{asset('storage/icons/008-car-door.png')}}" class="my-3 flaticon-car-door max-w-[60px] ml-auto"
                            :class="current == 0 ? 'invert':''">
                            <span class="text-lg text-gray-700"
                            :class="current == 0 ? 'text-white font-bold':''">Parts Repairing</span>
                        </div>
                    </li>

                    <li class="col-lg-6 col-md-4 flex-shrink-0 flex-grow-0 serviceShadow"
                    :class="current == 1 ? 'serviceActive bg-red-700':''" x-on:click="current=1">
                        <div class="nav-link relative p-7 text-lg text-right">
                            <span class="absolute top-4 left-5 font-bold text-gray-400"
                            :class="current == 1 ? 'text-white opacity-30 text-4xl':''">01</span>
                            <img src="{{asset('storage/icons/008-car-door.png')}}" class="my-3 flaticon-car-door max-w-[60px] ml-auto"
                            :class="current == 1 ? 'invert':''">
                            <span class="text-lg text-gray-700"
                            :class="current == 1 ? 'text-white font-bold':''">Parts Repairing</span>
                        </div>
                    </li>

                    <li class="col-lg-6 col-md-4 flex-shrink-0 flex-grow-0 serviceShadow"
                    :class="current == 2 ? 'serviceActive bg-red-700':''" x-on:click="current=2">
                        <div class="nav-link relative p-7 text-lg text-right">
                            <span class="absolute top-4 left-5 font-bold text-gray-400"
                            :class="current == 2 ? 'text-white opacity-30 text-4xl':''">01</span>
                            <img src="{{asset('storage/icons/008-car-door.png')}}" class="my-3 flaticon-car-door max-w-[60px] ml-auto"
                            :class="current == 2 ? 'invert':''">
                            <span class="text-lg text-gray-700"
                            :class="current == 2 ? 'text-white font-bold':''">Parts Repairing</span>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-lg-6">
                <div class="px-2">Slogan with some details</div>
                <div class="text-5xl py-3"><h2 class="font-extrabold">Title something <span class="text-red-700 font-extrabold">accent</span></h2></div>
                <div class="w-full" x-show="current==0">
                    <img src="{{asset('storage/icons/008-car-door.png')}}" alt="" class="max-w-[540px] w-full max-h-[310px] object-cover">
                    <h3 class="pt-8 pb-3 font-bold text-2xl">Parts Repairing</h3>
                    <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
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
<div class="container mt-[-50px]">
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
<section>
    <div class="container py-20 relative" x-data="carsFilterFirstPage">
        <div class="row">
            <div class="mb-10 text-center">
                <div class="px-2">Slogan with some details</div>
                <div class="text-5xl py-3 font-semibold"><h2>Title something <span class="text-red-700">accent</span></h2></div>
            </div>
        </div>
        <div class="row">
            <div class="m-auto flex justify-center gap-1 flex-wrap">
                <div class="bg-gray-200 rounded  px-7 py-1 hover:bg-gray-100 hover:text-red-700 cursor-pointer" @click="selected='All'" :class="selected=='All' ? 'text-red-700':'text-gray-800'">
                    All
                </div>
                <template x-for="producer in filters()">
                    <div class="bg-gray-200 rounded  px-7 py-1 hover:bg-gray-100 hover:text-red-700 cursor-pointer" x-text="producer" @click="selected=producer" :class="selected==producer ? 'text-red-700':'text-gray-800'"></div>
                </template>
            </div>
        </div>
        <div class="container-sm">
            <div class="row mt-20 flex flex-wrap justify-center gap-4">
                <template x-for="car in carsShow()">
                        <div class="bg-slate-800 px-0 text-white flex flex-col flex-shrink flex-grow min-w-[250px] max-w-[400px]">
                            <img src="{{asset('storage/icons/008-car-door.png')}}" alt="" class="bg-white w-full h-[260px] object-cover">
                            <div class="text-center py-7">
                                <div class="text-xl font-bold text-white mb-6">
                                    <span class="bg-red-600 text-base rounded px-2 py-1 mr-2" x-show="car.new">
                                        NEW
                                    </span>
                                    <span x-text="car.producer + ' ' + car.model"></span>
                                </div>
                                <div class="mb-6 ">
                                    <div class="text-xs flex justify-center text-nowrap">
                                        <div class="px-2 border-r border-r-gray-400" x-text="car.km + ' km'">
                                        </div>
                                        <div class="px-2 border-r border-r-gray-400" x-text="car.an">
                                        </div>
                                        <div class="px-2 border-r border-r-gray-400" x-text="car.trasmisie">
                                        </div>
                                        <div class="px-2 border-r border-r-gray-400" x-text="car.combustibil">
                                        </div>
                                        <div class="px-2 " x-text="car.putere + 'hp'">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full pt-4 text-2xl border-t text-center" x-text="'$' + car.pret.format()">
                                </div>
                            </div>
                        </div>
                </template>
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
<section class="py-28">
    <div class="container-sm">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div style="background-image: url('{{asset('storage/bgs/banner-custom-bg-1-min.png')}}')" class="relative cutCornerBL px-16 pt-36 pb-24 bg-slate-700 text-center flex justify-center flex-col items-center gap-7 text-white ">
                    <h2 class="text-2xl font-bold max-w-[280px]">
                        ARE YOU LOOKING TO BUY A NEW CAR?
                    </h2>
                    <p>
                        Start searching our inventory that includes 1000+ cars
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div style="background-image: url('{{asset('storage/bgs/banner-custom-bg-1-min.png')}}')" class="relative cutCornerTR px-16 pt-36 pb-24 bg-red-800 text-center flex justify-center flex-col items-center gap-7 text-white ">
                    <h2 class="text-2xl font-bold max-w-[280px]">
                        ARE YOU LOOKING TO BUY A NEW CAR?
                    </h2>
                    <p>
                        Start searching our inventory that includes 2000+ cars
                    </p>
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
let views = 4;
let footerViews = 10

if(window.innerWidth<450){
    views = 1
    footerViews = 2
}
else if(window.innerWidth<720){
    views = 2
    footerViews = 5
}
else if(window.innerWidth<1024){
    views = 3
    footerViews = 10
}

let carouselconfig = {
    type: 'carousel',
    startAt: 0,
    perView: views,
    autoplay:4000,
    hoverpause:true,
}

let footerCarousel = {
    type: 'carousel',
    startAt: 0,
    perView: footerViews,
    autoplay:4000,
    hoverpause:true,
}

const cars = @json( $data['cars'] )
</script>
@endsection
