<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajout de voiture') }}
        </h2>
    </x-slot>

     <div class="flex justify-center">
        <div class="py-12 w-1/2 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                      <form action=" {{ route('admin_cars.store') }} " method="POST" class="p-2" enctype="multipart/form-data">
                        @csrf
                        <div class="my-2 block">
                            <label class="block mb-5">Marque  </label>
                            <input type="text" name="mark" class="w-full border rounded-lg @error('mark') border-red-400 @else border-blue-200 @enderror">
                                @error('mark')
                                    <div class="text-red-400">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="my-2">
                            <label class="block mb-5">Prix de location  </label>
                            <input type="number" min="0" name="location_price" class="w-full border  rounded-lg @error('location_price') border-red-400 @else border-blue-200 @enderror">
                            @error('location_price')
                                    <div class="text-red-400">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="my-2">
                            <label class="block mb-5">Catégorie </label>
                            <select class="border border-blue-200 rounded-lg w-full @error('category') border border-red-400 @enderror" name="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->name }}"> {{ $category->name }} </option>
                                @endforeach
                            </select>
                            @error('category')
                                    <div class="text-red-400">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="my-2">
                            <label class="block mb-5">Joindre une image  </label>
                            <input type="file" min="0" name="image" class="ml-2  border  rounded-lg @error('image') border-red-400 @else border-blue-200 @enderror">
                            @error('image')
                                    <div class="text-red-400">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="bg-red-600 text-white rounded-lg p-2 w-full">Enrégistrer</button>
                        </div>
                    </form>
                 </div>
            </div>
        </div>    
    </div>
</x-app-layout>
