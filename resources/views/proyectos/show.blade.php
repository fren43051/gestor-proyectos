@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto">
        <!-- Encabezado -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl shadow-blue-100/50 border border-blue-200/30 mb-8">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-poppins font-bold bg-gradient-to-r from-indigo-700 to-purple-700 bg-clip-text text-transparent">
                        Detalle del Proyecto
                    </h1>
                    <p class="text-gray-600 font-medium">Información completa del proyecto seleccionado</p>
                </div>
            </div>
        </div>

        <!-- Información del Proyecto -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl shadow-blue-100/50 border border-blue-200/30 overflow-hidden">
            <!-- Encabezado de la información -->
            <div class="px-8 py-6 bg-gradient-to-r from-indigo-600/10 to-purple-600/10 border-b border-indigo-200/30">
                <h2 class="text-xl font-poppins font-semibold text-gray-800 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    {{ $proyecto->NombreProyecto }}
                </h2>
                <p class="text-gray-600 mt-1">Información detallada del proyecto</p>
            </div>

            <div class="p-8">
                <!-- Información General -->
                <div class="mb-8">
                    <h3 class="text-lg font-poppins font-semibold text-gray-800 mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Información General
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-4 rounded-xl border border-blue-200">
                            <dt class="text-sm font-semibold text-blue-700 mb-1 flex items-center">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                                ID del Proyecto
                            </dt>
                            <dd class="text-lg font-bold text-gray-900">{{ $proyecto->id }}</dd>
                        </div>
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-4 rounded-xl border border-green-200">
                            <dt class="text-sm font-semibold text-green-700 mb-1 flex items-center">
                                <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                                Fuente de Fondos
                            </dt>
                            <dd class="text-lg font-bold text-gray-900">{{ $proyecto->fuenteFondos }}</dd>
                        </div>
                    </div>
                </div>

                <!-- Información Financiera -->
                <div class="mb-8">
                    <h3 class="text-lg font-poppins font-semibold text-gray-800 mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                        Información Financiera
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 p-6 rounded-xl border border-blue-200 text-center">
                            <dt class="text-sm font-semibold text-blue-700 mb-2 flex items-center justify-center">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                                Monto Planificado
                            </dt>
                            <dd class="text-2xl font-bold text-blue-800">${{ number_format($proyecto->MontoPlanificado, 2) }}</dd>
                        </div>
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-6 rounded-xl border border-purple-200 text-center">
                            <dt class="text-sm font-semibold text-purple-700 mb-2 flex items-center justify-center">
                                <div class="w-3 h-3 bg-purple-500 rounded-full mr-2"></div>
                                Monto Patrocinado
                            </dt>
                            <dd class="text-2xl font-bold text-purple-800">${{ number_format($proyecto->MontoPatrocinado, 2) }}</dd>
                        </div>
                        <div class="bg-gradient-to-r from-orange-50 to-amber-50 p-6 rounded-xl border border-orange-200 text-center">
                            <dt class="text-sm font-semibold text-orange-700 mb-2 flex items-center justify-center">
                                <div class="w-3 h-3 bg-orange-500 rounded-full mr-2"></div>
                                Fondos Propios
                            </dt>
                            <dd class="text-2xl font-bold text-orange-800">${{ number_format($proyecto->MontoFondosPropios, 2) }}</dd>
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="mt-6 bg-gradient-to-r from-gray-50 to-slate-50 p-6 rounded-xl border-2 border-gray-300">
                        <dt class="text-sm font-semibold text-gray-700 mb-2 flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                            Total del Proyecto
                        </dt>
                        <dd class="text-3xl font-bold text-gray-900 text-center">
                            ${{ number_format($proyecto->MontoPlanificado + $proyecto->MontoPatrocinado + $proyecto->MontoFondosPropios, 2) }}
                        </dd>
                    </div>
                </div>

                <!-- Información de Sistema -->
                <div class="mb-8">
                    <h3 class="text-lg font-poppins font-semibold text-gray-800 mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Información de Sistema
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gradient-to-r from-gray-50 to-slate-50 p-4 rounded-xl border border-gray-200">
                            <dt class="text-sm font-semibold text-gray-700 mb-1 flex items-center">
                                <div class="w-2 h-2 bg-gray-500 rounded-full mr-2"></div>
                                Fecha de Creación
                            </dt>
                            <dd class="text-lg font-medium text-gray-900">
                                {{ optional($proyecto->created_at)->format('d/m/Y H:i') ?? 'No disponible' }}
                            </dd>
                        </div>
                        <div class="bg-gradient-to-r from-gray-50 to-slate-50 p-4 rounded-xl border border-gray-200">
                            <dt class="text-sm font-semibold text-gray-700 mb-1 flex items-center">
                                <div class="w-2 h-2 bg-gray-500 rounded-full mr-2"></div>
                                Última Actualización
                            </dt>
                            <dd class="text-lg font-medium text-gray-900">
                                {{ optional($proyecto->updated_at)->format('d/m/Y H:i') ?? 'No disponible' }}
                            </dd>
                        </div>
                    </div>
                </div>

                <!-- Botones de Acción -->
                <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                    <a href="{{ route('proyectos.index') }}"
                       class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-gray-100 to-gray-200 hover:from-gray-200 hover:to-gray-300 text-gray-700 font-semibold rounded-xl border-2 border-gray-300 hover:border-gray-400 transition-all duration-200 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span>Volver al Listado</span>
                    </a>

                    <a href="{{ route('proyectos.edit', $proyecto) }}"
                       class="group flex items-center space-x-2 px-8 py-3 bg-gradient-to-r from-indigo-500 to-purple-500 hover:from-indigo-600 hover:to-purple-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-200 hover:shadow-xl hover:shadow-indigo-300 transition-all duration-200 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        <span>Editar Proyecto</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
