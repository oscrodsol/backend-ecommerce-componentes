<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    
    const ROLE_SUPER_ADMIN = 21;
    const ROLE_ADMIN = 11;

    public function addSuperAdminRoleToUser($id) {
        try {
            $user = User::find($id);

            $user->roles()->attach(self::ROLE_SUPER_ADMIN);

            return response()->json([
                'success' => true,
                'message' => 'Super admin role added to user',
            ]);

        } catch (\Exception $exception) {
            Log::error('Error adding super admin role to User: ' . $exception->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error adding super admin role to User'
            ], 500);
        }
    }

    public function addAdminRoleToUser($id) {
        try {
            $user = User::find($id);

            $user->roles()->attach(self::ROLE_ADMIN);

            return response()->json([
                'success' => true,
                'message' => 'Admin role added to user',
            ]);

        } catch (\Exception $exception) {
            Log::error('Error adding admin role to User: ' . $exception->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error adding admin role to User'
            ], 500);
        }
    }

    public function removeSuperAdminRoleToUser($id) {
        try {
            $user = User::find($id);

            $user->roles()->detach(self::ROLE_SUPER_ADMIN);

            return response()->json([
                'success' => true,
                'message' => 'Super admin role removed from user',
            ]);

        } catch (\Exception $exception) {
            Log::error('Error removing super admin role from User: ' . $exception->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error removing super admin role from User'
            ], 500);
        }
    }

    public function removeAdminRoleToUser($id) {
        try {
            $user = User::find($id);

            $user->roles()->detach(self::ROLE_ADMIN);

            return response()->json([
                'success' => true,
                'message' => 'Admin role removed from user',
            ]);

        } catch (\Exception $exception) {
            Log::error('Error removing admin role from User: ' . $exception->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error removing admin role from User'
            ], 500);
        }
    }

    public function getAllUsers() {
        try {
             $users = User::query()->get();

            return response()->json([
                'success' => true,
                'message' => 'Users retrieved successfully',
                'data' => $users
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving ' . $exception->getMessage()
            ]);
        }
    }

    public function deleteUserById($id)
    {
        try {
            Log::info('Delete user with the id ' . $id);

            $user = User::find($id);

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => "The user doesn't exist"
                ], 200);
            }

            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'user ' . $id . ' deleted successfully'
            ], 200);
        } catch (\Exception $exception) {
            Log::error('Updating user ' . $exception->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error deleting user'
            ], 500);
        }
    } 
}
