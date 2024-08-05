<x-app-layout>
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Crear Ciclo Lectivo
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('ciclolectivos.store') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="anio" class="sr-only">Año</label>
                        <input id="anio" name="anio" type="number" autocomplete="anio" required
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Año">
                    </div>
                </div>
                @error('anio')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Crear Ciclo Lectivo
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
