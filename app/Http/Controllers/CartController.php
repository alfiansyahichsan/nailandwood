<?php

namespace App\Http\Controllers;


use App\Cart;
//use Illuminate\Contracts\Session\Session;
use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use Session;
use URL;
use Validator;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{


    public function TambahCart ()
    {
//        $ip = Session::getId();;
//        echo "aaaaaa";
//        print_r($ip);
//        die;

        //echo Input::get('book')." ".Input::get('amount');
//        print_r(Input::all());
//        die;

        $rules=array(
            'amount'=>'required|numeric'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::route('index')->with('error','The book could not added to your cart!');
        }

        $member_id = "";



        $id_product = Input::get('book');
        $amount = Input::get('amount');

        $product = \App\Shop::find($id_product);
//        dd($product);
//        die();
        $total = $amount*$product->price;



        $count = \App\Cart::where('id_product','=',$id_product)->where('username','=',$member_id)->count();

        if($count>=1){

            $update = Cart::where('session',Session::getId())->where('id_product',$id_product)->first();
//            print_r($update);
//            die;
            if ($update!=null)
            {
                $update->jumlah = $update->jumlah+$amount;
                $update->total = $update->jumlah*$product->price;
                $update->save();

                return Redirect::back();
            }

        }

        \App\Cart::create(
            array(
                'username'=>$member_id,
                'session'=> Session::getId(),
                'id_product'=>$id_product,
                'jumlah'=>$amount,
                'total'=>$total
            ));

        return Redirect::back()->withErrors(['berhasil'=>'1']);

    }

    public function getDelete($idproduct){

        $cart = Cart::where('session',Session::getId())->where('id_product',$idproduct)->delete();

        return redirect()->back();
    }

    public static function getSession()
    {
        $session = Session::getId();

        return $session;
    }

    public function ListCart()
    {
        $cart = Cart::where('session',Session::getId())->get();

        return view('viewcart')->with('cart',$cart);
    }

    public function Formdata()
    {

        if(\Illuminate\Support\Facades\Auth::check())
        {
            $cart = Cart::where('session',Session::getId())->sum('total');;
            $order = new Order();

            $order->session = Session::getId();
            $order->nama = Auth::user()->nama;
            $order->username = Auth::user()->username;
            $order->alamat = Auth::user()->alamat;
            $order->kota = " ";
            $order->kodepos = " ";
            $order->email = Auth::user()->email;
            $order->telepon = Auth::user()->telepon;
            $order->total = $cart;
            $order->ongkir = 17000;
            $order->grandtotal = $order->total+$order->ongkir ;
            $order->status = "unpaid";
            $order->save();

            $id = Order::where('session',Session::getId())->where('status','unpaid')->first();
            $cart = Cart::where('session',Session::getId())->get();
            foreach ($cart as $crt)
            {
                $amir = new OrderProduct();
                $amir->order_id = $id->id;
                $amir->id_product = $crt->id_product;
                $amir->jumlah = $crt->jumlah;
                $amir->harga = $crt->total/$crt->jumlah;
                $amir->total = $crt->total;
                $amir->save();
            }
            Cart::where('session',Session::getId())->delete();
            return redirect('order/'.$id->telepon);
        }
        else
        {
            return view('pages.formdata');
        }
    }

    public function BuatOrder(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required|max:45',
            'kodepos' => 'required|numeric',
            'email' => 'required|email',
            'telepon' => 'required|numeric',
        ]);

        $input = $request->all();
        $transaksi = Order::where('telepon',$input['telepon'])->where('status','unpaid')->count();;
        if ($transaksi>0)
        {
            return redirect('order/'.$input['telepon']);
        }
        else
        {
            $cart = Cart::where('session',Session::getId())->sum('total');;
            $order = new Order();

            $order->session = Session::getId();
            $order->nama = $input['nama'];
            $order->alamat = $input['alamat'];
            $order->kota = $input['kota'];
            $order->kodepos = $input['kodepos'];
            $order->email = $input['email'];
            $order->telepon = $input['telepon'];
            $order->total = $cart;
            $order->ongkir = 17000;
            $order->grandtotal = $order->total+$order->ongkir ;
            $order->status = "unpaid";
            $order->save();

            $id = Order::where('session',Session::getId())->where('status','unpaid')->first();
            $cart = Cart::where('session',Session::getId())->get();
            foreach ($cart as $crt)
            {
                $amir = new OrderProduct();
                $amir->order_id = $id->id;
                $amir->id_product = $crt->id_product;
                $amir->jumlah = $crt->jumlah;
                $amir->harga = $crt->total/$crt->jumlah;
                $amir->total = $crt->total;
                $amir->save();
            }
            Cart::where('session',Session::getId())->delete();


            return redirect('order/'.$input['telepon']);
        }



    }
}
