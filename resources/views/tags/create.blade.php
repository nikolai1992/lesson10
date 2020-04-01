@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Create tag</div>
        <div class="card-body">
            {!! Form::open(['url'=>route('tags.store'),'method'=>'POST']) !!}
            <div class="row">
                <label>Name</label>
                <input name="name" class="form-control" value="">
            </div><br>
            <div class="row">
                <input type="submit" value="Save" class="btn btn-success">
            </div>
            {{Form::close()}}
        </div>
    </div>
@endsection