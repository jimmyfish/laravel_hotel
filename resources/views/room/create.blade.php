@extends('layouts.demo')

@section('title')
    {{ __('Create Room') }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Room</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
    <div class="container-fluid m-t-20">
        <div class="row">
            <div class="col-lg-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        @if (Session::has('room_success'))
                            <div class="alert alert-success">
                                {{ Session::get('room_success') }}
                            </div>
                        @endif
                        <form class="form-material" action="" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="identifier">{{ __('Room Name') }}</label>
                                <input type="text" class="form-control" name="identifier" id="identifier" value="{{ old('identifier') }}">
                            </div>

                            <div class="form-group">
                                <label for="type">{{ __('Room Type') }}</label>
                                <select name="type" id="type" class="form-control">
                                    @foreach ($setting->type as $type)
                                        <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="bed_count">{{ __('Bed Count') }}</label>
                                <input type="number" class="form-control" name="bed_count" id="bed_count">
                            </div>

                            <div class="form-group">
                                <label for="price">{{ __('Price') }}</label>
                                <input type="text" name="price" id="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="floor">{{ __('Floor') }}</label>
                                <select name="floor" id="floor" class="form-control">
                                    @for ($i = 1; $i < ($setting->floor + 1); $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="breakfast" id="breakfast" class="filled-in" value="1" />
                                <label for="breakfast">{{ __('Breakfast') }}</label>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="{{ __('Create Room') }}" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
