<h1>CLIENTES</h1>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Direccion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $cliente)
        <tr>
            <td>{{ $cliente['name'] }}</td>
            <td>{{ $cliente['email'] }}</td>
            <td>{{ $cliente['phone'] }}</td>
            <td>{{ $cliente['address'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>