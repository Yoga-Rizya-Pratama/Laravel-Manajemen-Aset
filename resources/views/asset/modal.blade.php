 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Isi Data</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="/asset/tambah" method="POST">
                     @csrf
                     @method('POST')
                     <div class="form-group">
                        <label for="" class="form-label">Kode Barang</label>
                        <input type="text" name="kode_barang" id="" placeholder="Masukkan kode barang"
                            class="form-control @error('kode_barang') is-invalid @enderror" value="ASET#{{ old('kode_barang') }}">
                    </div>

                     <div class="form-group">
                         <label for="" class="form-label">Nama Barang</label>
                         <input type="text" name="nama_barang" id="" placeholder="Masukkan nama barang"
                             class="form-control @error('nama_barang') is-invalid @enderror" value="{{ old('nama_barang') }}">
                     </div>

                     <div class="form-group">
                         <label for="" class="form-label">Merek</label>
                         <input type="text" name="merek" id="" class="form-control" placeholder="Masukkan merek">
                     </div>

                     <div class="form-group">
                         <label for="" class="form-label">Bahan</label>
                         <input type="text" name="bahan" id="" class="form-control" placeholder="Kosongkan jika tidak ada">
                     </div>

                     <div class="form-group">
                         <label for="" class="form-label">Asal Usul</label>
                         <input type="text" name="asal_usul" id="" class="form-control" placeholder="Kosongkan jika tidak ada">
                     </div>

                     <div class="form-group">
                         <label for="" class="form-label">ukuran</label>
                         <input type="text" name="ukuran" id="" class="form-control" placeholder="Kosongkan jika tidak ada">
                     </div>

                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="" class="form-label">No Register</label>
                                 <input type="text" name="no_register" id="" class="form-control" placeholder="Kosongkan jika tidak ada">
                             </div>
                         </div>

                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="" class="form-label">No Pabrik</label>
                                 <input type="text" name="no_pabrik" id="" class="form-control" placeholder="Kosongkan jika tidak ada">
                             </div>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="" class="form-label">No Rangka</label>
                                 <input type="text" name="no_rangka" id="" class="form-control" placeholder="Kosongkan jika tidak ada">
                             </div>
                         </div>

                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="" class="form-label">No Mesin</label>
                                 <input type="text" name="no_mesin" id="" class="form-control" placeholder="Kosongkan jika tidak ada">
                             </div>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="" class="form-label">No Polisi</label>
                                 <input type="text" name="no_polisi" id="" class="form-control" placeholder="Kosongkan jika tidak ada">
                             </div>
                         </div>

                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="" class="form-label">No Bpkb</label>
                                 <input type="text" name="no_bpkb" id="" class="form-control" placeholder="Kosongkan jika tidak ada">
                             </div>
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="" class="form-label">Nilai Asset</label>
                         <input type="number" name="nilai_asset" id="" class="form-control" placeholder="Masukan Nilai Aset">
                     </div>

                     <div class="form-group">
                         <label for="" class="form-label">Keterangan</label>
                         <textarea name="keterangan" id="" cols="30" rows="10" class="form-control" placeholder="Isi keterangan"></textarea>
                     </div>
                     <input type="submit" value="Tambah" class="btn btn-primary">
                 </form>
             </div>
         </div>
     </div>
 </div>
