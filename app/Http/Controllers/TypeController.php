<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    public function getAllTypes()
    {
        try {
             $types = Type::query()->get();

            return response()->json([
                'success' => true,
                'message' => 'Types retrieved successfully',
                'data' => $types
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving ' . $exception->getMessage()
            ]);
        }
    }

    public function createType(Request $request)
    {
        try {
            Log::info("Creating a Type");

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
            $description = $request->input('description');


            $type = new Type();
            $type->name = $name;
            $type->description = $description;

            $type->save();


            return response()->json(
                [
                    'success' => true,
                    'message' => "type created"
                ],
                200
            );
        } catch (\Exception $exception) {
            Log::error("Error creating type: " . $exception->getMessage());

            return response()->json(
                [
                    'success' => false,
                    'message' => "Error creating type"
                ],
                500
            );
        }
    }

      public function deleteTypeById($id)
    {
        try {
            Log::info('Delete type with the id ' . $id);

            $type = Type::find($id);

            if (!$type) {
                return response()->json([
                    'success' => false,
                    'message' => "The type doesn't exist"
                ], 200);
            }

            $type->delete();

            return response()->json([
                'success' => true,
                'message' => 'type ' . $id . ' deleted successfully'
            ], 200);
        } catch (\Exception $exception) {
            Log::error('Updating type ' . $exception->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error deleting type'
            ], 500);
        }
    } 

     public function modifyTypeById(Request $request, $id)
    {
        try {
            Log::info("Updating type");

            $type = Type::query()->where('id', $id)->first();

            if (!$type) {
                return response()->json([
                    'success' => false,
                    'message' => "The type doesn't exist"
                ], 200);
            }

            $name = $request->input('name');
            $description = $request->input('description');

            $type->name = $name;
            $type->description = $description;

            $type->save();

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
