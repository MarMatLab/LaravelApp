<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    //

    public function add(Request $request)
    {
        $items=new People();
        $items->name = $request->name;
        $items->surname = $request->surname;
        $items->phone_number = $request->phone_number;
        $items->street = $request->street;
        $items->city = $request->city;
        $items->country = $request->country;
        $items->house_number = $request->house_number;
        $items->flat_number = $request->flat_number;

        $items->save();

        return response()-> json('Successfully added a person');
    }

    public function edit(Request $request)
    {
        $items=People::findorfail($request->id);

        $items->name = $request->name;
        $items->surname = $request->surname;
        $items->phone_number = $request->phone_number;
        $items->street = $request->street;
        $items->city = $request->city;
        $items->country = $request->country;
        $items->house_number = $request->house_number;
        $items->flat_number = $request->flat_number;

        $items->update();

        return response()-> json('Successfully modified a person');
    }

    public function delete(Request $request)
    {
        $items=People::findorfail($request->id)->delete();

        return response()-> json('Successfully deleted a person');
    }
    public function getPerson($id)
    {
        $people = People::find($id);
        return response()->json(['person'=>$people]);
    }

    public function getPeople()
    {
        $items=People::all();
        return response()->json($items);
    }
}
