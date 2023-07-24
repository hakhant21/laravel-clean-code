<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Models\Products\Product;
use App\Http\Controllers\Controller;
use Domain\Applications\Usecases\Product\Usecase;

class ProductController extends Controller
{

    public $usecase;

    public function __construct(Usecase $usecase)
    {
        $this->usecase = $usecase;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->usecase->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->usecase->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->usecase->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $this->usecase->show($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return $this->usecase->edit($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        return $this->usecase->update($request, $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        return $this->usecase->delete($product);
    }
}
