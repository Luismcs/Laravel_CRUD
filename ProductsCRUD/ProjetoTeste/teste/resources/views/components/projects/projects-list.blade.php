<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Products</th>


    </tr>
    </thead>
    <tbody>

    @foreach ($projects as $project)

        <tr>
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->name }}</td>
            <td>
                @if($project->products)
                    @foreach($project->products as $product)
                        {{$product->name.','}}
                    @endforeach
                @endif
            </td>

            <td class="d-flex">
                <div class="pr-1">
                    <a href="{{url('projects/' . $project->id)}}" type="button"
                       class="btn btn-success">Show</a>
                </div>
                <div class="pr-1">
                    <a href="{{url('projects/' . $project->id . '/edit')}}" type="button"
                       class="btn btn-primary">Edit</a>
                </div>
                <div>
                    <form action="{{url('projects/' . $project->id)}}" method="POST">
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
