@props(['name'])
@error($name)
<p class="text-red-600 italic">{{$message}}</p> 
@enderror