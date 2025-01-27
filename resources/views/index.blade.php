@extends('templates.tailwind::layouts.master')

@section('content')

    <div class="edit" data-layout-container field="content" rel="content">
        <h2>Hello World tailwind</h2>
        <p>Template: {!! config('templates.tailwind.name') !!}</p>
     </div>

@endsection
