
@extends('Login.Layouts.app')

@section('content')

<form action="{{ route('profile.store') }}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="submit" value="Xóa" class="btn btn-danger btn-xs fa fa-trash-o">
</form>
@endsection
