
@props(['active' => false, 'type'=> 'a' ])

@if($type === 'a')
<{{$type}}  class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700" }}  rounded-md  px-3 py-2 text-sm font-medium text-white" 
    aria-current="{{ $active ? "page" : "false" }}"
    {{$attributes}}
    >{{$slot}}</{{$type}}>

@else
<button  class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700" }}  rounded-md  px-3 py-2 text-sm font-medium text-white" 
    aria-current="{{ $active ? "page" : "false" }}"
    {{$attributes}}
    >{{$slot}}</button>
<@endif
