@extends('master.main')

@section('content')

    <div class="container pt-5">

        @component('components.products.products-form-edit', ['projects' => $projects,'categories' => $categories,'product' => $product,])
        @endcomponent
    </div>

@endsection

