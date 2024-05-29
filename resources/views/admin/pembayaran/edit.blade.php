<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <input type="hidden" name="id_pembayaran" id="id_pembayaran" value="{{ $pembayaran->id_pembayaran }}">
            @foreach ($dataPembayaran as $pembayaran)
                @if ($pembayaran->id_pembayaran == $pembayaran->id_pembayaran)
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="hidden" name="id_pembayaran" id="id_pembayaran"
                                value="{{ $pembayaran->id_pembayaran }}">
                            <p>ID Pembayaran: {{ $pembayaran->id_pembayaran }}</p>
                            <p>ID Pesanan: {{ $pembayaran->id_pesanan }}</p>
                            <p>Harga: {{ $pembayaran->harga }}</p>
                            <p>Nama Pemesan: {{ $pembayaran->nama_pemesan }}</p>
                        </div>
                    </div>
                @endif
            @endforeach

            <label for="status_pembayaran" class="form-label">
                <h6>Status Pembayaran</h6>
            </label>
            <div class="d-flex align-items-center">
                <select name="status_pembayaran" id="status_pembayaran" class="form-control">
                    <option value="belum lunas"
                        {{ $pembayaran->status_pembayaran == 'belum lunas' ? 'selected' : '' }}>
                        Belum Lunas</option>
                    <option value="lunas" {{ $pembayaran->status_pembayaran == 'lunas' ? 'selected' : '' }}>Lunas
                    </option>
                </select>
            </div>
        </div>
    </div>
