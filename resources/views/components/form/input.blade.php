@props(["type" => "text", 'name'])
<div>
    <x-form.label name="{{$name}}"/>
    <input id="images" name="{{$name}}" type="{{$type}}" value="{{old($name)}}" {{$attributes(['class' => 'rounded  border border-gray-300 font-serif'])}} require accept="image/png, image/jpeg">
    <x-form.error name="{{$name}}"/>
</div>