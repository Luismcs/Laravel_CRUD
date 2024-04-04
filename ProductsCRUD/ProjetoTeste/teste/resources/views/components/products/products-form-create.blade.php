<div class="container">

    <h1 class="mt-5">Add Products</h1>



    <form method="POST" action="{{ url('products') }}">
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

        <div class="form-group">
            <label for="name">Details</label>
            <input
                type="text"
                id="details"
                name="details"
                autocomplete="details"
                placeholder="Type your name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('details') }}"
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
            <label for="project_id">Project</label>
            <select name="project_id" id="project_id" class="form-control">
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>








        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
