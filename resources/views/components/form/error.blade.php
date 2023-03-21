@props(['name'])
@error('{{$name}}')
    <ul class="text-sm text-red-600">
        <li class="text-red-600 text-sm mx-3">{{$error->message}}</li>
    </ul>
@enderror