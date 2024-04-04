@extends('master.main')

@section('content')
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <div class="container pt-5">

        <div class="h1">Product List</div>

        @component('components.products.products-list', ['products' => $products])
        @endcomponent
    </div>


@endsection
