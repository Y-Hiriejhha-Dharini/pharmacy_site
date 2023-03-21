@props(['name'])
<label for="{{$name}}" {{$attributes->merge(['class'=>"uppercase text-sm font-semibold"])}}>{{ucwords($name)}}</label>
