@extends('layouts.frontLayout')

@section('content')
<form action="{{ url('payment') }}" method="POST">
    @csrf

    <button type="submit" class="btn btn-info">Submit</button>
</form>

@endsection