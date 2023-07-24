<?php

namespace Domain\Applications\Interactors\Product;

use Domain\Applications\Usecases\Product\Usecase;
use Domain\Services\Product\Service;

class Interactor implements Usecase
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store($request)
    {
        $this->service->store($request);

        return view('products.all')->with('message', 'Successfully created...');
    }

    public function show($product)
    {
        return view('products.show', compact('product'));
    }

    public function edit($product)
    {
        return view('products.edit', compact('product'));
    }

    public function update($request, $product)
    {
        $this->service->update($request, $product);

        return to_route('products.all')->with('message', 'Successfully updated');
    }

    public function delete($product)
    {
        $this->service->delete($product);

        return to_route('products.all')->with('message', 'Successfully deleted');
    }
}
