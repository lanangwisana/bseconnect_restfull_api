<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RescheduleController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/reschedules";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray =  json_decode($content,true);
        
        $data = $contentArray['data'];
        // print_r($data);
        return view('reschedule.index', ['data'=>$data]);

    }

    public function store(Request $request)
    {
        $name = $request->name;
        $subject = $request->subject;
        $date = $request->date;
        $topic = $request->topic;
        $grade = $request->grade;
        $room = $request->room;
        $reason = $request->reason;

        $parameter = [
            'name'=>$name,
            'subject'=>$subject,
            'date'=>$date,
            'topic'=>$topic,
            'grade'=>$grade,
            'room'=>$room,
            'reason'=>$reason
        ];

        // Send data to API
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/reschedules";
        $response = $client->request('POST', $url, [
            'headers'=>['Content-type'=>'application/json'],
            'body'=>json_encode($parameter)
        ]);

        // Handle API response
        $content = $response->getBody()->getContents();
        $contentArray =  json_decode($content,true);
        if ($contentArray['status'] != true) {
            $error = $contentArray['data'];
            return redirect()->to('reschedule')->withErrors($error)->withInput();
        } else {
            echo "Sukses";
            return redirect()->to('reschedule')->with('success', 'Berhasil memasukkan data');
        }

    }

    public function show($id)
    {
        $response = Http::get('http://localhost:8000/api/reschedules/' . $id);

        if ($response->successful()) {
            $presensiData = json_decode($response->body(), true);
            return view('reschedule.show', ['presensi' => $presensiData]);
        } else {
            return abort(404, 'Presensi not found');
        }
    }

    public function edit(string $id)
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/reschedules/$id";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray =  json_decode($content,true);
        if($contentArray['status']!=true){
            $error = $contentArray['massage'];
            return redirect()->to('reschedule')->withErrors($error);
        } else{
            $data = $contentArray['data'];
            // print_r($data);
            return view('reschedule.edit', ['data'=>$data]);
        }
    }

    public function update(Request $request, $id)
    {
        
        $name = $request->name;
        $subject = $request->subject;
        $date = $request->date;
        $topic = $request->topic;
        $grade = $request->grade;
        $room = $request->room;
        $reason = $request->reason;

        $parameter = [
            'name'=>$name,
            'subject'=>$subject,
            'date'=>$date,
            'topic'=>$topic,
            'grade'=>$grade,
            'room'=>$room,
            'reason'=>$reason
        ];

        // Send data to API
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/reschedules/$id";
        $response = $client->request('PUT', $url, [
            'headers'=>['Content-type'=>'application/json'],
            'body'=>json_encode($parameter)
        ]);

        // Handle API response
        $content = $response->getBody()->getContents();
        $contentArray =  json_decode($content,true);
        if ($contentArray['status'] != true) {
            $error = $contentArray['data'];
            return redirect()->to('reschedule')->withErrors($error)->withInput();
        } else {
            echo "Sukses";
            return redirect()->to('reschedule')->with('success', 'Berhasil melakukan update data');
        }
    }

    public function destroy($id)
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/reschedules/$id";
        $response = $client->request('DELETE', $url);
        $content = $response->getBody()->getContents();
        $contentArray =  json_decode($content,true);
        if ($contentArray['status'] != true) {
            $error = $contentArray['data'];
            return redirect()->to('reschedule')->withErrors($error)->withInput();
        } else {
            echo "Sukses";
            return redirect()->to('reschedule')->with('success', 'Berhasil melakukan hapus data');
        }
    }
}
