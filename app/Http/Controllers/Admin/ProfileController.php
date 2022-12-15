<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


use App\User;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
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
        $user = Auth::user();
        return view('auth.edit', compact('user'));
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
        $this->validateProfile($request->all());

        $form_data = $request->all();

        if (array_key_exists('image', $form_data)) {

            if (Auth::user()->imgPath) {
                Storage::delete(Auth::user()->imgPath);
            }
            $imgPath = Storage::put('uploads', $form_data['image']);
            $form_data['imgPath'] = $imgPath;
        }

        if ($form_data['activity_name'] != Auth::user()->activity_name) {
            $form_data['slug'] = $this->getSlug($form_data['activity_name']);
        }

        $user = User::query()->findOrFail($id);
        $user->update($form_data);

        return redirect()->route('admin.profile.index', Auth::user()->id);
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

    private function validateProfile($request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'activity_name' => ['required', 'string', 'max:50'],
            'type' => ['string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:80'],
            'vat_number' => ['required', 'numeric', 'digits:11'],
            'imgPath' => ['string', 'max:150'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    private function getSlug($activity_name)
    {
        $slug = Str::slug($activity_name);
        $slug_base = $slug;

        $existingUser = User::where('slug', $slug)->first();
        $counter = 1;
        while ($existingUser) {
            $slug = $slug_base . '_' . $counter;
            $counter++;
            $existingUser = User::where('slug', $slug)->first();
        }
        return $slug;
    }
}
