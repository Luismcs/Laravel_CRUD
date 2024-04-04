<div class="container">

    <h1 class="mt-5 mb-3">Show Project Details</h1>

    <div class="form-group">
        <label for="name">Name</label>
        <input
            disabled
            type="text"
            id="first_name"
            name="first_name"
            autocomplete="first_name"
            placeholder="Type your name"
            value={{$project->name}}
                class="form-control @error('name') is-invalid @enderror"
        required
        aria-describedby="nameHelp">
        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
        @error('name')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="category_id">Products</label>
        <select multiple disabled name="bicycle_id[]" id="bicycle_id" class="form-control">
            @foreach ($project->products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </div>



</div>
