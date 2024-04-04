<div class="container">

    <h1 class="mt-5 mb-3">Show Product Details</h1>

    <div class="form-group">
        <label for="name">Name</label>
        <input
            disabled
            type="text"
            id="first_name"
            name="first_name"
            autocomplete="first_name"
            placeholder="Type your name"
            value={{$product->name}}
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
        <label for="name">Details</label>
        <input
            disabled
            type="text"
            id="first_name"
            name="first_name"
            autocomplete="first_name"
            placeholder="Type your name"
            value={{$product->details}}
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
        <label for="name">Category</label>
        <input
            disabled
            type="text"
            id="first_name"
            name="first_name"
            autocomplete="first_name"
            placeholder="Type your name"
            value={{$product->category->name}}
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
        <label for="name">Project</label>
        <input
            disabled
            type="text"
            id="first_name"
            name="first_name"
            autocomplete="first_name"
            placeholder="Type your name"
            value={{$product->project->name}}
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














</div>
