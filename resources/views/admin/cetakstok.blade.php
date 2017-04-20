<h1>Data Stok</h1>
<table class="tg">
    <tr>
        <th class="tg-yw4l">Kode Produk<br></th>
        <th class="tg-yw4l">Nama Produk<br></th>
        <th class="tg-yw4l">Jumlah</th>
    </tr>
    @foreach(\App\Product::SemuaProduk() as $stok)
    <tr>
        <td class="tg-yw4l">{{$stok->id_product}}</td>
        <td class="tg-yw4l">{{$stok->nama }}</td>
        <td class="tg-yw4l">{{\App\Stok::JumlahStok($stok->id_product)}}</td>
    </tr>
    @endforeach
</table>


<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:9px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:9px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg .tg-yw4l{vertical-align:top}
</style>

