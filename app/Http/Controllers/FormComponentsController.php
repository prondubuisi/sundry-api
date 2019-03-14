<?php

namespace App\Http\Controllers;

use App\FormComponent;
use Illuminate\Http\Request;
use App\Http\Requests\JobListingStoreRequest;
use App\Http\Requests\FormComponentStoreRequest;

class FormComponentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listAllComponents()
    {
        $formComponent = FormComponent::latest()->get();
        return response()->json($formComponent,200);
        
    }

    public function listSingleComponent(FormComponent $id) {
       
        $listing = $id;
        
        return response()->json($listing, 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormComponentStoreRequest $request)
    {
        $validator = $request->validator;
        if($validator->fails()){

            return response()->json($validator->errors(), 400);
        }

        $request->all();
        $component = FormComponent::create($request->all());
       
        return response()->json($component, 200);
    }

    public function update(FormComponentStoreRequest $request, FormComponent $id)
    {
        $formComponent = $id;
        $validator = $request->validator;
        if($validator->fails()){

            return response()->json($validator->errors(), 400);
        }

        $request->all();
        $formComponent->update($request->all());
       
        return response()->json( $formComponent, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobListings  $jobListings
     * @return \Illuminate\Http\Response
     */
    public function softDelete(FormComponent $id)
    {
        $formComponent = $id;
        $formComponent->delete = 1;
        $formComponent->save();
        return response()->json( 'resource marked for deletion', 200);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormComponent  $formComponent
     * @return \Illuminate\Http\Response
     */
    public function show(FormComponent $formComponent)
    {
        return "hello";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormComponent  $formComponent
     * @return \Illuminate\Http\Response
     */
    public function edit(FormComponent $formComponent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormComponent  $formComponent
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormComponent  $formComponent
     * @return \Illuminate\Http\Response
     */
    public function delete(FormComponent $formComponent)
    {
        //
    }
}
