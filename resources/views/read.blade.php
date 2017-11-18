@extends('master')
@section('content')
    <cleartext v-bind:memo='{!! json_encode($memo) !!}'></cleartext>
    <!-- {!! json_encode($memo) !!} -->
@endsection