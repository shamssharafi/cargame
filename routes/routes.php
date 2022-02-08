<?php
// app/routes.php

// route to show the brand form
Route::get('brandform', function()
{
    return View::make('brandform');
});

// route to process the brand form
Route::post('brandform', function()
{
    return View::make('brandform');
    // process the form here

});
Route::post('brandform', function()
{

    // process the form here

    // create the validation rules ------------------------
    $rules = array(
        'name'             => 'required',                        // just a normal required validation
    );

    // do the validation ----------------------------------
    // validate against the inputs from our form
    $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('brandform')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // our brand has passed all tests!
        // let him enter the database

        // create the data for our brand
        $brand = new Brand;
        $brand->name     = Input::get('name');

        // save our brand
        $brand->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('brandform');

    }

});
