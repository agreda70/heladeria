<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Helados') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table table-hover">
                        <tr>
                            <th>Nombre</th>
                            <th>Disponible</th>
                            <th>Opciones</th>
                        </tr>
                        <tr>
                            <td>Helado 1</td>
                            <td>40</td>
                            <td><button>Editar</button></td>
                        </tr>
                        <tr>
                            <td>Helado 2</td>
                            <td>40</td>
                            <td><button>Editar</button></td>
                        </tr>
                        <tr>
                            <td>Helado 3</td>
                            <td>40</td>
                            <td><button>Editar</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
