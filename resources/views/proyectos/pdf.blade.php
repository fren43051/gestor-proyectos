<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Informe de Proyectos</title>
    <style>
        @page { margin: 20mm 15mm; }
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; color: #0f172a; }
        .header { text-align: center; padding: 8mm 0; margin: 0; }
        .title { font-size: 20px; margin: 0; font-weight: 700; }
        .subtitle { font-size: 12px; color: #475569; margin: 4px 0 0; }
        table { width: 100%; border-collapse: collapse; }
        thead th { background: #0f172a; color: #ffffff; font-weight: 600; }
        th, td { border: 1px solid #e2e8f0; padding: 6px 8px; }
        tbody tr:nth-child(even) { background: #f8fafc; }
        .text-right { text-align: right; }
        .text-center { text-align: center; }
    </style>
</head>
<body>
<div class="header">
    <h1 class="title">Informe de Proyectos</h1>
    <p class="subtitle">Generado: {{ now()->format('Y-m-d H:i') }}</p>
</div>
@if($proyectos->isEmpty())
    <p>No hay proyectos registrados.</p>
@else
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fuente Fondos</th>
            <th class="text-right">Monto Planificado</th>
            <th class="text-right">Monto Patrocinado</th>
            <th class="text-right">Fondos Propios</th>
            <th>Creado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proyectos as $p)
            <tr>
                <td class="text-center">{{ $p->id }}</td>
                <td>{{ $p->NombreProyecto }}</td>
                <td>{{ $p->fuenteFondos }}</td>
                <td class="text-right">{{ number_format($p->MontoPlanificado, 2) }}</td>
                <td class="text-right">{{ number_format($p->MontoPatrocinado, 2) }}</td>
                <td class="text-right">{{ number_format($p->MontoFondosPropios, 2) }}</td>
                <td class="text-center">{{ optional($p->created_at)->format('Y-m-d') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif
</body>
</html>
