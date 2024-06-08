<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reschedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RescheduleAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reschedule = Reschedule::orderBy('id', 'asc')->get();
        return response()->json([
            'status' => true,
            'massage' => 'Data berhasil dimuat',
            'data' => $reschedule
        ], 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datareschedule = new Reschedule();

        $rules = [
            'name'=>'required',
            'subject'=>'required',
            'date'=>'required|date',
            'topic'=>'required',
            'grade'=>'required',
            'room' =>'required',
            'reason' =>'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'massage'=>'Gagal memasukkan data',
                'data'=> $validator->errors()
            ]);
        }

        $datareschedule->name = $request->name;
        $datareschedule->subject = $request->subject;
        $datareschedule->date = $request->date;
        $datareschedule->topic = $request->topic;
        $datareschedule->grade = $request->grade;
        $datareschedule->room = $request->room;
        $datareschedule->reason = $request->reason;

        $post = $datareschedule->save();
        return response()->json([
            'status' => true,
            'massage' => 'Sukses memasukkan data'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reschedule = Reschedule::find($id);
        if($reschedule){
            return response()->json([
                'status' => true,
                'massage' => 'Data ditemukan',
                'data' => $reschedule
            ], 200);
        } else{
            return response()->json([
                'status' => false,
                'massage' => 'Data tidak ditemukan'
            ]);
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datareschedule = Reschedule::find($id);
        if(empty($datareschedule)){
            return response()->json([
                'status'=>false,
                'massage'=>'Data tidak ditemukan'
            ],404);
        }

        $rules = [
            'name'=>'required',
            'subject'=>'required',
            'date'=>'required|date',
            'topic'=>'required',
            'grade'=>'required',
            'room'=>'required',
            'reason'=>'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'massage'=>'Gagal melalukan update data',
                'data'=> $validator->errors()
            ]);
        }

        $datareschedule->name = $request->name;
        $datareschedule->subject = $request->subject;
        $datareschedule->date = $request->date;
        $datareschedule->topic = $request->topic;
        $datareschedule->grade = $request->grade;
        $datareschedule->room = $request->room;
        $datareschedule->reason = $request->reason;

        $post = $datareschedule->save();
        return response()->json([
            'status' => true,
            'massage' => 'Sukses melakukan update data'
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datareschedule = Reschedule::find($id);
        if(empty($datareschedule)){
            return response()->json([
                'status'=>false,
                'massage'=>'Data tidak ditemukan'
            ],404);
        }

        $post = $datareschedule->delete();
        return response()->json([
            'status' => true,
            'massage' => 'Sukses melakukan delete data'
        ], 200);
    }
}
