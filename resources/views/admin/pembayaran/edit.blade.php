<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <input type="hidden" name="id_pembayaran" id="id_pembayaran" value="{{ $dataPembayaran->id_pembayaran }}">
            <p>ID Pembayaran: {{ $dataPembayaran->id_pembayaran }}</p>
            <p>ID Pesanan: {{ $dataPembayaran->id_pesanan }}</p>
            <p>Harga: {{ $dataPembayaran->harga }}</p>
            <p>Nama Pemesan: {{ $dataPembayaran->nama_pemesan }}</p>
            <label for="status_pembayaran" class="form-label">
                <h6>Status Pembayaran</h6>
            </label>
            <div class="d-flex align-items-center">
                <select name="status_pembayaran" id="status_pembayaran" class="form-control">
                    <option value="belum lunas"
                        {{ $dataPembayaran->status_pembayaran == 'belum lunas' ? 'selected' : '' }}>
                        Belum Lunas</option>
                    <option value="lunas" {{ $dataPembayaran->status_pembayaran == 'lunas' ? 'selected' : '' }}>Lunas
                    </option>
                </select>
            </div>
        </div>
    </div>
