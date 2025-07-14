<!DOCTYPE html>
<html>
<head>
    <title>Create New Car</title>
</head>
<body>
    <h1>Create a New Car</h1>

    {{-- Mostra errori di validazione --}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form per creare nuova auto --}}
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <label>Make:</label><br>
        <input type="text" name="make" value="{{ old('make') }}"><br><br>

        <label>Model:</label><br>
        <input type="text" name="model" value="{{ old('model') }}"><br><br>

        <label>Produced on:</label><br>
        <input type="date" name="produced_on" value="{{ old('produced_on') }}"><br><br>

        <button type="submit">Save Car</button>
    </form>

    <br>
    <a href="{{ route('cars.index') }}">Back to list</a>
</body>
</html>
