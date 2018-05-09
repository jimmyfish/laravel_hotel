@extends('layouts.demo')

@section('title')
    @lang('dashboard.createRoom')
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Room</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
    <div class="container-fluid m-t-20">
        <div class="row">
            <div class="col-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <form class="form-material" action="" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="identifier">{{ __('Room Name') }}</label>
                                <input type="text" class="form-control" name="identifier" id="identifier">
                            </div>
                            <div class="form-group">
                                <label for="room_name">{{ __('Room Name') }}</label>
                                <input type="text" class="form-control" name="room_name" id="room_name">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
