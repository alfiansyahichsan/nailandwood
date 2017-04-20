<h1>Data Transaksi Pending</h1>
<table class="tg">
    <tr>
        <th class="tg-yw4l">Id<br></th>
        <th class="tg-yw4l">Waktu<br></th>
        <th class="tg-yw4l">Nama<br></th>
        <th class="tg-yw4l">Alamat<br></th>
        <th class="tg-yw4l">Telepon</th>
        <th class="tg-yw4l">Status</th>
        <th class="tg-yw4l">Total</th>
    </tr>

    @foreach(\App\Order::TransaksiPending() as $trp)
        <tr>
            <td class="tg-yw4l">{{$trp->id}}</td>
            <td class="tg-yw4l">{{date_format($trp->created_at,"d F Y")}}</td>
            <td class="tg-yw4l">{{$trp->nama}}</td>
            <td class="tg-yw4l">{{$trp->alamat }}</td>
            <td class="tg-yw4l">{{$trp->telepon}}</td>
            <td class="tg-yw4l">{{$trp->status}}</td>
            <td class="tg-yw4l">{{$trp->grandtotal}}</td>
        </tr>
    @endforeach
</table>


<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:9px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:9px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg .tg-yw4l{vertical-align:top}
</style>

