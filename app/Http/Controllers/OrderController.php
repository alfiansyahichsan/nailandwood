<?php

namespace App\Http\Controllers;

use App\Konfirmasi;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Session;

class OrderController extends Controller
{
    public function GetOrder($notelpon)
    {
        $order = Order::where('telepon',$notelpon)->where('status','unpaid')->first();
        if (count($order)>0)
        {
            return view('formtransaksi')->with('order',$order);
        }
        else{
            return redirect('/');
        }

    }

    public function getDelete($notelpon){

        $cart = Order::where('telepon',$notelpon)->where('status','unpaid')->delete();

        return redirect('/');
    }

    public function KonfirmasiPembayaran (Request $request)
    {
        $file = $request->file('file');

        $input = $request->all();

        $konfirmasi = new Konfirmasi();


        if($request->file('file')){
            $file = $this->uploadfile($request->file('file'), 'bukti');
            $konfirmasi->bukti = $file[0];

        }

        $konfirmasi->order_id = $input['order_id'];
        $konfirmasi->tanggal = $input['tanggalbayar'];
        $konfirmasi->bank=$input['bank'];
        $konfirmasi->metode=$input['metode'];
        $konfirmasi->nama=$input['namapengirim'];
        $konfirmasi->telepon=$input['telepon'];
        $konfirmasi->status="Pending";
        $konfirmasi->transfer=$input['jumlah'];

        $konfirmasi->save();



        return Redirect::back();

    }


    public function uploadfile($document,$lokasi){
        $file = array('image' => $document);
        $rules = array('image' => 'required',);
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            return $validator;
        }
        else {

            if ($document->isValid()) {
                $destinationPath = "file/".$lokasi."/"; // upload path
                $extension = $document->getClientOriginalExtension();
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                $document->move($destinationPath, $fileName); // uploading file to given path
                // sending back with message
                Session::flash('success', 'Upload successfully');
                $report[0] = $fileName;
                return $report;
            }
            else {
                // sending back with error message.
                Session::flash('error', 'uploaded file is not valid');
                $report[0] = "Ada error";
                return $report;
            }
        }
    }

    public function CariOrder(Request $request)
    {
        $input = $request->all();


        if ($input == null)
        {
            return redirect()->back()->withErrors(['telepon' => 'nomor tidak ditemukan']);
        }

        return redirect('order/'.$input['telepon']);

    }
}
