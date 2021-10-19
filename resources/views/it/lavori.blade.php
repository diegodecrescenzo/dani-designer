@extends('it.master.layout-it')

@section('content')




    @if($jobs)

        @foreach($jobs as $job)

            <div class="container my-5">

                <div class="row featurette">
                    <div class="col-md-7 align-self-center">
                        <h2 class="featurette-heading"> {{$job->title}}
                            <small class="d-block my-2 text-muted">{{$job->subtitle}}</small>
                        </h2>
                        <p class="lead py-2">{{$job->content}}</p>
                    </div>
                    <div class="col-md-5">
                        <div class="jobs">
                            <img class="image-jobs" src="{{asset($job->image)}}" alt="{{$job->title}}" title="{{$job->title}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <hr class="featurette-divider">
            </div>
        @endforeach





    @endif

@endsection
