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
    public function confirmprogress(Request $request, $id)
    {
        Order::where('id_order', $id)->update([
            'description_order' => $request->description_input,
            'status_order' => '1',
        ]);

        Alert::success('Success Message', 'Success Confirm');
        $data = DB::table('tb_order')->join('tb_produk', 'tb_order.id_product', '=', 'tb_produk.id')->join('users', 'tb_order.id_user', '=', 'users.id')->where('status_order', '0')->get();
        return redirect()->route('transaction.progress.superadmin')->with(['data']);

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
    public function cancelprogress(Request $request, $id)
    {
        Order::where('id_order', $id)->update([
            'description_order' => $request->description_input,
            'status_order' => '-1',
        ]);

        Alert::success('Success Message', 'Success Cancel');
        $data = DB::table('tb_order')->join('tb_produk', 'tb_order.id_product', '=', 'tb_produk.id')->join('users', 'tb_order.id_user', '=', 'users.id')->where('status_order', '0')->get();
        return redirect()->route('transaction.progress.superadmin')->with(['data']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexdelivery()
    {
        $data = DB::table('tb_order')->join('tb_produk', 'tb_order.id_product', '=', 'tb_produk.id')->join('users', 'tb_order.id_user', '=', 'users.id')->where('status_order', '1')->get();
        return view('superadmin.delivery', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirmdelivery(Request $request, $id)
    {
        Order::where('id_order', $id)->update([
            'description_order' => $request->description_input,
            'status_order' => '2',
        ]);

        Alert::success('Success Message', 'Success Cancel');
        $data = DB::table('tb_order')->join('tb_produk', 'tb_order.id_product', '=', 'tb_produk.id')->join('users', 'tb_order.id_user', '=', 'users.id')->where('status_order', '1')->get();
        return redirect()->route('transaction.delivery.superadmin')->with(['data']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function canceldelivery(Request $request, $id)
    {
        Order::where('id_order', $id)->update([
            'description_order' => $request->description_input,
            'status_order' => '-2',
        ]);

        Alert::success('Success Message', 'Success Cancel');
        $data = DB::table('tb_order')->join('tb_produk', 'tb_order.id_product', '=', 'tb_produk.id')->join('users', 'tb_order.id_user', '=', 'users.id')->where('status_order', '1')->get();
        return redirect()->route('transaction.delivery.superadmin')->with(['data']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function indexsuccess()
    {
        $data = DB::table('tb_order')->join('tb_produk', 'tb_order.id_product', '=', 'tb_produk.id')->join('users', 'tb_order.id_user', '=', 'users.id')->where('status_order', '2')->get();
        return view('superadmin.success', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function indexfailed()
    {
        $data = DB::table('tb_order')->join('tb_produk', 'tb_order.id_product', '=', 'tb_produk.id')->join('users', 'tb_order.id_user', '=', 'users.id')->where('status_order', '<', '0')->get();
        return view('superadmin.failed', compact('data'));
    }
}
