<footer class="bg-slate-900 py-20">
<div class="container-md">
    <div class="row">
        <div class="m-auto col-md-4 flex justify-center">
            <x-application-logo class="max-w-[250px] mb-4"/>
        </div>
        <div class="flex text-white text-xl gap-3 justify-center items-center">
            <a href="#">
                <i class="w-9 h-9 fa-brands fa-facebook-f rounded-full bg-slate-700 text-slate-300 hover:text-red-700 px-3 py-2 text-sm flex justify-center items-center"></i>
            </a>
            <a href="#">
                <i class="w-9 h-9 fa-brands fa-instagram rounded-full bg-slate-700 text-slate-300 hover:text-red-700 px-3 py-2 text-sm flex justify-center items-center"></i>
            </a>
            <a href="#">
                <i class="w-9 h-9 fa-solid fa-location-dot rounded-full bg-slate-700 text-slate-300 hover:text-red-700 px-3 py-2 text-sm flex justify-center items-center"></i>
            </a>
        </div>
    </div>
    <div class="row text-gray-400 mt-10">
        <div class="col-md-4 mt-10">
            <p class="mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tempore amet officia, reprehenderit delectus quidem voluptatem explicabo exercitationem modi nostrum.
            </p>
            <div class="mb-3">
                <a href="" class="hover:text-red-700">
                    <i class="fa-solid fa-location-dot mr-2 w-4 text-center"></i>
                    <span>{{$footer_data[2]['value']}}</span>
                </a>
            </div>
            <div class="mb-3">
                <a href="" class="hover:text-red-700">
                    <i class="fa-solid fa-envelope mr-2 w-4 text-center"></i>
                    <span>{{$footer_data[0]['value']}}</span>
                </a>
            </div>
            <div class="mb-3">
                <a href="" class="hover:text-red-700">
                    <i class="fa-solid fa-phone mr-2 w-4 text-center"></i>
                    <span>{{$footer_data[3]['value']}}</span>
                </a>
            </div>
        </div>
        <div class="col-md-4 flex md:justify-center mt-10">
            <div class="">
                <div class="mb-4 text-lg font-bold">
                    Useful links
                </div>
                <ul class="footerNav">
                    <li>
                        <a href="" class="py-2 px-1 pr-2 hover:text-red-700">
                            <i class="fa-solid fa-angle-right mr-2"></i>Test1
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="col-md-4 mt-10">
            <div class="text-xl font-bold">
                Subscribe Newsletter
            </div>
            <p class="mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tempore amet officia
            </p>
            <form action="">
                <input name="subscribe" placeholder="Subscribe" class="w-full py-3 px-4">
                <input type="submit" value="Submit" class="mt-3 block py-3 px-5 border-[1px] border-red-700 bg-red-700 hover:bg-red-600 text-white font-semibold">
            </form>
        </div>
    </div>
    <div class="row text-gray-400 mt-20">
        <div class="text-center w-full">
            Copyrights (c) 2022 IBB IT SYSTEM. All rights reserved. Privacy Policy
        </div>
    </div>
</div>
</footer>
