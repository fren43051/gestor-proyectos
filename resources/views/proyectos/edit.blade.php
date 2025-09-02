@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto">
        <!-- Encabezado -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl shadow-blue-100/50 border border-blue-200/30 mb-8">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-gradient-to-r from-amber-500 to-orange-500 rounded-xl flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-poppins font-bold bg-gradient-to-r from-amber-700 to-orange-700 bg-clip-text text-transparent">
                        Editar Proyecto
                    </h1>
                    <p class="text-gray-600 font-medium">Modifica la información del proyecto seleccionado</p>
                </div>
            </div>
        </div>

        <!-- Mensajes de Error -->
        @if($errors->any())
            <div class="mb-8 bg-gradient-to-r from-red-50 to-rose-50 border border-red-200 rounded-xl p-6 shadow-lg">
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-8 h-8 bg-gradient-to-r from-red-500 to-rose-500 rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-red-800 font-semibold mb-2">Por favor, corrige los siguientes errores:</h3>
                        <ul class="list-disc list-inside text-red-700 space-y-1">
                            @foreach($errors->all() as $error)
                                <li class="text-sm">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <!-- Formulario -->
        <form action="{{ route('proyectos.update', $proyecto) }}" method="POST" class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl shadow-blue-100/50 border border-blue-200/30 overflow-hidden">
            @csrf
            @method('PUT')

            <!-- Encabezado del Formulario -->
            <div class="px-8 py-6 bg-gradient-to-r from-amber-600/10 to-orange-600/10 border-b border-amber-200/30">
                <h2 class="text-xl font-poppins font-semibold text-gray-800 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Actualizar Información del Proyecto
                </h2>
                <p class="text-gray-600 mt-1">Modifica los campos que necesites cambiar</p>
            </div>

            <div class="p-8 space-y-8">
                <!-- Información General -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="lg:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                Nombre del Proyecto
                            </span>
                        </label>
                        <input type="text" name="NombreProyecto" value="{{ old('NombreProyecto', $proyecto->NombreProyecto) }}"
                               class="w-full px-4 py-3 bg-gradient-to-r from-white to-blue-50/30 border-2 border-blue-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-200 font-medium placeholder-gray-400"
                               placeholder="Ingresa el nombre del proyecto" />
                    </div>

                    <div class="lg:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                Fuente de Fondos
                            </span>
                        </label>
                        <input type="text" name="fuenteFondos" value="{{ old('fuenteFondos', $proyecto->fuenteFondos) }}"
                               class="w-full px-4 py-3 bg-gradient-to-r from-white to-green-50/30 border-2 border-green-200 rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-100 transition-all duration-200 font-medium placeholder-gray-400"
                               placeholder="Especifica la fuente de financiamiento" />
                    </div>
                </div>

                <!-- Información Financiera -->
                <div>
                    <h3 class="text-lg font-poppins font-semibold text-gray-800 mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                        Información Financiera
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">
                                <span class="flex items-center">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                                    Monto Planificado
                                </span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-500 font-bold">$</div>
                                <input type="number" step="0.01" name="MontoPlanificado" value="{{ old('MontoPlanificado', $proyecto->MontoPlanificado) }}"
                                       class="w-full pl-8 pr-4 py-3 bg-gradient-to-r from-white to-blue-50/30 border-2 border-blue-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-200 font-medium placeholder-gray-400"
                                       placeholder="0.00" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">
                                <span class="flex items-center">
                                    <div class="w-3 h-3 bg-purple-500 rounded-full mr-2"></div>
                                    Monto Patrocinado
                                </span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-500 font-bold">$</div>
                                <input type="number" step="0.01" name="MontoPatrocinado" value="{{ old('MontoPatrocinado', $proyecto->MontoPatrocinado) }}"
                                       class="w-full pl-8 pr-4 py-3 bg-gradient-to-r from-white to-purple-50/30 border-2 border-purple-200 rounded-xl focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition-all duration-200 font-medium placeholder-gray-400"
                                       placeholder="0.00" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">
                                <span class="flex items-center">
                                    <div class="w-3 h-3 bg-orange-500 rounded-full mr-2"></div>
                                    Fondos Propios
                                </span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-500 font-bold">$</div>
                                <input type="number" step="0.01" name="MontoFondosPropios" value="{{ old('MontoFondosPropios', $proyecto->MontoFondosPropios) }}"
                                       class="w-full pl-8 pr-4 py-3 bg-gradient-to-r from-white to-orange-50/30 border-2 border-orange-200 rounded-xl focus:border-orange-500 focus:ring-4 focus:ring-orange-100 transition-all duration-200 font-medium placeholder-gray-400"
                                       placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botones -->
                <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                    <a href="{{ route('proyectos.index') }}"
                       class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-gray-100 to-gray-200 hover:from-gray-200 hover:to-gray-300 text-gray-700 font-semibold rounded-xl border-2 border-gray-300 hover:border-gray-400 transition-all duration-200 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span>Volver</span>
                    </a>

                    <button type="submit"
                            class="group flex items-center space-x-2 px-8 py-3 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold rounded-xl shadow-lg shadow-amber-200 hover:shadow-xl hover:shadow-amber-300 transition-all duration-200 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>Actualizar Proyecto</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
