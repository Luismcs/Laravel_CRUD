@extends('master.main')
@section('content')
    @component('components.categories.categories-form-show', ['category' => $category,'products' => $products])
    @endcomponent
@endsection
