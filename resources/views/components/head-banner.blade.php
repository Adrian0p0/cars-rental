<section>
    <div class="relative w-full">
        <div style="height: 250px" class="flex overflow-x-hidden relative w-full" >
            <div class="bg-black absolute w-full h-full">
                <div class="header-overlay-tilt flex flex-col justify-between " >
                    <div>
                        <div class="header-overlay-title text-center">
                            {{ $title }}
                        </div>
                        <div class="breadcrumb text-center">
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('acasa')}}"  class="hover:text-red-700">Home</a></li>
                              <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                          </nav>
                        </div>
                    </div>
                </div>
                <img class="w-full h-full object-cover" alt="2" src="{{asset('imgs/header-contact.jpg')}}" />
            </div>
        </div>
    </div>
</section>
