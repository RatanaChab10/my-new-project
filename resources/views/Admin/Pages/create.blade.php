@extends('Admin.Layout.Master')
@section('centent')

    <h1>{{ $title }}</h1>
    <p>This is a laravel tutorial series</p>
    <label for="title">Title: </label>
        <input type="text" name="title" id="title" placeholder="The Title of article">
        <input type="button" value="Back" onclick="window.location='/admin/pages'">
@endsection