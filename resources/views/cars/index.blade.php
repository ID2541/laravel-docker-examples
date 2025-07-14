<!DOCTYPE html>
<html>
<head>
    <title>Car List</title>
</head>
<body>
    <h1>List of Cars</h1>

    {{-- Messaggio di successo --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Pulsante per creare una nuova auto --}}
    <a href="{{ route('cars.create') }}">Create New Car</a>

    {{-- Lista auto --}}
    @if($cars->count())
        <ul>
            @foreach($cars as $car)
                <li>
                    <a href="{{ route('cars.show', $car->id) }}">
                        {{ $car->make }} {{ $car->model }} ({{ $car->produced_on }})
                    </a>
                    | <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No cars found.</p>
    @endif
</body>
</html>
