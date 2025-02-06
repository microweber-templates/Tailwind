{{--
type: layout
content_type: static
name: Clean
position: 6
description: Clean
--}}

@extends('templates.tailwind::layouts.master')

@section('content')

    <div class="edit" data-layout-container rel="content" field="content">
        <module type="layouts" template="clean" />
    </div>

@endsection
