@extends('master.main')
@section('content')
    @component('components.products.products-form-show', ['product' => $product])
    @endcomponent
@endsection
