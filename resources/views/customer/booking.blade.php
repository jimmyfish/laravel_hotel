@extends('layouts.demo')

@section('title')
Booking
@endsection

@section('breadcrumb')

@endsection

@section('content')
<div class="container-fluid m-t-20">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-gro">
                            <select name="" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->identifier }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
