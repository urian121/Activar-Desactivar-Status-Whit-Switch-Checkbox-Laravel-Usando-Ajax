<?php

namespace App\Http\Controllers;
use App\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{

    public function noticiasHome()
    {
        $noticias = Noticias::orderBy('id', 'DESC')->get();
        return view('inicio', compact('noticias'));
    }

public function UpdateStatusNoti(Request $request){ 

    $NotiUpdate = Noticias::findOrFail($request->id)->update(['estatus' => $request->estatus]); 

    if($request->estatus == 0)  {
        $newStatus = '<br> <button type="button" class="btn btn-sm btn-danger">Inactiva</button>';
    }else{
        $newStatus ='<br> <button type="button" class="btn btn-sm btn-success">Activa</button>';
    }

    return response()->json(['var'=>''.$newStatus.'']);
    }

    
}
