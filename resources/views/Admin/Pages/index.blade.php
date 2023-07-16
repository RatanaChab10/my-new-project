@extends('Admin.Layout.Master')
@section('centent')
  <h1>{{ $title }}</h1>
  <p>This is a laravel tutorial series</p>
  @if (count($services) > 0 )
    <ul>
      @foreach ($services as $item)
        <li>{{ $item }}</li><br>
      @endforeach
    </ul>
  @endif
  <input type="button" value="Add" onclick="window.location='/admin/pages/create'">
@endsection