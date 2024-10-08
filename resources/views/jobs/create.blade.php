<x-layout>
    <x-slot:heading>
        Create Job Page
    </x-slot:heading>


    <form method="post" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for='title'>Title</x-form-label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <x-form-input type="text" name="title" id="title" autocomplete="title" placeholder="Programmer" required></x-form-input>
                            </div>
                            <x-form-error name='title'></x-form-error>
                           
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for='salary'>Salary</x-form-label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <x-form-input  type="text" name="salary" id="salary" autocomplete="salary" placeholder="50000" required></x-form-input>
                            </div>
                              <x-form-error name='salary'></x-form-error>
                        </div>
                    </x-form-field>
                </div>
            </div>



        </div>
        {{-- <div class="bg-red-400">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div> --}}

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-cancel-button>Cancel</x-cancel-button>
            <x-submit-button>Submit</x-submit-button>
        </div>
    </form>

</x-layout>