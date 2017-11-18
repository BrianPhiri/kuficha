@extends('master')
@section('content')
    <passkey v-bind:memo='{!! json_encode($memo) !!}'></passkey>
@endsection