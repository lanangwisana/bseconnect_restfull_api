<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SubstituTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubstituteTeacherApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $substitute = SubstituTeacher::orderBy('id', 'asc')->get();
        return response()->json([
            'status' => true,
            'massage' => 'Data berhasil dimuat',
            'data' => $substitute
        ], 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datasubstitute = new SubstituTeacher;

        $rules = [
            'name'=>'required',
            'subject'=>'required',
            'date'=>'required|date',
            'grade'=>'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'massage'=>'Gagal memasukkan data',
                'data'=> $validator->errors()
            ]);
        }

        $datasubstitute->name = $request->name;
        $datasubstitute->subject = $request->subject;
        $datasubstitute->date = $request->date;
        $datasubstitute->grade = $request->grade;

        $post = $datasubstitute->save();
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
        $substitute = SubstituTeacher::find($id);
        if($substitute){
            return response()->json([
                'status' => true,
                'massage' => 'Data ditemukan',
                'data' => $substitute
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
        $datasubstitute = SubstituTeacher::find($id);
        if(empty($datasubstitute)){
            return response()->json([
                'status'=>false,
                'massage'=>'Data tidak ditemukan'
            ],404);
        }

        $rules = [
            'name'=>'required',
            'subject'=>'required',
            'date'=>'required|date',
            'grade'=>'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json([
                'status'=>false,
                'massage'=>'Gagal melalukan update data',
                'data'=> $validator->errors()
            ]);
        }

        $datasubstitute->name = $request->name;
        $datasubstitute->subject = $request->subject;
        $datasubstitute->date = $request->date;
        $datasubstitute->grade = $request->grade;

        $post = $datasubstitute->save();
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
        $datasubstitute = SubstituTeacher::find($id);
        if(empty($datasubstitute)){
            return response()->json([
                'status'=>false,
                'massage'=>'Data tidak ditemukan'
            ],404);
        }

        $post = $datasubstitute->delete();
        return response()->json([
            'status' => true,
            'massage' => 'Sukses melakukan delete data'
        ], 200);
    }
}
