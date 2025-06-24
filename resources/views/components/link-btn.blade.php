@props(['href','label','class'=>''])

<a href="{{$href}}"
    class="inline-block bg-primary-400 hover:bg-primary-600 duration-300 rounded-lg px-8 py-3 font-medium uppercase text-font-light {{$class}}">
    {{$label}}
</a>