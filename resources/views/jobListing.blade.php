@extends('layout')
@section('title', 'Job Finders | Latest Jobs')

@section('content')
    <h4 class="ml-3 mr-3 border-bottom pb-2 mt-3">{props.title}</h4>
    <div class="row m-0">
        @foreach ($jobs as $job)
            <div class="col-md-12 mb-2">
                <div class="border rounded p-3">
                    <h5>{{$job->title}}</h5>
                    <div class="text-muted mb-4">{{$job->positions}}</div>
                    <div class="d-flex justify-content-between text-app"><div>{{$job->locations}}<br />{{$job->ad_date}}</div>
                        <div><button class="btn btn-app">View Details</button></div></div>
                </div>
            </div>
        @endforeach
    </div>
    <div class='row'>
        <div class='col-md-12 d-flex justify-content-center'>
        </div>
    </div>
@endsection