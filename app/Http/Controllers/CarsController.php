<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function brands(){
     $cats = ['Benz' , 'BMW', 'Hyundai'];
     return view('cars.category',compact('cats'));
    }

    public function classes($category_id){
        
        $cats = ['Benz' , 'BMW', 'Hyundai'];
        $benz=['2011','2012','2019'];
        $bmw=['2012','2015','2019'];
        $hy=['2013','2017','2019'];


        return view('cars.model',compact('cats','category_id','benz','bmw','hy'));
       }
       public function order($car_id, $name){
           $price=rand(10000, 50000); 
           
         return view('cars.order',compact('car_id','name','price'));
       }}