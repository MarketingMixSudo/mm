@props(['heading','subheading'=>false])

<div>
    <h2 class="font-heading text-5xl sm:text-7xl font-bold uppercase">{{$heading}}</h2>
    @if($subheading)
    <h3 class="pl-1 mt-4">{{$subheading}}</h3>
    @endif
    <hr class="border-primary-400 pb-12">
</div>