@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
<<<<<<< HEAD
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
=======
                <div class="panel-heading">Users</div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Active status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Brian Phiri</td>
                            <td>Online</td>
                        </tr>
                    </tbody>
                </table>
>>>>>>> 0ae363e8fc6a5d03a5f9cc628d49db227bade8da
            </div>
        </div>
    </div>
</div>
@endsection
