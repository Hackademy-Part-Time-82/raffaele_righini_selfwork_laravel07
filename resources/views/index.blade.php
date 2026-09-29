<x-app :title="$title">
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 clo-md-6 text-center">
                <h1>Libreria RR</h1>
            </div>
        </div>
    </div>

    @if (session('success'))
    
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    
    @endif
    
    <ul class="list-group">
        @foreach ($books as $book)
        
        <li class="list-group-item d-flex justify-content-between align-items-center">
            
            <span>Il libro {{ $book['name'] }}, scritto da {{ $book['author'] }} nel {{ $book['year'] }}, ha {{$book['pages']}} pagine</span>
            
            <form action="{{ route('books.destroy', $book) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash"></i>
                </button>
            </form>
            
        </li>
        @endforeach
    </ul>
    
</x-app>