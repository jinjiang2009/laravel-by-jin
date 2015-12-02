<!-- 存放在 resources/views/layouts/child.blade.php -->
@extends('componets.master')
@section('title', 'Page Title')
@section('sidebar') @parent
<p>This is appended to the master sidebar.</p>
@endsection
@section('content')
    <p>
        This is my body
    content.
    </p>
@endsection