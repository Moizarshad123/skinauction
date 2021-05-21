@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">Auction {{ $auction->id }}</h3>
                    @can('view-'.str_slug('Auction'))
                        <a class="btn btn-success pull-right" href="{{ url('/auction') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $auction->id }}</td>
                            </tr>
                            <tr>
                                <th> Name </th>
                                <td> {{ $auction->name }} </td>
                            </tr>
                            <tr>
                                <th> Title </th>
                                <td> {{ $auction->title }} </td>
                            </tr>
                            <tr>
                                <th> Sub Title </th>
                                <td> {{ $auction->sub_title }} </td>
                            </tr>
                            <tr>
                                <th> Price </th>
                                <td> {{ $auction->price }} </td>
                            </tr>
                            <tr>
                                <th> Bid Cost </th>
                                <td> {{ $auction->bid_cost }} </td>
                            </tr>
                            <tr>
                                <th> Auction Start Date </th>
                                <td> {{ $auction->auction_start_date }} </td>
                            </tr>
                            <tr>
                                <th> Auction Start Time</th>
                                <td> {{ $auction->auction_start_time }} </td>
                            </tr>
                            <tr>
                                <th> Image </th>
                                @include('includes.image_html',['variable'=>$auction->image])
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

