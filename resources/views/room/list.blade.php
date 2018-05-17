@extends('layouts.demo')

@section('title')
{{ __('List Room') }}
@endsection

@section('breadcrumb')

@endsection

@section('content')
@php($i = 1)
<div class="container-fluid m-t-20">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('room_create') }}" class="btn btn-primary">{{ __('Add Room') }}</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ __('No.') }}</th>
                                    <th>{{ __('Room Number') }}</th>
                                    <th>{{ __('Floor') }}</th>
                                    <th>{{ __('Bed Count') }}</th>
                                    <th>{{ __('Price') }}</th>
                                    <th>{{ __('Breakfast') }}</th>
                                    <th>{{ __('Available') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($room as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->identifier }}</td>
                                        <td>{{ $item->floor }}</td>
                                        <td>{{ $item->bed_count }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            @if ($item->breakfast == 1)
                                                <span class="label label-success">{{ __('Yes') }}</span>
                                            @else
                                                <span class="label label-warning">{{ __('No') }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->is_available == 1)
                                                <span class="label label-success">{{ __('Yes') }}</span>
                                            @else
                                                <span class="label label-warning">{{ __('No') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @php($i += 1)
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
