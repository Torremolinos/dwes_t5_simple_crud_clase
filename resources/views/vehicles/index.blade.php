<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vehicles') }}
        </h2>
    <h1>Vehicles</h1>

    @section('content')

    @foreach($vehicles as $vehicle)


    <p>{{ $vehicle->make }}</p>
    <p>{{ $vehicle->model }}</p>
    <p>{{ $vehicle->cv }}</p>
    <p>{{ $vehicle->price }}</p>
    <img src="{{ Storage::url($vehicle->photo) }}" alt="photo" width="100" height="100">
    <a href="{{ route('vehicles.edit', $vehicle->id) }}">Edit</a>
    <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>

    </form>
    <hr>

    @endforeach

    <a href="{{ route('vehicles.create') }}">Create</a>
    @endsection


    <h1>Vehicles</h1>

    @foreach($vehicles as $vehicle)


    <p>{{ $vehicle->make }}</p>
    <p>{{ $vehicle->model }}</p>
    <p>{{ $vehicle->cv }}</p>
    <p>{{ $vehicle->price }}</p>
    <img src="{{ Storage::url($vehicle->photo) }}" alt="photo" width="100" height="100">
    <a href="{{ route('vehicles.edit', $vehicle->id) }}">Edit</a>
    <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>

    </form>
    <hr>

    @endforeach

    <a href="{{ route('vehicles.create') }}">Create</a>



</x-app-layout>