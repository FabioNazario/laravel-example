<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" name="name"  id="name">
    <br>
    <label for="price">Preço:</label>
    <input type="text" name="price" id="price">
    <br>
    <label for="description">Descrição</label>
    <textarea type="" name="description" id="description"></textarea>
    <br>
    <button type="submit">Enviar</button>
</form>