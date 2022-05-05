<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class SuperadminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexprogress()
    {
        $data = DB::table('tb_order')->join('tb_produk', 'tb_order.id_product', '=', 'tb_produk.id')->join('users', 'tb_order.id_user', '=', 'users.id')->where('status_order', '0')->get();
        return view('superadmin.progress', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmprogress(Request $request)
    {
        // $url = "https://messages-sandbox.nexmo.com/v0.1/messages";
        // $params = ["to" => ["type" => "whatsapp", "number" => $request->to_input],
        //     "from" => ["type" => "whatsapp", "number" => "81272719546"],
        //     "message" => [
        //         "content" => [
        //             "type" => "text",
        //             "text" => $request->description_input
        //         ]
        //     ]
        // ];
        // $headers = ["Authorization" => "Basic " . base64_encode(env('NEXMO_API_KEY') . ":" . env('NEXMO_API_SECRET'))];

        // $client = new \GuzzleHttp\Client();
        // $response = $client->request('POST', $url, ["headers" => $headers, "json" => $params]);
        // $datafinal = $response->getBody();
        // Log::Info($datafinal);


        // Alert::success('Success Message', 'Success Confirm');
        // $data = DB::table('tb_order')->join('tb_produk', 'tb_order.id_product', '=', 'tb_produk.id')->join('users', 'tb_order.id_user', '=', 'users.id')->where('status_order', '0')->get();
        // return redirect()->route('transaction.progress.superadmin')->with(['data']);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
