<nav x-data="{ navOpen: false, dropdown:false }" class="bg-white border-b border-gray-100 z-10 relative">
    <div id="detailsNav" class="bg-slate-800 ml-auto h-14 flex items-center relative overflow-hidden">
        <div class="flex w-full h-full">
            <div class="inline-block py-4 ml-auto">
                <ul class="flex items-center text-white text-sm mr-4">
                    <li class="px-4 border-r">
                        <a class="hover:border-b hover:text-red-600 px-1 transition-all" href="mailto:{{$nav_data[0]['value']}}">{{$nav_data[0]['value']}}</a>
                    </li>
                    <li class="px-4 border-r">
                        <a class="hover:border-b hover:text-red-600 px-1 transition-all" href="tel:{{str_replace('+','00',str_replace(' ','',$nav_data[1]['value']))}}">{{$nav_data[1]['value']}}</a>
                    </li>
                    <li class="px-4">
                        <a class="hover:border-b hover:text-red-600 px-1 transition-all" href="{{$nav_data[2]['value']}}">{{$nav_data[2]['value']}}</a>
                    </li>
                </ul>
            </div>
            <a class="text-white bg-red-700 hover:bg-red-600 transition-all text-sm flex items-center h-full px-3 lg:mr-10 mr-0" href="{{route('login')}}">
                <span class="material-symbols-outlined mr-1">
                    list
                </span>
                Autentificare
            </a>
        </div>
    </div>
    <div id="mainNav" role="navigation" class="container m-auto flex justify-between mt-3 py-2" >
        <div class="flex justify-around items-center w-auto ">
            <a href="{{route('acasa')}}">
                <x-application-logo class="max-w-[150px] min-w-[100px] md:max-w-[250px] mb-0 md:mb-4 w-full mt-0 lg:mt-[-20px]"/>
            </a>

            <div class="hidden lg:block ">
                <a href="tel:{{str_replace('+','00',str_replace(' ','',$nav_data[3]['value']))}}" class="flex">
                    <span class="material-symbols-outlined text-5xl text-red-700 border-r px-3">
                        phone_callback
                    </span>
                    <span class="ml-3 flex flex-col justify-center">
                        <div class="text-sm">Call Us Today!</div>
                        <div class="hover:border-b px-1 transition-all font-semibold" >{{$nav_data[3]['value']}}</div>
                    </span>
                </a>
            </div>
        </div>

        <div class="flex md:flex-col items-center justify-center z-10">
            <div class="block md:hidden px-2" @click="navOpen = !navOpen">
                <span class="material-symbols-outlined text-3xl">
                    menu
                </span>
            </div>
           <ul :class="navOpen ? 'hidden':''" class="md:flex justify-end items-center bg-white absolute  top-14 right-0 w-screen md:w-auto md:static">
                <li class="p-4 w-full md:px-4 md:w-auto">
                    <a class="hover:border-b hover:text-red-600 px-1 transition-all font-bold" href="{{route('acasa')}}">HOME</a>
                </li>
                <li class="p-4 w-full md:px-4 md:w-auto" @mouseover=dropdown=true @mouseover.away=dropdown=false @click="dropdown=!dropdown">
                    <a class="hover:text-red-600  px-1 transition-all font-bold flex items-center cursor-pointer" >
                        MACHINERY
                        <span class="material-symbols-outlined ml-2 h-full " x-text="!dropdown?'expand_more':'expand_less'"></span>
                    </a>
                    <div class="md:absolute mt-4" x-show="dropdown">
                        <ul class="z-20 bg-white pb-2">
                            <li class="px-2">
                                <a href="{{route('forselling')}}" class="hover:text-red-600 pl-4 hover:border-b pr-5 py-3 block">Buy Machinery</a>
                            </li>
                            <li class="px-2">
                                <a href="" class="hover:text-red-600 pl-4 hover:border-b pr-5 py-3 block">Rent Machinery</a>
                            </li>
                        </ul>
                    </div>

                </li>
                <li class="p-4 w-full md:px-4 md:w-auto">
                    <a class="hover:border-b hover:text-red-600 px-1 transition-all font-bold" href="{{route('despre-noi')}}">ABOUT</a>
                </li>
                <li class="p-4 w-full md:px-4 md:w-auto">
                    <a class="hover:border-b hover:text-red-600 px-1 transition-all font-bold" href="{{route('contact')}}">CONTACT</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
