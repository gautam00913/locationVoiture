<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Les Catégories de voitures disponibles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="my-6">
            <a href=" {{  route('admin_categories.create') }} " class="bg-red-600 text-white p-3 rounded"> Ajouter une catégorie</a>
          </div>
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          #
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                         Catégorie
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                         Actions
                        </th>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach($categories as $category)
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <strong>{{ $category->id }}</strong>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $category->name }}</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap flex">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 mr-2">
                             <a href=" {{ route('admin_categories.edit', $category) }} ">Modifier</a>
                            </span> |
                             <form action="{{ route('admin_categories.destroy',$category) }}" method="post" onsubmit="return confirm('Supprimer cet élément ?'); ">
                                @csrf
                                @method('DELETE')
                                    <input type="submit" value="Supprimer" class="ml-3 px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-red-800">
                             </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
</x-app-layout>
