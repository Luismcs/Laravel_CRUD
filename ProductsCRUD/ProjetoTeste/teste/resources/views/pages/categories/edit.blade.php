@extends('master.main')

@section('content')

    <div class="container pt-5">

        @component('components.categories.categories-form-edit', ['category' => $category,'products'=>$products])
        @endcomponent
    </div>

@endsection

