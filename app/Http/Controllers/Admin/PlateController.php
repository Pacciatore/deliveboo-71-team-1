<?php

namespace App\Http\Controllers\Admin;

use App\Plate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $plates = Plate::all();
        return view('admin.plates.index', compact('plates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.plates.create');
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
        $this->validatePlate($request);

        $form_data = $request->all();

        if (array_key_exists('image', $form_data)) {
            $imgPath = Storage::put('plate_images', $form_data['image']);
            $form_data['imgPath'] = $imgPath;
        }


        $plate = new Plate();
        $plate->fill($form_data);
        $plate->save();

        return redirect()->route('admin.plates.show', $plate->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function show(Plate $plate)
    {
        //
        return view('admin.plates.show', compact('plate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function edit(Plate $plate)
    {
        //
        return view('admin.plates.edit', compact('plate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plate $plate)
    {
        //
        $this->validatePlate($request);

        $form_data = $request->all();

        if (array_key_exists('image', $form_data)) {

            if ($plate->imgPath) {
                Storage::delete($plate->imgPath);
            }
            $imgPath = Storage::put('plate_images', $form_data['image']);
            $form_data['imgPath'] = $imgPath;
        }

        $plate->update($form_data);

        return redirect()->route('admin.plates.show', $plate->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plate  $plate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plate $plate)
    {
        //
        $plate->delete();

        return redirect()->route('admin.plates.index');
    }

    private function validatePlate(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
            'description' => 'min:5',
            'imgPath' => 'nullable',
            'price' => 'required|min:0|max:99.99',
            'available' => 'required'
        ], [
            'required' => ':attribute is mandatory',
            'min' => ':attribute should be at least :min chars',
            'max' => ':attribute should have max length :max chars',
        ]);
    }
}
