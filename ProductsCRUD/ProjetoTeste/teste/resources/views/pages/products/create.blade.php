@extends('master.main')

@section('content')

    <div class="container pt-5">

        @component('components.products.products-form-create',['projects'=>$projects,'categories'=>$categories])
        @endcomponent

    </div>

@endsection

