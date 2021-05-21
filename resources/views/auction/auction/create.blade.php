@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">Create New Auction</h3>
                    @can('view-'.str_slug('Auction'))
                        <a class="btn btn-success pull-right" href="{{url('/auction')}}">
                            <i class="icon-arrow-left-circle"></i> View Auction</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(['url' => '/auction', 'class' => 'form-horizontal', 'files' => true]) !!}

                    @include ('auction.auction.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
