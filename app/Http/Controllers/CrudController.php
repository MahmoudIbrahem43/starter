<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Resource_;
use phpDocumentor\Reflection\Types\This;

class CrudController extends Controller
{


    public function __construct()
    {

    }

    public function getOffers()
    {
        return Offer::select('id', 'name')->get();
    }


//    public function store()
//    {
//        Offer::create(
//            [
//                'name' => 'offer2',
//                'price' => '500',
//                'detalies' => 'offer_detalies2',
//            ]
//        );
//    }


    public function create()
    {
        return view('offers.create');
    }


    public function store(Request $request )
    {

        $rules = $this->getRules();
        $messages = $this->getMessages();
         $validator = Validator::make($request->all() ,$rules, $messages);
         if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
         }

        //insert data in database
        Offer::create([
            'name' => $request->name,
            'price' =>  $request->price,
            'detalies' => $request->detalies,
        ]);



        redirect()->back()->with(['saved'=>'saved sucessfuly']);
    }

    public function getRules(){
        return $rules=[
            'name' =>'required|max:100|unique:offers,name',
            'price' =>'required|numeric',
            'detalies' =>'required',
        ];
    }

    public function getMessages(){
         return $messages=[
             'name.required' =>'name is require ',
             'price.numeric' =>'price mush be numeric',
             'detalies.unique' =>'detalies mush be 100 charachter',
         ];
    }



}
