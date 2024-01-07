<h1>CLIENTES</h1>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $cliente)
        <tr>
            <td>{{ $cliente['name'] }}</td>
            <td>{{ $cliente['email'] }}</td>
            <td>{{ $cliente['phone'] }}</td>
            <td>{{ $cliente['address'] }}</td>
            <td>
                <a href="{{ route('cliente.delete', $cliente['id']) }}">Borrar</a> |
                <a href="{{ route('cliente.view', $cliente['id']) }}">Ver</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>