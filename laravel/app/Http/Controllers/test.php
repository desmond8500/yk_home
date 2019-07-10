<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller{

    public function index()    {
        $client = array(
          'prenom' => 'Mbaye',
          'nom' => 'Sène',
          'ci' => '1618197300442 ',
          'delivre' => '19 Juin 2006 à Bargny',
          'telephone' => '',
          'prix' => '110000',
          'local1' => 'A14',
          'arrivee' => '',
          'depart' => '',
          'contrat' => '24000',
          'titre' => 'M.',
          'image' => '',
          'garantie' => ''
        );

        $client['prix'] = number_format($client['prix']);

        $today = date("m-Y");
        $date = date("d-m-Y");
        $mois = array('juin');

        return view('loc.recu',compact('client','today','date','mois'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
