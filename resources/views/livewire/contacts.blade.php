<div>
    <div class="my-4">

        <input wire:model.live="search" type="text" id="default-input" class="bg-gray-50 w-[20%] ml-auto border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Search...">
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Company
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($contacts as $contact)
                <tr class="odd:bg-white  even:bg-gray-50  border-b ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{ $contact->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $contact->company }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $contact->phone }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $contact->email }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/edit/{{ $contact->id }}" class="font-medium text-blue-600 hover:underline">Edit</a> |

                        <div x-data="{open: false}" @click.outside="open = false">
                            <button @click="open = true" class="font-medium text-red-600 hover:underline" >Delete</button>
                            <form x-show="open" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 shadow-lg rounded-lg w-[30vw] p-5 bg-white" wire:submit.prevent="destroy({{ $contact->id }})">
                                <p class="text-xl font-semibold text-center">Are you sure you want to DELETE the contact of <span class="font-semibold"> {{ $contact->name }}</span>?</p>
                                <div class="flex justify-center gap-4 mt-3">
                                    <button @click="open = false" class="font-medium hover:underline border rounded-md border-black hover:bg-black hover:text-white px-5 py-2" type="button">No</button>
                                    <button @click="open = false" class="font-medium hover:underline border rounded-md border-black hover:bg-black hover:text-white px-5 py-2" type="submit">Yes</button>
                                </div>
                            </form>
                        </div>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-2">

        {{ $contacts->links() }}
    </div>

</div>
