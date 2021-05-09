<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
Use Alert;

class ProductController extends Controller
{
    /**
     * Mustra el listado de los productos registrados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::All();
        return view('product.index', compact('products'));
    }

    /**
     * Muestra el formulario para ingresar la información del nuevo producto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::All();
        if(count($brands) < 1){
            Alert::warning('Producto', 'No existen marcas registradas, por favor registre al menos una marca');
            return redirect()->route('products.index');
        }
        return view('product.create', compact('brands'));
    }

    /**
     * Almacena la información del nuevo producto a registrar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $product = new product();
        $product->name = $request->get('name');
        $product->brand_id = $request->get('brand_id');
        $product->size = $request->get('size');
        $product->observations = $request->get('observations');
        $product->stock = $request->get('stock');
        $product->boarding_date = $request->get('boarding_date');
        if($file != null){
            $fileName = $file->getClientOriginalName();
            $path = Storage::disk('public')->putFile(
                'products',
                $file
            );
            $product->url_image= $path;
        }
        $product->save();
        Alert::success('Producto', 'Producto registrado con exito');
        return redirect()->route('products.index');
    }

    /**
     * Muestra el formulario para la edición de un nuevo producto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $brands = Brand::All();
        return view('product.edit', compact('product','brands'));
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
        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->brand_id = $request->get('brand_id');
        $product->size = $request->get('size');
        $product->observations = $request->get('observations');
        $product->stock = $request->get('stock');
        $product->boarding_date = $request->get('boarding_date');
        if($file != null){
            $pathOld = $product->url_image;
            $fileName = $file->getClientOriginalName();
            $path = Storage::disk('public')->putFile(
                'products',
                $file
            );
            $product->url_image= $path;
            Storage::disk('public')->delete($pathOld);
        }
        $product->save();
        Alert::success('Producto', 'producto editado con exito');
        return redirect()->route('products.index');
    }

    /**
     * Elimina (desactiva a nivel visual) el producto seleccionado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Alert::success('Producto', 'Producto eliminado con exito');
        return redirect()->route('products.index');
    }
}
