<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Catálogo de Máquinas</title>
</head>

<body>
    <h1>Detalles de la solicitud cliente</h1>

    <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
    <p><strong>Empresa:</strong> {{ $details['company'] }}</p>
    <p><strong>Teléfono:</strong> {{ $details['phone'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Mensaje:</strong> {{ $details['message'] }}</p>

    <h2>Información de la máquina</h2>
    @if ($details['maquina'])
        <p><strong>Nombre de la máquina:</strong> {{ $details['maquina']->name_es }}</p>

        @if ($details['maquina']->image)
            <p><strong>Imagen:</strong></p>
            <img src="https://ibesolutions.com.mx/images/maquinas/{{ $details['maquina']->image }}"
                alt="Imagen de la Máquina" style="max-width: 100%; height: auto;">
        @endif

        <p><strong>Modelo:</strong> {{ $details['maquina']->model }}</p>

        <p><strong>Fabricación:</strong> {{ $details['maquina']->fabricacion_es }}</p>

        <p><strong>Capacidad:</strong> {{ $details['maquina']->capacidad_es }}</p>

        <p><strong>Componentes:</strong> {{ $details['maquina']->componentes_es }}</p>

        <p><strong>Objetivo:</strong> {{ $details['maquina']->objetivo_es }}</p>
    @else
        <p>No se encontró información sobre la máquina.</p>
    @endif
</body>

</html>
