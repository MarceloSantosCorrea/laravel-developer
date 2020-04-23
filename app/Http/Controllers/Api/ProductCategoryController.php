<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategoryRequest;
use App\Models\ProductCategory;

/**
 * Class ProductCategoryController
 * @package App\Http\Controllers\Api
 * @group Product Categories
 */
class ProductCategoryController extends Controller
{
    /**
     * List Product Categories
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $all = ProductCategory::paginate();

        return response()->json($all);
    }

    /**
     * Create Product Categories
     *
     * @param  ProductCategoryRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ProductCategoryRequest $request)
    {
        $aclRole = ProductCategory::create($request->all());

        return response()->json($aclRole);
    }

    /**
     * Show Product Categories
     *
     * @urlParam uid required string
     * @param  string  $uid
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|object|null
     */
    public function show(string $uid)
    {
        try {
            return ProductCategory::where('uid', $uid)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Product Categories found'], 404);
        }
    }

    /**
     * Update Product Categories
     *
     * @urlParam uid required string
     * @param  ProductCategoryRequest  $request
     * @param  string  $uid
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ProductCategoryRequest $request, string $uid)
    {
        $data = $request->all();

        try {
            $productCategory = ProductCategory::where('uid', $uid)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Product Categories found'], 404);
        }

        $productCategory->fill($data);
        $productCategory->save();

        return response()->json($productCategory);
    }

    /**
     * Delete Product Categories
     *
     * @urlParam uid required string
     * @param  string  $uid
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|object|null
     * @throws \Exception
     */
    public function destroy(string $uid)
    {
        try {
            $productCategory = ProductCategory::where('uid', $uid)->first();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Product Categories found'], 404);
        }

        $productCategory->delete();

        return $productCategory;
    }
}
