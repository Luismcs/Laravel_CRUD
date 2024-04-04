@extends('master.main')

@section('content')

    <div class="container pt-5">

        @component('components.projects.projects-form-edit', ['project' => $project,'products'=>$products])
        @endcomponent
    </div>

@endsection

