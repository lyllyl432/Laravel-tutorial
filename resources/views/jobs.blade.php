<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
 @foreach ($jobs as $job)
 <ul>
    <li><a href="/jobs/{{$job['id']}}">{{$job['title']}} : {{$job['salary']}}</a></li>
 </ul>
    @endforeach
</x-layout>