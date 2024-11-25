<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create') }} {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

                            <div class="mb-2">
                                <label for="idName" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                                <input type="text" id="idName" name="name" value="{{ old('name') }}" 
                                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" required>
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        
                            <div class="mb-2">
                                <label for="idLastname" class="block text-gray-700 text-sm font-bold mb-2">Apellido</label>
                                <input type="text" id="idLastname" name="lastname" value="{{ old('lastname') }}" 
                                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                @error('lastname')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        
                            <div class="mb-2">
                                <label for="idEmail" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                <input type="email" id="idEmail" name="email" value="{{ old('email') }}" 
                                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" required>
                                @error('email')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        
                            <div class="mb-2">
                                <label for="idPhone" class="block text-gray-700 text-sm font-bold mb-2">Teléfono</label>
                                <input type="text" id="idPhone" name="phone" value="{{ old('phone') }}" 
                                         class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                @error('phone')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-2">
                                <label for="idPassword" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                                <input type="password" id="idPassword" name="password" 
                                         class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" required>
                                @error('password')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label for="idState" class="block text-gray-700 text-sm font-bold mb-2">Estado</label>
                                <select id="idState" name="state" 
                                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" required>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                                </select>
                                @error('state')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <x-primary-button>
                                    {{ __('Save') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
