@props(['preheading'=>'','heading'])
<div class=" flex flex-col gap-2 text-center">
    @if($preheading)
    <span class="text-primary-400 font-medium text-base xs:text-xl">{{$preheading}}</span>
    @endif
    <h2 class="text-4xl xs:text-5xl font-bold font-heading">{!!$heading!!}
    </h2>
</div>