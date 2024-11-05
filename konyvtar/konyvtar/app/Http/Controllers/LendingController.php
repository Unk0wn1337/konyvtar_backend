<?php

namespace App\Http\Controllers;

use App\Models\Lending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LendingController extends Controller
{

    //alap függvények
    public function index()
    {
        return Lending::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new Lending();
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user_id, $copy_id, $start)
    {
        $lending = Lending::where('user_id', $user_id)
        -> where('copy_id', $copy_id)
        -> where('start', $start)
        -> get();
        return $lending[0];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user_id, $copy_id, $start)
    {
        $record = $this->show($user_id, $copy_id, $start);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user_id,$copy_id,$start)
    {
        $this->show($user_id,$copy_id,$start)->delete();
    }

    //egyéb lekérdezések 
    public function dateSpecific(){
        return Lending::with('specificDate')
        ->where('start','=','2011-04-13')
        ->get();
       
    }
    public function copySpecific($copy_id){
        return Lending::with('copies')
        ->where('copy_id','=',$copy_id)
        ->get();
       
    }



}
