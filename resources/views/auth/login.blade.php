<x-layout>
    <x-slot:heading>
       Login
    </x-slot:heading>


    <form method="post" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
               
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                 
                    <x-form-field>
                        <x-form-label for='email'>Email</x-form-label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <x-form-input  type="text" name="email" id="email" placeholder="johndoe@gmail.com"></x-form-input>
                            </div>
                              <x-form-error name='email'></x-form-error>
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for='password'>Password</x-form-label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <x-form-input  type="password" name="password" id="password" ></x-form-input>
                            </div>
                              <x-form-error name='password'></x-form-error>
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
            <x-submit-button>Register</x-submit-button>
        </div>
    </form>

</x-layout>