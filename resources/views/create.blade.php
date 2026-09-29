<x-app :title="$title">
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h1>Aggiungi un Libro</h1>
            </div>
        </div>

        <form class="mt-3" action="{{ route('books.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="InputName" class="form-label">Nome del libro</label>
                <input type="text" class="form-control" id="InputName" name="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-text">il campo titolo è obbligatorio.</div>
            </div>
            
            <div class="mb-3">
                <label for="InputAuthor" class="form-label">Autore del libro</label>
                <input type="text" class="form-control" id="InputAuthor" name="author">
                @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-text">il campo autore è obbligatorio.</div>
            </div>

            <div class="mb-3">
                <label for="InputPages" class="form-label">Numero pagine del libro</label>
                <input type="text" class="form-control" id="InputPages" name="pages">
                @error('pages')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-text">il campo numero pagine è obbligatorio.</div>
            </div>
            
            <div class="mb-3">
                <label for="InputYear" class="form-label">Anno del libro</label>
                <input type="text" class="form-control" id="InputYear" name="year">
                @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-text">il campo anno è obbligatorio.</div>
            </div>

            
            <button type="submit" class="btn btn-primary">Salva</button>
            
        </form>
    </div>
    
</x-app>