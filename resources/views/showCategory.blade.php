@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end container">
            <button class="btn btn-outline-secondary">
                <a href="addCategory" >Add Category</a>
            </button>
        </div>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end container">
            <button class="btn btn-outline-secondary">
                <a href="add" >Return to Previous</a>
            </button>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection
