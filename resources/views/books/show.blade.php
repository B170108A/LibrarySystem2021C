<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Books')}} 
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <x-validation-errors />

                    <x-success-message /> --}}
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{-- route('books.update',$book->id) --}}">
                            @csrf
                            @method('PUT')

                            <div class="grid grid-cols-2 gap-6">
                                <div class="grid grid-rows-2 gap-6">
                                    <div>
                                        <x-label for="nameBook" :value="__('Books Name')" />
                                        <x-input id="nameBook" class="block mt-1 w-full" type="text" name="nameBook" placeholder="Book's Name" value="{{ $book->nameBook }}" autofocus disabled/>
                                    </div>
                                    <br>
                                    <div>
                                        <x-label for="priceBook" :value="__('Books Pricing')" />
                                        <x-input id="priceBook" class="block mt-1 w-full" type="text" name="priceBook" placeholder="Price" value="{{ $book->priceBook }}" autofocus disabled/>
                                    </div>
                                    <br>
                                    <div>
                                        <x-label for="skuBook" :value="__('Books SKU')" />
                                        <x-input id="skuBook" class="block mt-1 w-full" type="text" name="skuBook" placeholder="Book SKU" value="{{ $book->skuBook }}" autofocus disabled/>
                                    </div>
                                    <br>
                                    <div>
                                        <x-label for="descriptionBook" :value="__('Books Description')" />
                                        <x-input id="descriptionBook" class="block mt-1 w-full" type="text" name="descriptionBook" placeholder="Description" value="{{ $book->descriptionBook }}" autofocus disabled/>
                                    </div>
                                    <br>
                                    <div>
                                        <x-label for="quantityBook" :value="__('Books Quantity In')" />
                                        <x-input id="quantityBook" class="block mt-1 w-full" type="text" name="quantityBook" placeholder="Quantity" value="{{ $book->quantityBook }}" autofocus disabled/>
                                    </div>
                                    <br>
                                    <div>
                                        <x-label for="purchaseDateAsset" :value="__('Book Purchase Date')" />
                                        <x-input id="purchaseDateAsset" class="block mt-1 w-full" type="text" name="purchaseDateAsset" placeholder="Purchase Date" value="{{ $book->purchaseDateAsset }}" autofocus disabled/>
                                    </div>
                                    <br>
                                    <div>
                                        <x-label for="publisherBook" :value="__('Book Publisher')" />
                                        <x-input id="publisherBook" class="block mt-1 w-full" type="text" name="publisherBook" placeholder="Book Publisher" value="{{ $book->publisherBook }}" autofocus disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-3">
                                    {{ __('Edit this Books') }}
                                </x-button>
                            </div>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
