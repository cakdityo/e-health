@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <strong>Hello</strong> {{ $user->name }}!
                </div>
            </div>
            <br>
            <form method="post" action="{{ URL::to('/diagnosis') }}">
                <div class="list-group">
                    @foreach($indications as $indication)
                        <div class="list-group-item">
                            {{ $indication->name }} <input class="pull-right" type="checkbox" name="indications[]" value="{{ $indication->id }}">
                        </div>
                    @endforeach
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input class="form-control btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection
