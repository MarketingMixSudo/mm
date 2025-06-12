@props(['large'=>false, 'mobileMenu'=>false ,'class'=>''])

<ul class="{{$class}} flex justify-start items-center gap-3">
    <li>
        <a href="https://www.facebook.com/marketingmixnowytarg" target="_blank" rel="noreferrer nofollow" aria-label="facebook"
            class="{{$large ? "p-3" : "p-1.5"}} flex items-center justify-center border rounded-full {{$mobileMenu ? 'hover:scale-110 duration-300' : 'hover:border-primary-400 duration-300'}}  group">
            <x-lucide-facebook class="{{$large ? 'size-5' : 'size-3.5'}} {{$mobileMenu ? '' : ' group-hover:text-primary-400 duration-300'}} " />
        </a>
    </li>
    <li>
        <a href="https://www.instagram.com/marketingmix_pl/" target="_blank" rel="noreferrer nofollow" aria-label="instagram"
            class="{{$large ? "p-3" : "p-1.5"}} flex items-center justify-center border rounded-full {{$mobileMenu ? 'hover:scale-110 duration-300' : 'hover:border-primary-400 duration-300'}} group">
            <x-lucide-instagram class="{{$large ? 'size-5' : 'size-3.5'}} {{$mobileMenu ? '' : ' group-hover:text-primary-400 duration-300'}} " />
        </a>
    </li>
    <li>
        <a href="https://www.linkedin.com/company/marketingmixnowytarg/" target="_blank" rel="noreferrer nofollow" aria-label="instagram"
            class="{{$large ? "p-3" : "p-1.5"}} flex items-center justify-center border rounded-full {{$mobileMenu ? 'hover:scale-110 duration-300' : 'hover:border-primary-400 duration-300'}} group">
            <x-lucide-linkedin class="{{$large ? 'size-5' : 'size-3.5'}}  {{$mobileMenu ? '' : ' group-hover:text-primary-400 duration-300'}} " />
        </a>
    </li>


</ul>