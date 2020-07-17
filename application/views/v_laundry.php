<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4><a href="#tambah_laundry" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Username
                        </th>
                        <th>
                          Password
                        </th>
                        <th>
                          Nama
                        </th>
                        <th>
                          Kecamatan
                        </th>
                        <th>
                          Foto
                        </th>
                        <th>
                          Alamat
                        </th>
                        <th>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
        
                        <?php 
                          foreach ($data_laundry as $list){
                              echo '
                                  <tr>
                                      <td>'.$list->laundry_id.'</td>
                                      <td>'.$list->username.'</td>
                                      <td>'.$list->password.'</td>
                                      <td>'.$list->nama_laundry.'</td>
                                      <td>'.$list->kecamatan.'</td>
                                      <td>'.$list->foto.'</td>
                                      <td>'.$list->desc_laundry.'</td>
                                      <td>
                                          <a href="#update_laundry" class="btn btn-warning" data-toggle="modal" onclick="data_detail('.$list->laundry_id.')">Update</a>
                                          <a href="'.base_url('index.php/laundry/hapus_laundry/'.$list->laundry_id).'" class="btn btn-danger" onclick="return confirm(\'anda yakin\')">Delete</a>
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
      <div class="modal fade"id="tambah_laundry">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Laundry</h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <form action="<?=base_url('index.php/laundry/tambah_laundry')?>" method="post" enctype="multipart/form-data">
              <input type="text" name="username" class="form-control" placeholder="Username">
              <br>
              <input type="text" name="password" class="form-control" placeholder="Password">
              <br>
              <input type="text" name="nama_laundry" class="form-control" placeholder="Nama Laundry">
              <br>
              <!-- <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
              <br> -->
              <div style="position:relative; width:200px; height:25px; border:0; padding:0; margin:0;">
                <select style="position:absolute; top:0px; left:0px; width:200px; height:25px; line-height:20px; margin:0; padding:0"
                        onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                  <option value="">Plih Kecamatan</option>
                  
                  <option value="blimbing">Blimbing</option>
                  <option value="kedungkandang">Kedungkandang</option>
                  <option value="sukun">Sukun</option>
                  <option value="lowokwaru">Lowokwaru</option>
                  <option value="Klojen">Klojen</option>
                </select>
                <input type="hidden" name="kecamatan" id="displayValue" placeholder="Pilih Kecamatan" onfocus="this.select()" style="position:absolute; top:0px; left:0px; width:183px; width:280px\9; #width:180px; height:23px; height:21px\9; #height:18px; border:1px solid #556;">
                <input type="hidden" name="kecamatan" id="idValue">
              </div>
              <br>
              <input type="file" name="foto" class="form-control" placeholder="Foto">
              <br>
              <input type="text" name="desc_laundry" class="form-control" placeholder="Alamat">
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

      <div class="modal fade"id="update_laundry">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Laundry</h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <form action="<?=base_url('index.php/laundry/ubah_laundry')?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="laundry_id" id="laundry_id" class="form-control">
              <br>
              <input type="text" name="username" id="username" class="form-control">
              <br>
              <input type="text" name="password" id="password" class="form-control">
              <br>
              <input type="text" name="nama_laundry" id="nama_laundry" class="form-control">
              <br>
              <!-- <input type="text" name="kecamatan" id="kecamatan" class="form-control">
              <br> -->
              <div>
                <select name="kecamatan" id="kecamatan">
                  <option value="blimbing">Blimbing</option>
                  <option value="klojen">Klojen</option>
                  <option value="kedungkandang">Kedungkandang</option>
                  <option value="sukun">Sukun</option>
                  <option value="lowokwaru">Lowokwaru</option>
                  <option value="Klojen">Klojen</option>
                </select>
                <input type="hidden" >
              </div>
              <br>
              <input type="text" name="desc_laundry" id="desc_laundry" class="form-control">
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
          $.getJSON("<?=base_url()?>index.php/laundry/detail_laundry/"+id,function(data){
            $("#laundry_id").val(data['laundry_id']);
            $("#username").val(data['username']);
            $("#password").val(data['password']);
            $("#nama_laundry").val(data['nama_laundry']);
            $("#kecamatan").val(data['kecamatan']);
            $("#desc_laundry").val(data['desc_laundry']);
            $("#foto").val(data['foto']);
          });
        }
      </script>
