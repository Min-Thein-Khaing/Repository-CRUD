<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>


    <div class="max-w-2xl mx-auto   text-end mt-10   overflow-x-auto">
        <a href="{{route('product.create')}}" class="border  max-w-2xl  bg-gray-500 inline-flex  bg text-white px-3 py-1">+</a>
        <table class="max-w-2xl text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="text-end px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="text-end px-6 py-3">
                        Stock
                    </th>
                    <th scope="col" class="text-end px-6 py-3">
                        Description
                    </th>
                    <th scope="col"  class="text-center px-6 py-3">
                        Detail
                    </th>
                    <th scope="col"  class="text-center px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $product->name }}
                    </th>
                    <td class="px-6 py-4 text-end">
                        {{ $product->price }}
                    </td>
                    <td class="px-6 py-4 text-end">
                        {{ $product->stock }}
                    </td>
                    <td class="px-6 py-4 text-end">
                        {{ $product->description }}
                    </td>
                    <td>
                        <a href="{{route('product.show', $product->id)}}" class="py-2.5 px-5 me-2  mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Detail</a>
                    </td>


                    <td class="px-6 flex py-4 text-center">
                        <a  href={{route('product.edit' , $product->id)}} class="py-2.5 px-5 me-2  mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Edit</a>
                        <form action={{route('product.destroy', $product->id)}} class="" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="focus:outline-none  text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                        </form>

                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>
    </div>




</body>

</html>
