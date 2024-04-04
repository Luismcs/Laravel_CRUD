<div class="container">

    <h1 class="mt-5">Edit Category</h1>

    <form method="POST" action="{{ url('categories/'.$category->id) }}">
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
                value="{{ $category->name}}"
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
            <label for="product_id">Products</label>
            <select multiple name="product_id[]" id="product_id" class="form-control">
                @foreach ($products as $product)
                    @php
                        $isSelected = $category->products->contains($product);
                    @endphp
                    <option {{ $isSelected ? 'selected' : '' }} value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>








            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
