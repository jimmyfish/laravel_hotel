@extends('layouts.error')

@section('content')
<h1>403</h1>
<h3 class="text-uppercase">@lang('error.forbidden_header')</h3>
<p class="text-muted m-t-30 m-b-30 text-uppercase">@lang('error.forbidden_caption').</p>
@endsection