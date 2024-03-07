@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('produit.store') }}" method="POST">
    @csrf
    <input type="text" name="nom" value="{{ old('nom') }}" placeholder="Nom du produit">
    <textarea name="description" placeholder="Description du produit">{{ old('description') }}</textarea>
    <input type="number" name="prix" value="{{ old('prix') }}" placeholder="Prix du produit">
    <input type="number" name="quantite" value="{{ old('quantite') }}" placeholder="Quantité du produit">
    <button type="submit">Ajouter le produit</button>
</form>