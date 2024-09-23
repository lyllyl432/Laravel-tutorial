<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    @foreach ($jobs as $job)
    <ul>
        <h1>{{$job->employer->name}}</h1>
        <li><a href="/jobs/{{$job['id']}}">{{$job['title']}} : {{$job['salary']}}</a></li>
    </ul>
    @endforeach

    <div>
        {{$jobs->links()}}
    </div>
</x-layout>