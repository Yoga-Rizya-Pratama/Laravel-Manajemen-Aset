 <!-- Modal -->
 <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                  <form action="/asset/edit/proses/{{$db->id}}" method="POST" class="form mt-3">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="" class="form-label">Kode Barang</label>
                <input type="text" name="kode_barang" id="" placeholder="Masukkan nama barang"
                    value="{{$db->kode_barang}}" class="form-control @error('kode_barang') is-invalid @enderror"
                    value="{{ old('kode_barang') }}">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" id="" placeholder="Masukkan nama barang"
                    value="{{$db->nama_barang}}" class="form-control @error('nama_barang') is-invalid @enderror"
                    value="{{ old('nama_barang') }}">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Merek</label>
                <input type="text" name="merek" id="" class="form-control" placeholder="Masukkan merek"
                    value="{{$db->merek}}">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Bahan</label>
                <input type="text" name="bahan" value="{{$db->bahan}}" id="" class="form-control" placeholder="Kosongkan jika tidak ada">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Asal Usul</label>
                <input type="text" name="asal_usul" value="{{$db->asal_usul}}"  id="" class="form-control" placeholder="Kosongkan jika tidak ada">
            </div>

            <div class="form-group">
                <label for="" class="form-label">ukuran</label>
                <input type="text" name="ukuran" value="{{$db->ukuran}}"  id="" class="form-control" placeholder="Kosongkan jika tidak ada">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Register</label>
                        <input type="text" name="no_register" value="{{$db->no_register}}" id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Pabrik</label>
                        <input type="text" name="no_pabrik"value="{{$db->no_pabrik}}"  id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Rangka</label>
                        <input type="text" name="no_rangka" value="{{$db->no_rangka}}"  id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Mesin</label>
                        <input type="text" name="no_mesin" value="{{$db->no_mesin}}"  id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Polisi</label>
                        <input type="text" name="no_polisi" value="{{$db->no_polisi}}"  id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">No Bpkb</label>
                        <input type="text" name="no_bpkb" value="{{$db->no_bpkb}}"  id="" class="form-control"
                            placeholder="Kosongkan jika tidak ada">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="form-label">Nilai Asset</label>
                <input type="number" name="nilai_asset" value="{{$db->nilai_aset}}"  id="" class="form-control" placeholder="Masukan Nilai Aset">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Keterangan</label>
                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"
                    placeholder="Isi keterangan">{{$db->keterangan}} </textarea>
            </div>
            <input type="submit" value="Edit" class="btn btn-primary" id="input">
        </form>
             </div>
         </div>
     </div>
 </div>
