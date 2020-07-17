<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                         Nama Pelanggan
                        </th>
                        <th>
                          Alamat Pengambilan
                        </th>
                        <th>
                          Tanggal Order
                        </th>
                        <th>
                          Tanggal Selesai
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Note
                        </th>
                      </thead>
                      <tbody>
        
                        <?php
                         
                          foreach ($data_order as $list){
                              echo '
                                  <tr>
                                      <td>'.$list->id.'</td>
                                      <td>'.$list->nama_pelanggan.'</td>
                                      <td>'.$list->alt_pelanggan.'</td>
                                      <td>'.$list->tgl_order.'</td>
                                      <td>'.$list->tgl_selesai.'</td> 
                                      <td>'.$list->status.'</td>
                                      <td>'.$list->note.'</td>
                                      <td>
                                          <a href="#update_order" class="btn btn-warning" data-toggle="modal" onclick="data_detail('.$list->id.')">Update</a>
                                          <a href="'.base_url('index.php/order/hapus_order/'.$list->id).'" class="btn btn-danger" onclick="return confirm(\'anda yakin\')">Delete</a>
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

      <div class="modal fade"id="update_order">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Laundry</h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <form action="<?=base_url('index.php/order/ubah_order')?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id" class="form-control">
              
              <input type="hidden" name="alt_pelanggan" id="alt_pelanggan" class="form-control">
              
              <input type="hidden" name="pelanggan_id" id="pelanggan_id" class="form-control">
              
              <input type="hidden" name="note" id="note" class="form-control">
              
              <input type="hidden" name="laundry_id" id="laundry_id" class="form-control">
              
              <!-- <input type="hidden" name="status" id="status" class="form-control">
              <br>              -->
              <div>
                <select name="status" id="status">
                  <option value="belum jadi">Belum jadi</option>
                  <option value="masih laundry">Masih Laundry</option>
                  <option value="laundry kering">Laundry kering</option>
                  <option value="setrika">Setrika</option>
                  <option value="packing">Packing</option>
                </select>
                <!-- <input type="hidden" name="status" id="status"> -->
              </div>
              
              <input type="hidden" name="tgl_order" id="tgl_order" class="form-control">
              
              <input type="hidden" name="tgl_selesai" id="tgl_selesai" class="form-control">
              
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
          $.getJSON("<?=base_url()?>index.php/order/detail_order/"+id,function(data){
            $("#id").val(data['id']);
            $("#alt_pelanggan").val(data['alt_pelanggan']);
            $("#note").val(data['note']);
            $("#pelanggan_id").val(data['pelanggan_id']);
            $("#laundry_id").val(data['laundry_id']);
            $("#status").val(data['status']);
            $("#tgl_order").val(data['tgl_order']);
            $("#tgl_selesai").val(data['tgl_selesai']);
          });
        }
      </script>
