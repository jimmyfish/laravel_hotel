@extends('layouts.demo')

@section('title')
    {{ __("Hotel Setting") }}
@endsection

@section('breadcrumb')

@endsection

@section('content')
    <div class="container-fluid">
        @php ($i = 1)
        <div class="row">
            <div class="col-6 offset-md-3 m-t-20">
                <div class="card">
                    <div class="card-body">
                        <form class="form-material" action="" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="type">
                                    {{ __('Room Type') }} <small>- {{ __('Separate by Comma') }}</small>
                                </label>
                                <textarea name="type" id="type" class="form-control" rows="3">@foreach ($settings->type as $setting){{ $setting }},@endforeach</textarea>
                            </div>
                            <div class="form-group">
                                <label for="floor">{{ __('Floor') }}</label>
                                <input type="number" name="floor" id="floor" class="form-control" value="{{ $settings->floor }}">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="{{ __('Update') }}" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
