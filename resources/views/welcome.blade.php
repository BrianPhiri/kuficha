@extends('master')
@section('content')
    <memolist v-bind:memos='{!! json_encode($memos) !!}'></memolist>
@endsection