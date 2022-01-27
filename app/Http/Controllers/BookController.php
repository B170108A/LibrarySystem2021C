<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::all();
        return view('books.index')->with(compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        return view('books.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($request->hasFile('imageBook'))
        // {
        //     $file = $request->file('imageBook');
        //     $extension = $file->getClientOriginalName();
        //     $filename = time().'.'.$extension;
        //     $file->move('images/book'.$filename);
        //     $data->imageBook = $filename;
        // }
        // $data = $request->validate([
        //     'nameBook' => 'required',
        //     'priceBook' => 'required|integer',
        //     'skuBook' => 'required',
        //     'descriptionBook' => 'required',
        //     'quantityBook' => 'required',
        //     'purchaseDateBook' =>'required',
        //     'publisherBook' => 'required',

        //     'imageBook' => 'required'

        // ]);
        // Book::create($data);

        $data = new Book;
        $data->nameBook = $request->input('nameBook');
        $data->priceBook = $request->input('priceBook');
        $data->skuBook = $request->input('skuBook');
        $data->descriptionBook = $request->input('descriptionBook');
        $data->quantityBook = $request->input('quantityBook');
        $data->purchaseDateBook = $request->input('purchaseDateBook');
        $data->publisherBook = $request->input('publisherBook');
        if ($request->hasfile('imageBook'))
        {
            $file = $request->file('imageBook');
            $extension = $file->getClientOriginalName();
            $filename = time().'.'.$extension;
            $file->move('images/book'.$filename);
            $data->imageBook = $filename;
            // echo'OK';
        }
        // $data->imageBook = $request->input('imageBook');
        $data->save();
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        $category = Category::all();
        $book = book::all();
        //Join Function
        return view('books.show',compact('category','book'));
    }
    public function detail($book)
    {
        $category = Category::all();
        $book = book::all()->where('id',$book);
        //Join Function
        return view('books.show',compact('category','book'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $r=request();
        $book=book::find($r->id);
        if($r->file('productImage')!=''){
        $image=$r->file('imageBook');
        $image->move('images',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();
        $book->image=$imageName;
        }

        $book->nameBook=$r->nameBook;
        $book->priceBook=$r->priceBook;
        $book->skuBook=$r->skuBook;
        $book->descriptionBook=$r->descriptionBook;
        $book->quantityBook=$r->quantityBook;
        $book->purchaseDateBook=$r->purchaseDateBook;
        $book->publisherBook=$r->publisherBook;
        $book->save();

       // Session::flash('success',"Product update successfully!");
        return redirect()->route('books.index');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        $deleteProduct=Book::find($book);
        $deleteProduct->delete();
        //Session::flash('success',"Product delete successfully!");
        return redirect()->route('books.index');
    }
}
