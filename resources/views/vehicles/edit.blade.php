
        <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="container">
            <h1>Edit Vehicle</h1>
            <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="make">Make</label>
                <input type="text" class="form-control" name="make" id="make" value="{{ $vehicle->make }}" required>
                <label for="model">Model</label>
                <input type="text" class="form-control" name="model" id="model" value="{{ $vehicle->model }}" required>
                <label for="cv">CV</label>
                <input type="text" class="form-control" name="cv" id="cv" value="{{ $vehicle->cv }}" required>
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $vehicle->price }}" required>
                <label for="photo">Photo</label>
                <input type="file" class="form-control-file" name="photo" id="photo">
                <img src="{{ Storage::url($vehicle->photo) }}" alt="photo" width="100" height="100">
                <a href="{{ route('vehicles.index') }}">Back</a>

                <button type="submit">Update</button>
            </form>
        </div>
            
        </form>
    </div>

