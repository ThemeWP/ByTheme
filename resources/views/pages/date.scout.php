@extends('layouts.default')

@section('content')
<div class="container pt-60 mt-20pb-40">
    @include('partials.timeline.timeline')
    @include('partials.pagination')
</div>
@stop

@section('script')
<script></script>
@stop