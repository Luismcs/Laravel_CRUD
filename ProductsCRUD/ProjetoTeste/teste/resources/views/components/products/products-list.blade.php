<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Details</th>
        <th scope="col">Project</th>


    </tr>
    </thead>
    <tbody>

    @foreach ($products as $product)

        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->details }}</td>
            <td>
                {{$product->project->name}}
            </td>

            <td class="d-flex">
                <div class="pr-1">
                    <a href="{{url('products/' . $product->id)}}" type="button"
                       class="btn btn-success">Show</a>
                </div>
                <div class="pr-1">
                    <a href="{{url('products/' . $product->id . '/edit')}}" type="button"
                       class="btn btn-primary">Edit</a>
                </div>
                <div>
                    <form action="{{url('products/' . $product->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </td>

        </tr>
    @endforeach

    </tbody>
</table>
