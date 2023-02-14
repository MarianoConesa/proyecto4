<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sanitarian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Http\Resources\SanitarianResource;

class SanitarianController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Sanitarian::class, 'sanitarian');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = $request->input('filter');
        $numElementos = $request->input('numElements');
        $registrosSanitarians =
            ($busqueda && array_key_exists('q', $busqueda))
            ? Sanitarian::where('name', 'email', 'like', '%' .$busqueda['q'] . '%')
                ->paginate($numElementos)
            : Sanitarian::paginate($numElementos);

            return SanitarianResource::collection($registrosSanitarians);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $sanitarian = json_decode($request->getContent(), true);

        $sanitarian = Sanitarian::create($sanitarian['data']['attributes']);

        return new SanitarianResource($sanitarian);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sanitarian  $sanitarian
     * @return \Illuminate\Http\Response
     */
    public function show(Sanitarian $sanitarian)
    {
        return new SanitarianResource($sanitarian);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sanitarian  $sanitarian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sanitarian $sanitarian)
    {

        $sanitarianData = json_decode($request->getContent(), true);
        $sanitarian->update($sanitarianData['data']['attributes']);

        return new SanitarianResource($sanitarian);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sanitarian  $sanitarian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sanitarian $sanitarian)
    {
        $sanitarian->delete();
    }
}
