@props(['preheading'=>'','heading'])
<div class=" flex flex-col gap-2 text-center">
    @if($preheading)
    <span class="text-primary-400 font-medium text-xl">{{$preheading}}</span>
    @endif
    <h2 class="text-5xl font-bold font-heading">{{$heading}}
    </h2>
</div>