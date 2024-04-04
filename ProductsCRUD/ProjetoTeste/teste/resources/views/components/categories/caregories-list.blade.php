<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>

    </tr>
    </thead>
    <tbody>

    @foreach ($categories as $category)

        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
            <td class="d-flex">
                <div class="pr-1">
                    <a href="{{url('categories/' . $category->id)}}" type="button"
                       class="btn btn-success">Show</a>
                </div>
                <div class="pr-1">
                    <a href="{{url('categories/' . $category->id . '/edit')}}" type="button"
                       class="btn btn-primary">Edit</a>
                </div>
                <div>
                    <form action="{{url('categories/' . $category->id)}}" method="POST">
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
