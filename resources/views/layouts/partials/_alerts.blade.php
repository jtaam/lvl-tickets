{{--@if(session()->has('success'))--}}
    {{--<div class="alert alert-success alert-dismissible fade show float-right" role="alert">--}}
        {{--{{session('success')}}--}}
        {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
            {{--<span aria-hidden="true">&times;</span>--}}
        {{--</button>--}}
    {{--</div>--}}
{{--@endif--}}
@if(session()->has('success'))
    <div class="alert alert-success float-right" role="alert">
        {{session('success')}}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show float-right" role="alert">
        {{session('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif