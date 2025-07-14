<!DOCTYPE html>
<html>
<head>
    <title>Car {{ $car->id }}</title>
</head>
<body>
    <h1>Car Details #{{ $car->id }}</h1>
    <ul>
        <li>Make: {{ $car->make }}</li>
        <li>Model: {{ $car->model }}</li>
        <li>Produced on: {{ $car->produced_on->format('Y-m-d') }}</li>
    </ul>

    <a href="{{ route('cars.edit', $car->id) }}">Edit</a> |
    <a href="{{ route('cars.index') }}">Back to list</a>

    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="margin-top: 10px;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</body>
</html>
