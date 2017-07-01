<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use App\Shop;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function Transaksi()
    {
        return view('admin.transaksi.index');
    }
    public function DetailTransaksi($id)
    {
        $order = Order::where('id',$id)->where('status','unpaid')->first();
        return view('admin.transaksi.detail')->with('order',$order);
    }

    public function KonfirmasiTransaksi (Request $request)
    {
        $file = $request->file('file');

        $input = $request->all();
        $order = Order::where('id',$input['order_id'])->where('status','unpaid')->first();
        $order->status = "paid";
        $order->save();

        $product = OrderProduct::where('order_id',$input['order_id'])->get();
        foreach ($product as $pdt)
        {

            $stok = Shop::find($pdt->id);
            $stok->stok-=$pdt->jumlah;
            $stok->save();
        }




        return Redirect('/admin/transaksi');

    }
}
