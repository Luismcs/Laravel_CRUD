<div class="container">

    <h1 class="mt-5">Edit Category</h1>

    <form method="POST" action="{{ url('products/'.$product->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ $product->name}}"
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
                value="{{ $product->details}}"
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
            <select name="project_id" id="project_id"
                    class="form-control">
                @foreach ($projects as $project)
                    @if($project->id == $product->project_id)
                        <option selected value="{{ $project->id }}">{{ $project->name }}</option>
                    @else

                        <option value="{{ $project->id }}">{{$project->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>



        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" id="category_id"
                    class="form-control">
                @foreach ($categories as $category)
                    @if($category->id == $product->category_id)
                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                    @else

                        <option value="{{ $category->id }}">{{$category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>




        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
