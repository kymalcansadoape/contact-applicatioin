<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-6">
                <div>
                    <div class="flex justify-between">
                        <h1 class="font-semibold text-3xl">Contact</h1>
                        <div class="flex gap-2">
                            <a href="/add-contact">Add Contact</a>
                            <p>|</p>
                            <a href="">Contacts</a>
                            <p>|</p>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    </div>

                </div>


                <livewire:contacts/>

            </div>
        </div>
</x-app-layout>
