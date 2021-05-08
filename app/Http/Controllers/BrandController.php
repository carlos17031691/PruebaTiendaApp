<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
Use Alert;

class BrandController extends Controller
{
    /**
     * Mustra el listado de las marcas registradas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::All();

        return view('brand.index', compact('brands'));
    }

    /**
     * Muestra el formulario para ingresar la información de la nueva marca.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Almacena la información de la nueva marca a registrar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $brand = new Brand();
        $brand->name = $request->get('name');
        if($file != null){
            $fileName = $file->getClientOriginalName();
            $path = Storage::disk('public')->putFile(
                'brands',
                $file
            );
            $brand->url_image= $path;
        }
        $brand->save();
        Alert::success('Marca', 'Marca registrada con exito');
        return redirect()->route('brands.index');
    }

    
    /**
     * Muestra el formulario para la edición de una marca existente
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brand.edit', compact('brand'));
    }

    /**
     * Actualiza la información de la marca.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file('image');
        $brand = Brand::find($id);
        $brand->name = $request->get('name');
        if($file != null){
            $pathOld = $brand->url_image;
            $fileName = $file->getClientOriginalName();
            $path = Storage::disk('public')->putFile(
                'brands',
                $file
            );
            $brand->url_image= $path;
            Storage::disk('public')->delete($pathOld);
        }
        $brand->save();
        Alert::success('Marca', 'Marca editada con exito');
        return redirect()->route('brands.index');
    }

    /**
     * Elimina (desactiva a nivel visual) la marca seleccionada
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        Alert::success('Marca', 'Marca eliminada con exito');
        return redirect()->route('brands.index');
    }
}
