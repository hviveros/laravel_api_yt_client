<h1>NUEVO CLIENTE</h1>
<form action="{{ route('cliente.update') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $data['id'] }}">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ $data['name'] }}">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{ $data['email'] }}">
    <label for="phone">Telefono</label>
    <input type="text" name="phone" id="phone" value="{{ $data['phone'] }}">
    <label for="address">Direccion</label>
    <input type="text" name="address" id="address" value="{{ $data['address'] }}">
    <button type="submit">Guardar</button>
</form>