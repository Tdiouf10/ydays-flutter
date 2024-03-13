<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends ApiController
{
    public function __construct()
    {
        $this->model = new Product();
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): ProductCollection
    {
        return new ProductCollection(Product::query()->paginate(10));
    }

    public function popular()
    {
        $popularProduct = Product::query()->whereHas('favories')->get();

        return new ProductCollection($popularProduct);
    }

    public function recommanded()
    {
        $preferencesId = auth()->user()->favories->pluck('id');
        $recettesRecommandees = Product::query()->whereHas('favories', function ($query) use ($preferencesId) {
            $query->whereIn('id', $preferencesId);
        })->inRandomOrder()->limit(10)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $product)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $fields = collect($request->all());
        // Set data to the model
        $productModel = $this->fillModel($this->model, $fields);
        // Save the model
        $success = $productModel->save();

        if (! $success) {
            return $this->internalServerError('User creation failed');
        }

        return $this->successResponse('User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): ProductResource
    {
        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): JsonResponse|ProductCollection
    {
        $fields = collect($request->all());
        // Set data to the model
        $productModel = $this->fillModel($product, $fields);
        // Save the model
        $success = $productModel->save();

        if (! $success) {
            return $this->internalServerError('Product creation failed');
        }

        return $this->successResponse('Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): JsonResponse
    {
        $product->delete();

        return $this->successResponse('Product deleted successfully');
    }
}
