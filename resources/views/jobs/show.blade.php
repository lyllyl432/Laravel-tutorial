<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <div class="flex gap-2">
        <h1>{{$job->title}} : {{$job->salary}}</h1>
        <x-button href="/jobs/{{$job->id}}/edit" class="btn border border-blue-400 bg-blue-200 px-4 py-2">
            Edit Job
        </x-button>
        

    </div>
</x-layout>