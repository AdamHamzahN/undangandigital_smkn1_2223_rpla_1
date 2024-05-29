<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <input type="hidden" name="id_pesanan" id="id_pesanan" value="{{ $pesanan->id_pesanan }}">
            <div class="form-group">
                <label for="id_tema">Tema</label>
                <select name="id_tema" id="id_tema" class="form-control">
                    @foreach ($temas as $tema)
                        <option value="{{ $tema->id_tema }}">{{ $tema->nama_tema }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_paket">Paket</label>
                <select name="id_paket" id="id_paket" class="form-control">
                    @foreach ($pakets as $paket)
                        <option value="{{ $paket->id_paket }}">{{ $paket->nama_paket }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

</div>
