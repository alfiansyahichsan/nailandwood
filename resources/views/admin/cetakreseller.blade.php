<h1>Data Reseller</h1>
<table class="tg">
    <tr>
        <th class="tg-yw4l"><strong>ID</strong><br></th>
        <th class="tg-yw4l"><strong>NAMA RESELLER</strong><br></th>
        <th class="tg-yw4l"><strong>USERNAME</strong><br></th>
        <th class="tg-yw4l"><strong>ALAMAT</strong><br></th>
        <th class="tg-yw4l"><strong>TELEPON</strong></th>
        <th class="tg-yw4l"><strong>STATUS</strong></th>
    </tr>
    @foreach($reseller as $rsl)
        <tr>
            <!--data yang ditampilkan diambil dari database-->
            <td class="tg-yw4l">{{$rsl['id']}}</td>

            <td class="tg-yw4l">{{$rsl['nama']}}</td>
            <td class="tg-yw4l">{{$rsl['username']}}</td>
            <td class="tg-yw4l">{{$rsl['alamat']}}</td>
            <td class="tg-yw4l">{{$rsl['telepon']}}</td>
            <th class="tg-yw4l">aktif</th>


        </tr>
    @endforeach

    @foreach($pengguna as $pgg)
        <tr>
            <!--data yang ditampilkan diambil dari database-->
            <td class="tg-yw4l">{{$pgg['id']}}</td>

            <td class="tg-yw4l">{{$pgg['nama']}}</td>
            <td class="tg-yw4l">{{$pgg['username']}}</td>
            <td class="tg-yw4l">{{$pgg['alamat']}}</td>
            <td class="tg-yw4l">{{$pgg['telepon']}}</td>
            <th class="tg-yw4l">belum aktif</th>

        </tr>
    @endforeach
    
</table>


<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:9px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:9px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg .tg-yw4l{vertical-align:top}
</style>

