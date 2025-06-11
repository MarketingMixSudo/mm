@props(['logos'])
<div class=" py-2">

    <div id="logo-marquee--js" class="overflow-x-hidden max-w-screen-2xl mx-auto">
        <div class="flex flex-wrap justify-center items-center gap-12  ">


            @foreach ($logos as $logo)
                  <img src="{{asset('storage/'.$logo->logo)}}" alt="{{$logo->name}}" class="w-[130px] mx-2 " loading="lazy"> 
            @endforeach
            @foreach ($logos as $logo)
                  <img src="{{asset('storage/'.$logo->logo)}}" alt="{{$logo->name}}" class="w-[130px] mx-2 " loading="lazy"> 
            @endforeach
            
        
        
        
        
        
        
        
    </div>
</div>
</div>