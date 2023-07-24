<?php

namespace Domain\Applications\Usecases\Product;

interface Usecase
{
    public function index();

    public function create();

    public function store($request);

    public function show($product);

    public function edit($product);

    public function update($request, $product);

    public function delete($product);
}
