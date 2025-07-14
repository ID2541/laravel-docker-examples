<!DOCTYPE html>
<html>
<head>
    <title>Edit Car {{ $car->id }}</title>
</head>
<body>
    <h1>Edit Car {{ $car->id }}</h1>

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

    {{-- Form di modifica --}}
    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Make:</label><br>
        <input type="text" name="make" value="{{ old('make', $car->make) }}"><br><br>

        <label>Model:</label><br>
        <input type="text" name="model" value="{{ old('model', $car->model) }}"><br><br>

        <label>Produced on:</label><br>
        <input type="date" name="produced_on" value="{{ old('produced_on', $car->produced_on->format('Y-m-d')) }}"><br><br>

        <button type="submit">Update Car</button>
    </form>

    <br>
    <a href="{{ route('cars.index') }}">Back to list</a>
</body>
</html>
