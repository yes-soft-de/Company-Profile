<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface TagRepositoryInterface{

    public function index();

    public function create();

    public function store(Request $request);

    public function show($id);

    public function edit($id);

    public function update($id);

    public function destroy($id);
}
