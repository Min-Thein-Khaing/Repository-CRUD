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
    <div class="max-w-md mx-auto container  mt-5 text-start border shadow p-5">
        <form action={{ route('product.update',$product->id) }} method="POST">
            @csrf()
            @method("PUT")
            <div class="grid   gap-2 bg-white ">
                <div class="mb-2">
                    <label for="name" class="flex jusitity-start">Name</label>
                    <input type="text" class="rounded-lg w-full" value="{{ old("name",$product->name) }}" name="name" id="name">
                    @error('name')
                    <p class="text-red-500">{{ $message }}</p>

                    @enderror

                </div>
                <div class="mb-2">
                    <label for="price" class="flex jusitity-start">Price</label>
                    <input type="number" class="rounded-lg w-full" value="{{ old("price",$product->price) }}" name="price" id="price">
                    @error('price')
                    <p class="text-red-500">{{ $message }}</p>

                    @enderror
                </div>
                <div class="  mb-2   ">
                    <label for="stock" class="flex jusitity-start">Stock</label>
                    <input type="number" class="rounded-lg w-full" value="{{ old('stock',$product->stock) }}" name="stock" id="stock">
                    @error('stock')
                    <p class="text-red-500">{{ $message }}</p>

                    @enderror
                </div>
                <div class="  mb-2  ">
                    <label for="description" class="flex jusitity-start">Description</label>
                    <textarea type="text" class="rounded-lg w-full" name="description" id="description">{{old('description',$product->description)}}</textarea>
                    @error('description')
                    <p class="text-red-500">{{ $message }}</p>

                    @enderror
                </div>


                <button type="submit"
                    class="text-white mt-1 w-full bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>

        </form>
    </div>


</body>
