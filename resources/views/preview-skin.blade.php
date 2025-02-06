@extends('templates.tailwind::layouts.master')

@section('content')

@php
$skinFile = false;
$moduleFile = false;
if (isset($_GET['skin'])) {
    $skinFile = $_GET['skin'];
}
if (isset($_GET['module'])) {
    $moduleFile = $_GET['module'];
}

$addDisplayInline = true;
if (strpos($moduleFile, 'pictures') !== false) {
    $addDisplayInline = false;
}
@endphp


@if ($addDisplayInline)
<style>
    #preview-skin-file .module {
        display: inline-block;
    }
</style>
@endif
<style>
    #preview-skin-file .module {
        padding:10px;
    }
</style>

<div id="preview-skin-file">
    <module id="{{md5($skinFile . $moduleFile)}}-module" type="{{$moduleFile}}" template="{{$skinFile}}" />
</div>

@endsection
