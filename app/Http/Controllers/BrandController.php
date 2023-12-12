<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Brand::all();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $validatedData = $request->validated();

        $brand = Brand::create($validatedData);
        return ['status' => 1, 'message' => 'Brand created successfully'];
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request)
    {
        $validatedData = $request->validated();

        $id = $request->input('id');
        $brand = Brand::find($id);

        // Check if the brand exists
        if ($brand) {
            $brand->update($validatedData);
            return ['status' => 1, 'message' => 'Brand update successfully'];
        } else {
            // Return an error response if the brand doesn't exist
            return ['status' => 0, 'message' => 'Brand not found'];
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        // Find the brand by ID and delete it
        $brand = Brand::find($id);

        if ($brand) {
            $brand->delete();
            return ['status' => 1, 'message' => 'Brand deleted successfully'];
        } else {
            return ['status' => 0, 'message' => 'Brand not found'];
        }
    }
}
