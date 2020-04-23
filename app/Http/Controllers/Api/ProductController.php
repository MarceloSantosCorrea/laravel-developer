<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

/**
 * Class ProductController
 * @package App\Http\Controllers\Api
 * @group Products
 */
class ProductController extends Controller
{
    /**
     * List Products
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $all = Product::paginate();

        return response()->json($all);
    }

    /**
     * Create Product
     *
     * @param  ProductRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());

        return response()->json($product);
    }

    /**
     * Show Product
     *
     * @urlParam uid required string
     * @param  string  $uid
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|object|null
     */
    public function show(string $uid)
    {
        try {
            return Product::where('uid', $uid)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    /**
     * Update Product
     *
     * @urlParam uid required string
     * @param  ProductRequest  $request
     * @param  string  $uid
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ProductRequest $request, string $uid)
    {
        $data = $request->all();

        try {
            $product = Product::where('uid', $uid)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->fill($data);
        $product->save();

        return response()->json($product);
    }

    /**
     * Delete Product
     *
     * @urlParam uid required string
     * @param  string  $uid
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|object|null
     * @throws \Exception
     */
    public function destroy(string $uid)
    {
        try {
            $product = Product::where('uid', $uid)->first();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();

        return $product;
    }
}
