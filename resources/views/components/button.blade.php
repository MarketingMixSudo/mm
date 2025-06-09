{{-- finished --}}

@props(['class'=>''])

<button {{$attributes}}
    class=" {{$class}} px-8 py-2  border border-primary-400  rounded-lg  font-medium uppercase   cursor-pointer duration-300 hover:text-primary-400 ">
    {{$slot}}
</button>