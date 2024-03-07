@include('header')
<section class="bg-body-secondary border">
    @if (isset($success))
        <div  class="w-100 alert alert-success">
            {{  $success }}
        </div>
    @endif
    <div class="container">
        <div class="d-flex justify-content-evenly align-items-center w-100 mt-5">
            <h2>La liste de nos produits</h2>
            <form action="{{ url('/') }}" method="GET" class="w-50 d-flex align-items-center justify-content-between">
                @csrf
                <input type="text" name="title" placeholder="Entrez le titre..." class="form-control w-75" value="{{ $title ?? null }}" />

                <button type="submit" class="btn btn-success mx-2">Rechercher</button>
            </form>                
        </div>
        <div class="products d-flex justify-content-between flex-wrap mt-5">
            @foreach ($produits as $produit)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{ asset('assets/v1.webp') }}" alt="voiture" class="card-img-top object-fit-cover" height="150px"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{ $produit->nom }}</h5>
                        <p class="card-text">{{ $produit->description }}</p>
                        <div class="d-flex justify-content-around mb-3">
                            <a href="#" class="btn btn-success" style="width: 110px;">Ajouter</a>
                            <a href="#" class="btn btn-success" style="width: 110px;">Voir</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('footer')