<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>


    <div class="flex justify-center items-center w-full min-h-screen ">
        <div class="max-w-sm  p-6 bg-white border w-full border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Item Name : {{$product->name}}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Item Description : {{$product->stock}}</p><p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Item Description : {{$product->price}}</p><p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Item Description : {{$product->description}}</p>


            <a href="{{ route('product.index') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Back
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>

</body>
</html>
