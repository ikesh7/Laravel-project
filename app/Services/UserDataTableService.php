<?php

namespace App\Services;

use App\Models\User;
use Yajra\DataTables\DataTables;

class UserDataTableService
{

    /**
     * fetch all data from users table in datatable format
     */
    public function fetchData()
    {
        $query = User::query();

        return DataTables::of($query)->addColumn('action', function ($user) {

            return "<form action='" . route('users.destroy', $user->id) . "' id='deleteuser" . $user->id . "' method='POST'>
                        <a href='" . route('users.edit', ['user' => $user->id]) . "'><i class='fa fa-edit' title='edit'></i></a>
                        <input type='hidden' name='_method' value='DELETE'>
                        " . csrf_field() . "
                        <a href='#'><i class='fa fa-trash' title='delete' onclick='deleteUser(event," . $user->id . ")'></i></a>
                    </form>";
        })
            ->addColumn('name', function ($user) {
                return $user->first_name . ' ' . $user->last_name;
            })
            ->toJson();
    }
}
