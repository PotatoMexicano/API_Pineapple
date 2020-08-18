<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{

    private $model;

    public function __construct(Cars $cars)
    {
        $this->middleware('auth');
        $this->model = $cars;
    }

    public function index(){
        $car = $this->model->all();
        return response()->json($car);
    }

    public function find($id){
        $car = $this->model->findOrFail($id);
        return response()->json($car);
    }

    public function store(Request $request){
        $car = $this->model->create($request->all());
        return response()->json($car);
    }
    public function update($id, Request $request){
        $car = $this->model->findOrFail($id)->update($request->all());

        return response()->json(200);
    }
    public function destroy($id){
        $car = $this->model->findOrFail($id)->delete();
        return response()->json(200);
    }
    public function showAll(Request $request){
        return response()->json($request);
    }
}
