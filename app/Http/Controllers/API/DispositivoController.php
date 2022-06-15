<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bodega;
use App\Models\Dispositivo;
use App\Models\Marca;
use App\Models\Modelo;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispositivos_bodega = Dispositivo::join('modelos','modelos.id','=','dispositivos.modelo_id')
        ->join('marcas','marcas.id','=','modelos.marca_id')
        ->join('bodegas','bodegas.id','=','dispositivos.bodega_id')
        ->select("dispositivos.id","dispositivos.nombre_dispositivo","dispositivos.bodega_id","marcas.nombre_marca","modelos.nombre_modelo","bodegas.nombre_bodega")
        ->get();
        return $dispositivos_bodega;
    }

    public function mostrarDispositivosBodega($id)
    {
        $dispositivos_bodega = Dispositivo::join('modelos','modelos.id','=','dispositivos.modelo_id')
        ->join('marcas','marcas.id','=','modelos.marca_id')
        ->join('bodegas','bodegas.id','=','dispositivos.bodega_id')
        ->select("dispositivos.id","dispositivos.nombre_dispositivo","dispositivos.bodega_id","marcas.nombre_marca","modelos.nombre_modelo","bodegas.nombre_bodega")
        ->where('bodegas.id', '=',$id)
        ->get();
        return $dispositivos_bodega;
    }

    public function mostrarDispositivosBodegaMarca($id_bodega,$id_marca)
    {
        $dispositivos_bodega = Dispositivo::join('modelos','modelos.id','=','dispositivos.modelo_id')
        ->join('marcas','marcas.id','=','modelos.marca_id')
        ->join('bodegas','bodegas.id','=','dispositivos.bodega_id')
        ->select("dispositivos.id","dispositivos.nombre_dispositivo","dispositivos.bodega_id","marcas.nombre_marca","modelos.nombre_modelo","bodegas.nombre_bodega")
        ->where('bodegas.id', '=',$id_bodega)
        ->where('marcas.id', '=', $id_marca)
        ->get();
        return $dispositivos_bodega;
    }

    public function mostrarDispositivosModelo($id_bodega,$id_modelo)
    {
        $dispositivos_bodega = Dispositivo::join('modelos','modelos.id','=','dispositivos.modelo_id')
        ->join('marcas','marcas.id','=','modelos.marca_id')
        ->join('bodegas','bodegas.id','=','dispositivos.bodega_id')
        ->select("dispositivos.id","dispositivos.nombre_dispositivo","dispositivos.bodega_id","marcas.nombre_marca","modelos.nombre_modelo","bodegas.nombre_bodega")
        ->where('bodegas.id', '=',$id_bodega)
        ->where('modelos.id', '=', $id_modelo)
        ->get();
        return $dispositivos_bodega;
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

        $dispositivo = new Dispositivo();
        $dispositivo->nombre_dispositivo = $request->nombre_dispositivo;    
        $dispositivo->modelo_id = $request->modelo_id;    
        $dispositivo->bodega_id = $request->bodega_id;              
        $dispositivo->save();   
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
