@extends('layouts.app')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('books.update',$book->id) }}">
                    @csrf
                    <div class="grid grid-cols-2 gap-6">
                        <div class="grid grid-rows-2 gap-6">
                            <div>
                                <label for="nameBook">Books Name</label>
                                <br>
                                <input id="nameBook" class="block mt-1 w-full" type="text" name="nameBook"
                                    placeholder="Book's Name" autofocus value="{{ $books->nameBook }}" />
                            </div>
                            <br>
                            <div>
                                <label for="priceBook">Books Pricing</label>
                                <br>
                                <input id="priceBook" class="block mt-1 w-full" type="text" name="priceBook"
                                    placeholder="Price" autofocus value="{{ $books->priceBook }}" />
                            </div>
                            <br>
                            <div>
                                <label for="skuBook">Books SKU</label>
                                <br>
                                <input id="skuBook" class="block mt-1 w-full" type="text" name="skuBook"
                                    placeholder="Book SKU" autofocus value="{{ $books->skuBook }}" />
                            </div>
                            <br>
                            <div>
                                <label for="descriptionBook">Books Description</label>
                                <br>
                                <input id="descriptionBook" class="block mt-1 w-full" type="text" name="descriptionBook"
                                    placeholder="Description" autofocus value="{{ $books->descriptionBook }}" />
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="Category">Category</label>
                                <select name="CategoryID" id="CategoryID" class="form-control">
                                    @foreach($categoryID as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div>
                                <label for="quantityBook">Books Quantity In</label>
                                <br>
                                <input id="quantityBook" class="block mt-1 w-full" type="text" name="quantityBook"
                                    placeholder="Quantity" autofocus value="{{ $books->quantityBook }}" />
                            </div>
                            <br>
                            <div>
                                <label for="purchaseDateBook">Book Purchase Date</label>
                                <br>
                                <input id="purchaseDateBook" class="block mt-1 w-full" type="text"
                                    name="purchaseDateBook" placeholder="Purchase Date" autofocus
                                    value="{{ $books->purchaseDateBook }}" />
                            </div>
                            <br>
                            <div>
                                <label for="publisherBook">Book Publisher</label>
                                <br>
                                <input id="publisherBook" class="block mt-1 w-full" type="text" name="publisherBook"
                                    placeholder="Brand" autofocus value="{{ $books->publisherBook }}" />
                            </div>
                        </div>
                    </div>
                    {{-- <div class="flex items-center justify-end mt-4">
                        <button class="ml-3">
                            {{ __('Create new') }}
                        </button>
                    </div> --}}
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end container">
                        <button class="btn btn-outline-secondary">
                            Create New Books
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
