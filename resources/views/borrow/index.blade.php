@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Apply Books Section</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">Apply Books here</h5>
                <p class="card-text"></p>
                <button type="button" class="btn btn-secondary btn-lg">
                    <a href="{{ route('borrow.create') }}" class="text-decoration-none text-white">Apply new borrow request</a>
                </button>
                {{-- <button type="button" class="btn btn-secondary btn-lg">
                    <a href="books" class="text-decoration-none text-white">Show All Books</a>
                </button> --}}
            </div>
        </div>

    </div>
</div>
@endsection
