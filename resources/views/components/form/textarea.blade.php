@props(["type" => "text", 'name'])
<div>
    <x-form.label name="{{$name}}"/>
    <textarea name="note" id="note" value="{{old('note')}}" require class="w-full rounded mt-2 mb-5 border border-gray-300 m-2 font-serif" cols="5" rows="5" ></textarea>
    <x-form.error name="{{$name}}"/>
</div>