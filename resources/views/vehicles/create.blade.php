<h1>Add new vehicle</h1>
<form action="{{ route('vehicles.store') }}" method="post" enctype="multipart/form-data">
    @csrf 
    
        <label for="make">Make</label>
        <input type="text" class="form-control" name="make" id="make" required>
        <label for="make">Model</label>
        <input type="text" class="form-control" name="model" id="model" required>
        <label for="make">CV</label>
        <input type="text" class="form-control" name="cv" id="cv" required>
        <label for="make">Price</label>
        <input type="text" class="form-control" name="price" id="price" required>
        <label for="make">Photo</label>
        <input type="file" class="form-control-file" name="photo" id="photo">
        <button type="submit" class="btn btn-primary">Add</button>
</form>


