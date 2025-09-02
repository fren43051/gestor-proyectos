@extends('layouts.app')

@section('content')
    <div class="space-y-8">
        <!-- Encabezado Principal -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl shadow-blue-100/50 border border-blue-200/30">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-poppins font-bold bg-gradient-to-r from-blue-800 to-purple-800 bg-clip-text text-transparent mb-2">
                        Panel de Proyectos
                    </h1>
                    <p class="text-gray-600 font-medium">Gestiona y supervisa todos los proyectos del ministerio</p>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('proyectos.pdf') }}" target="_blank"
                       class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white rounded-xl shadow-lg shadow-orange-200 hover:shadow-xl hover:shadow-orange-300 transition-all duration-300 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                        </svg>
                        <span class="font-semibold">Descargar PDF</span>
                    </a>
                    <a href="{{ route('proyectos.create') }}"
                       class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-xl shadow-lg shadow-blue-200 hover:shadow-xl hover:shadow-blue-300 transition-all duration-300 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        <span class="font-semibold">Nuevo Proyecto</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Tabla de Proyectos -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl shadow-blue-100/50 border border-blue-200/30 overflow-hidden">
            <div class="p-6 bg-gradient-to-r from-blue-600/10 to-purple-600/10 border-b border-blue-200/30">
                <h2 class="text-xl font-poppins font-semibold text-gray-800">Lista de Proyectos</h2>
                <p class="text-gray-600 mt-1">Todos los proyectos registrados en el sistema</p>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gradient-to-r from-gray-50 to-blue-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">ID</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">Nombre del Proyecto</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">Fuente de Fondos</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">Monto Planificado</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">Monto Patrocinado</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">Fondos Propios</th>
                            <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($proyectos as $proyecto)
                            <tr class="hover:bg-gradient-to-r hover:from-blue-50/50 hover:to-purple-50/50 transition-all duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center justify-center w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full text-white text-sm font-bold">
                                        {{ $proyecto->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-semibold text-gray-900">{{ $proyecto->NombreProyecto }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 border border-green-200">
                                        {{ $proyecto->fuenteFondos }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="font-bold text-blue-700">${{ number_format($proyecto->MontoPlanificado, 2) }}</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="font-bold text-purple-700">${{ number_format($proyecto->MontoPatrocinado, 2) }}</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="font-bold text-orange-700">${{ number_format($proyecto->MontoFondosPropios, 2) }}</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center space-x-2">
                                        <a href="{{ route('proyectos.show', $proyecto) }}"
                                           class="group flex items-center px-3 py-2 text-xs font-medium text-blue-700 bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 rounded-lg border border-blue-200 hover:border-blue-300 transition-all duration-200 hover:shadow-md">
                                            <svg class="w-4 h-4 mr-1 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                            Ver
                                        </a>
                                        <a href="{{ route('proyectos.edit', $proyecto) }}"
                                           class="group flex items-center px-3 py-2 text-xs font-medium text-green-700 bg-gradient-to-r from-green-50 to-green-100 hover:from-green-100 hover:to-green-200 rounded-lg border border-green-200 hover:border-green-300 transition-all duration-200 hover:shadow-md">
                                            <svg class="w-4 h-4 mr-1 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                            Editar
                                        </a>
                                        <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST"
                                              onsubmit="return confirm('¿Estás seguro de que deseas eliminar este proyecto?')" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="group flex items-center px-3 py-2 text-xs font-medium text-red-700 bg-gradient-to-r from-red-50 to-red-100 hover:from-red-100 hover:to-red-200 rounded-lg border border-red-200 hover:border-red-300 transition-all duration-200 hover:shadow-md">
                                                <svg class="w-4 h-4 mr-1 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center space-y-4">
                                        <div class="w-16 h-16 bg-gradient-to-r from-gray-200 to-gray-300 rounded-full flex items-center justify-center">
                                            <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 font-semibold mb-1">No hay proyectos registrados</p>
                                            <p class="text-gray-500 text-sm">Comienza creando tu primer proyecto</p>
                                        </div>
                                        <a href="{{ route('proyectos.create') }}"
                                           class="inline-flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg font-medium hover:from-blue-700 hover:to-purple-700 transition-colors duration-200">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            <span>Crear Proyecto</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Paginación -->
        @if($proyectos->hasPages())
            <div class="flex justify-center">
                <div class="bg-white/90 backdrop-blur-sm rounded-xl shadow-lg border border-blue-200/30 p-4">
                    {{ $proyectos->links() }}
                </div>
            </div>
        @endif
    </div>
@endsection
