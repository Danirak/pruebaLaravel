<?php

namespace App\Http\Controllers;

use Freshwork\ChileanBundle\Rut;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        return "usuarios";
    }

    public function  show($id){
        return "Mostrando detalles del usuario: {$id}";
    }

    public function validarRut($rut){
       if(Rut::parse($rut)->quiet()->validate()){
           return "rut correcto";
       }else{
           return "rut invalido";
       } ;
    }

}
