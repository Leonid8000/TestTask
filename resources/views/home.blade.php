@extends('layouts.app')

@section('content')
<div class="wrapper">
        <h1 class="h1-title text-center mt-1">We greet you {{ $user->name }} !</h1>

        <div class="col-lg-3 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                   <h5 class="text-center font-weight-bold"> Profile </h5>
                    </div>
                        <div class="card-body">
                            <?php
                                $progress = 100;
                                if($user->phone == null){
                                    $progress -= 14;
                                }if($user->city == 'not selected'){
                                    $progress -= 14;
                                }if($user->gender == 'not selected'){
                                    $progress -= 14;
                                }
                                ?>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                </div>
                        </div>

                    @if($progress != 100)
                        <h5 class="text-center">Revive it in your office</h5>
                    <a href="{{route('edit')}}" class="ml-4">
                        <button type="submit" class="btn btn-dark edit-btn">
                            <i class="fa fa-edit">Fill out profile</i>
                        </button>
                    </a>
                    @endif
                </div>
        </div>

    {{-- Card Events --}}
    @if ( $user->city != 'not selected')
    <div class="col-lg-3 offset-lg-2">
        <div class="card">
            <div class="card-header">
                <h5 class="text-center font-weight-bold">Activities nearby</h5>
            </div>
            <div class="card-body">
                 <p class="card-title">Events in the city of {{ $user->city }}:</p>
            </div>
        </div>
    </div>
    @endif

@include('layouts.sidebar')
</div>
@endsection
