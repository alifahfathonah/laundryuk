      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                  <a href="#tambah_pelanggan" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nama 
                        </th>
                        <th>
                          No Telpon
                        </th>
                        <th>
                          Password
                        </th>
                        <th>
                          Alamat
                        </th>
                        <th>
                          Aksi 212
                        </th>
                      </thead>
                      <tbody>
                        <?php 
                            $no=0;
                            foreach ($data_pelanggan as $list){
                                echo '
                                    <tr>
                                        <td>'.$list->pelanggan_id.'</td>
                                        <td>'.$list->nama_pelanggan.'</td>
                                        <td>'.$list->no_telp.'</td>
                                        <td>'.$list->password.'</td>
                                        <td>'.$list->alt_pelanggan.'</td>
                                        <td>
                                            <a href="#update_pelanggan" class="btn btn-warning" data-toggle="modal" onclick="data_detail('.$list->pelanggan_id.')">Update</a>
                                            <a href="'.base_url('index.php/pelanggan/hapus_pelanggan/'.$list->pelanggan_id).'" class="btn btn-danger" onclick="return confirm(\'anda yakin ingin menghapus?\')">Delete</a>
                                        </td>
                                ';
                            }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade"id="tambah_pelanggan">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Tambah pelanggan</h4>  
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <form action="<?=base_url('index.php/pelanggan/tambah_pelanggan')?>" method="post" enctype="multipart/form-data">
              <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan">
              <br>
              <input type="text" name="no_telp" class="form-control" placeholder="No Telpon">
              <br>
              <input type="text" name="password" class="form-control" placeholder="Password">
              <br>
              <input type="text" name="alt_pelanggan" class="form-control" placeholder="Alamat">
              <br>
              <input type="submit" name="simpan" value="simpan" class="btn btn-success">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
      <div class="modal fade"id="update_pelanggan">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Pelanggan</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <form action="<?=base_url('index.php/pelanggan/ubah_pelanggan')?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="pelanggan_id" id="pelanggan_id" class="form-control">
              <br>
              <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control">
              <br>
              <input type="text" name="no_telp" id="no_telp" class="form-control" >
              <br>
              <input type="text" name="password" id="password" class="form-control" >
              <br>
              <input type="text" name="alt_pelanggan" id="alt_pelanggan" class="form-control">
              <br>
              <input type="submit" name="simpan" value="simpan" class="btn btn-success">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
      <script>
        function data_detail(id){
          $.getJSON("<?=base_url()?>index.php/pelanggan/detail_pelanggan/"+id,function(data){
            $("#pelanggan_id").val(data['pelanggan_id']);
            $("#nama_pelanggan").val(data['nama_pelanggan']);
            $("#no_telp").val(data['no_telp']);
            $("#password").val(data['password']);
            $("#alt_pelanggan").val(data['alt_pelanggan']);
          });
        }
      </script>
      