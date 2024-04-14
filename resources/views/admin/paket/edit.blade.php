<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <input type="hidden" name="id_paket" id="id_paket" value="{{$paket->id_paket}}">
            
            <label for="nama_paket"><h3>Nama Paket</h3></label>
            <input class="form-control tambah-input" type="text" name="nama_paket" id="nama_paket" value="{{$paket->nama_paket}}">

            <label for="detail_paket"><h3>Detail Paket</h3></label>
            <input class="form-control tambah-input" type="text" name="detail_paket" id="detail_paket" value="{{$paket->detail_paket}}">

            <label for="harga"><h3>Harga (Rp.)</h3></label>
            <input class="form-control tambah-input" type="number" name="harga" id="harga" value="{{$paket->harga}}">
        </div>
    </div>

</div>
