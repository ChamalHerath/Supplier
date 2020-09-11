<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProductController;
use App\Http\Requests\SupplierCreateRequest;
use App\Supplier;

class SupplierController extends Controller
{
    protected $productController;

    public function __construct()
    {
        $this->productController = new ProductController();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::paginate(10);
        // return view('supplier.index')->with('suppliers', $suppliers);
        return view('supplier.index', compact('suppliers'));
    }

    // public function orderHistory()
    // {
    //     return view('supplier.orderhistory');
    // }

    // public function requestOrder()
    // {
    //     $suppliers = Supplier::all();
    //     return view('supplier.requestorder', compact('suppliers'));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = $this->productController->index();
        return view('supplier.create')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierCreateRequest $request)
    {
        // return $request;
        Supplier::create($request->all());
        // $suppliers = Supplier::all();
        // return view('supplier.index')->with('suppliers', $suppliers);
        return redirect('/supplier')->with('success', 'Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        // dd($supplier->address);
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierCreateRequest $request, Supplier $supplier)
    {
        $supplier->update($request->all());
        return redirect('/supplier')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect('/supplier')->with('success', 'Successfully Deleted');

    }
}
