@extends('layouts.main')

@section('title','Dashboard')

@push('css')
    <style>
        ul.pagination{
            margin-bottom: 100px;
        }
        ul.pagination li {
            margin-right: 5px;
        }
        ul.pagination li a {
            background-color: rgb(39, 43, 48);
            padding: 5px 8px;
            color: white;
            display: block;
        }

        ul.pagination li.disabled span {
            background-color: darkgrey;
            padding: 5px 8px;
            color: white;
            display: block;
        }
    </style>
@endpush

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{config('app.name')}}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button class="btn btn-sm btn-outline-secondary">Share</button>
                    <button class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>
        <a class="btn btn-primary btn-lg mb-3" href="{{route('tickets.create')}}">Add New Ticket</a>
        @include('layouts.partials._alerts')
        {{--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>--}}

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>No#</th>
                    <th>Summary</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tickets as $key=>$ticket)
                    <tr>
                        <td>{{$ticket->id}}</td>
                        <td>{{str_limit($ticket->summary,20)}}</td>
                        <td>{{str_limit($ticket->description,40)}}</td>
                        <td>{{$ticket->status}}</td>
                        <td>{{$ticket->created_at}}</td>
                        <td>
                            <a href="{{route('tickets.show',$ticket->id)}}" class="btn btn-sm btn-info">Update</a>
                            <a href="{{route('tickets.delete',$ticket->id)}}" class="btn btn-sm btn-warning">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="" style="justify-content:center;align-items:center;">
                {{$tickets->links()}}
            </div>
        </div>
    </main>
@endsection

@push('js')

@endpush