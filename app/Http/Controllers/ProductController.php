<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        try {
             $products = Product::query()->get();

            return response()->json([
                'success' => true,
                'message' => 'Products retrieved successfully',
                'data' => $products
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving ' . $exception->getMessage()
            ]);
        }
    }

    public function createProduct(Request $request)
    {
        try {
            Log::info("Creating a product");

            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'description' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => $validator->errors()
                    ],
                    400
                );
            };

            $name = $request->input('name');
            $price = $request->input('price');
            $description = $request->input('description');
            $image = $request->input('image');
            $type_id = $request->input('type_id');
            $specifications = $request->input('specifications');
            $stock = $request->input('stock');


            $product = new Product();
            $product->name = $name;
            $product->price = $price;
            $product->description = $description;
            $product->image = $image;
            $product->type_id = $type_id;
            $product->specifications = $specifications;
            $product->stock = $stock;

            $product->save();


            return response()->json(
                [
                    'success' => true,
                    'message' => "Product created"
                ],
                200
            );
        } catch (\Exception $exception) {
            Log::error("Error creating product: " . $exception->getMessage());

            return response()->json(
                [
                    'success' => false,
                    'message' => "Error creating Product"
                ],
                500
            );
        }
    }

     public function getProductByName(Request $request, $name)
    {

        try {
            $product = Product::query()->where('name', $name)->get();

            return response()->json([
                'success' => true,
                'message' => 'Products retrieved successfully',
                'data' => $product
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving ' . $exception->getMessage()
            ]);
        }
    } 

      public function deleteGameById($id)
    {
        try {
            Log::info('Delete game with the id ' . $id);

            $game = Product::find($id);

            if (!$game) {
                return response()->json([
                    'success' => false,
                    'message' => "The game doesn't exist"
                ], 200);
            }

            $game->delete();

            return response()->json([
                'success' => true,
                'message' => 'Game ' . $id . ' deleted successfully'
            ], 200);
        } catch (\Exception $exception) {
            Log::error('Updating game ' . $exception->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error deleting game'
            ], 500);
        }
    } 

     public function modifyGameById(Request $request, $id)
    {
        try {
            Log::info("Updating game");

            $game = Product::query()->where('id', $id)->first();

            $validator = Validator::make($request->all(), [
                'title' => 'required|string',
                'description' => 'required|string',
                'status' => 'required|integer',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()
                ]);
            }

            $title = $request->input('title');
            $description = $request->input('description');
            $status = $request->input('status');

            $game->title = $title;
            $game->description = $description;
            $game->status = $status;

            $game->save();

            return response()->json([
                'success' => true,
                'message' => 'Game ' . $id . ' updated successfully'
            ], 200);
        } catch (\Exception $exception) {
            Log::error('Updating game ' . $exception->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error updating game'
            ], 500);
        }
    } 
}
