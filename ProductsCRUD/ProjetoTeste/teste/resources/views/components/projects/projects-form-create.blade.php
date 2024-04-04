<div class="container">

    <h1 class="mt-5">Add Project</h1>


    <form method="POST" action="{{ url('projects') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>







        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
