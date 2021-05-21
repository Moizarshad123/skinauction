@extends('layouts.master')

@push('css')
    <link href="{{asset('plugins/components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
@endpush

@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">Auction</h3>
                    @can('add-'.str_slug('Auction'))
                        <a class="btn btn-success pull-right" href="{{ url('/auction/create') }}"><i
                                    class="icon-plus"></i> Add Auction</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-borderless" id="myTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Price</th>
                                <th>Bid Cost</th>
                                {{-- <th>Auction Start Date</th>
                                <th>Auction Start Time</th>
                                <th>Image</th> --}}

                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php $count = 0; @endphp
                            @foreach($auction as $item)
                                <tr>
                                    <td>{{ ++$count }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->sub_title }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->bid_cost }}</td>
                                    {{-- <td>{{ date('d-m-Y',strtotime($item->auction_start_date)) }}</td>
                                    <td>{{ $item->auction_start_time }}</td> --}}
                                    {{-- @include('includes.image_html',['variable'=>$item->image]) --}}

                                    <td>
                                        @can('view-'.str_slug('Auction'))
                                            <a href="{{ url('/auction/' . $item->id) }}"
                                               title="View Auction">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                        @endcan

                                        @can('edit-'.str_slug('Auction'))
                                            <a href="{{ url('/auction/' . $item->id . '/edit') }}"
                                               title="Edit Auction">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit
                                                </button>
                                            </a>
                                        @endcan

                                        @can('delete-'.str_slug('Auction'))
                                            {!! Form::open([
                                       'method'=>'DELETE',
                                       'url' => ['/auction', $item->id],
                                       'style' => 'display:inline'
                                   ]) !!}
                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-sm',
                                                    'title' => 'Delete Auction',
                                                    'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                        @endcan
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $auction->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection



@push('js')
    <script src="{{asset('plugins/components/toast-master/js/jquery.toast.js')}}"></script>

    <script src="{{asset('plugins/components/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function () {

            @if(\Session::has('message'))
            $.toast({
                heading: 'Success!',
                position: 'top-center',
                text: '{{session()->get('message')}}',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
            @endif
        })

        $(function () {
            $('#myTable').DataTable({
                'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': [-1] /* 1st one, start by the right */
                }]
            });

        });
    </script>

@endpush