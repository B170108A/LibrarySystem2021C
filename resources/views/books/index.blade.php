@extends('layouts.app')
@section('content')
    <div class="py-12">
        <div class="maw-7xl mauto sm:p6 lg:p8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{-- <div class="float-end"><a class="btn btn-link float-end"
                            href="{{ route('assets.create') }}">Create Product</a> </div> --}}
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end container">
                        <button class="btn btn-outline-secondary">
                            <a href="{{ route('books.create') }}"  class="text-decoration-none text-black" >Create New Books</a>
                        </button>
                    </div>


                    {{-- Display message --}}
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flecol">
                        <div class="-my-2 overflow-auto sm:-m6 lg:-m8">
                            <div class="py-2 align-middle inline-block min-w-full sm:p6 lg:p8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg container">

                                    <table class="table table-borderd">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="p6 py-3 text-left text-gray-500 uppercase tracking-wider">
                                                    Book ID
                                                </th>
                                                <th scope="col"
                                                    class="p6 py-3 text-left text-gray-500 uppercase tracking-wider">
                                                    Book SKU
                                                </th>
                                                <th scope="col"
                                                    class="p6 py-3 text-left text-gray-500 uppercase tracking-wider">
                                                    Book Name
                                                </th>
                                                <th scope="col"
                                                    class="p6 py-3 text-left text-gray-500 uppercase tracking-wider">
                                                    Book Price
                                                </th>
                                                <th scope="col" class="relative p6 py-3">
                                                    <span class="sr-only">View</span>
                                                </th>
                                                <th scope="col" class="relative p6 py-3">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                                <th scope="col" class="relative p6 py-3">
                                                    <span class="sr-only">Delete</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($books as $book)
                                            <tr>
                                                <td class="p6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="fleshrink-0 h-10 w-10">
                                                            {{-- Here Can put image --}}
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{ $book->id }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $book->skuBook }}
                                                    </div>
                                                </td>
                                                <td class="p6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $book->nameBook }}
                                                    </div>
                                                </td>
                                                <td class="p6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            $ {{ $book->priceBook }}
                                                        </div>
                                                    </span>
                                                </td>
                                                {{-- <td class="p6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    Admin
                                                </td> --}}
                                                <td class="p6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div>
                                                        {{-- <a href="{{ route('books.show',$book->id) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">View</a> --}}
                                                    </div>
                                                </td>
                                                <td class="p6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div>
                                                        {{-- <a href="{{ route('books.edit',$book->id) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">Edit</a> --}}
                                                    </div>
                                                </td>
                                                {{-- <td class="p6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div>
                                                        <a href="{{ route('books.destroy', $book->id) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">Delete</a>
                                                    </div>

                                                </td> --}}
                                                <td class="p6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div>
                                                        {{-- <a href="#"
                                                            class="text-indigo-600 hover:text-indigo-900">Delete</a> --}}
                                                    </div>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
