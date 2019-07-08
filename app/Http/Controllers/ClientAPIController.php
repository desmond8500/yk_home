<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Resources\ClientCollection;
use App\Http\Resources\ClientResource;
 
class ClientAPIController extends Controller
{
    public function index()
    {
        return new ClientCollection(Client::paginate());
    }
 
    public function show(Client $client)
    {
        return new ClientResource($client->load([]));
    }

    public function store(Request $request)
    {
        return new ClientResource(Client::create($request->all()));
    }

    public function update(Request $request, Client $client)
    {
        $client->update($request->all());

        return new ClientResource($client);
    }

    public function destroy(Request $request, Client $client)
    {
        $client->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
