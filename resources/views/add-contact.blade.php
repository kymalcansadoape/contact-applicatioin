<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <form class="text-end p-8" method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <form method="POST" action="/store" class="max-w-sm mx-auto absolute w-[50%] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        @csrf
        <p class="text-xl font-semibold mb-2"> Add Contact</p>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
            <input type="text" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="" required />
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 ">Company </label>
            <input type="text" name="company"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="" required />
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 ">Phone</label>
            <input type="text" name="phone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="" required />
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
            <input type="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="" required />
        </div>


        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
    </form>

</body>

</html>
