@extends('layouts.main')

@section('title','Ticket')

@push('css')

@endpush

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Update Ticket {{$ticket->id}}</h1>
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
        <div>
            <form action="{{route('tickets.update',$ticket->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="form-group">
                    <label for="summary">Summary</label>
                    @if($errors->has('summary'))
                        <span class="help-block text-danger float-right">
                            <strong>{{$errors->first('summary')}}</strong>
                        </span>
                    @endif
                    <input type="text" class="form-control {{$errors->has('summary') ? 'is-invalid':''}}" name="summary" id="summary" value="{{old('summary',$ticket->summary)}}" />

                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    @if($errors->has('description'))
                        <span class="help-block text-danger float-right">
                            <strong>{{$errors->first('description')}}</strong>
                        </span>
                    @endif
                    <textarea name="description" id="description" class="form-control {{$errors->has('description') ? 'is-invalid':''}}"  cols="30" rows="10">{{old('description',$ticket->description)}}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" value="{{$ticket->status}}">
                        <option value="Open" {{$ticket->status == 'Open'?'selected':''}}>Open</option>
                        <option value="In Progress" {{$ticket->status == 'In Progress'?'selected':''}}>In Progress</option>
                        <option value="Closed" {{$ticket->status == 'Closed'?'selected':''}}>Closed</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="./" class="btn btn-warning">Back</a>
                </div>
            </form>
        </div>
    </main>
@endsection

@push('js')

@endpush