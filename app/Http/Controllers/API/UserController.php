<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');
        $busquedaArray = [
            'name',
            'email',
        ];
        $busquedaFiltroQ = $request->input('filter');

        $registroUsuario = User::query();

        if ($busquedaFiltroQ && array_key_exists('q', $busquedaFiltroQ)) {

           $registroUsuario = User::where('name', 'like', '%' .$busquedaFiltroQ['q'] . '%')
            ->orWhere('email', 'like', '%' .$busquedaFiltroQ['q'] . '%');

        }else {
            $registroUsuario = User::query();
        }

        return UserResource::collection($registroUsuario->paginate($numElementos));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = json_decode($request->getContent(), true);

        $user = User::create($user['data']['attributes']);

        return new UserResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $userData = json_decode($request->getContent(), true);
        $user->update($userData['data']['attributes']);

        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
}
