@extends('master.main')
@section('content')
    @component('components.projects.projects-form-show', ['project' => $project,'products'=>$products])
    @endcomponent
@endsection
