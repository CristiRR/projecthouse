<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        //Eloquent
        $users = User::when(
            request()->has('username'),
            function (Builder $query): void{
            $query->where('username', 'like', '%'.request ()->input('username').'%')->get();
        }
        )->when(
            request()->has('email'),
        function (Builder $query): void{
            $query->where('email', 'like', '%'.request ()->input('email').'%')->get();
        })
        ->paginate(request()->per_page);
         
       
        //query builder
        //$user =DB::table('users')->get();

        return UserResourde::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Str::random(8); // Le colocamos una contraseña por defecto

        $user = User::create($data);
        
        return response()->json(UserResource::make($user), 201);
    }
    public function update(): void{

    }
}
