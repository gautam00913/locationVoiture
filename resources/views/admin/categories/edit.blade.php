<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifiaction de la catégorie ') }} {{ $category->name }}
        </h2>
    </x-slot>
    <div class="flex justify-center">
        <div class="py-12 w-1/2 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                      <form action=" {{ route('admin_categories.update', $category) }} " method="POST" class="p-2" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="my-2">
                            <label class="block mb-5">Catégorie de voiture </label>
                            <input type="text" name="name" class="w-full border rounded-lg  @error('name') border-red-400 @else border-blue-200 @enderror" value=" {{ old('name') ?? $category->name }}" >
                            @error('name')
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
                            <button type="submit" class="bg-red-600 text-white rounded-lg p-2 w-full">Modifier</button>
                        </div>
                    </form>
                 </div>
            </div>
        </div>    
    </div>
</x-app-layout>
