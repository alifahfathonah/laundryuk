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
                          Id
                        </th>
                        <th>
                          Nama pelanggan
                        </th>
                        <th>
                          Order Id
                        </th>
                        <th>
                          Laporan
                        </th>
                      </thead>
                      <tbody>
        
                        <?php 
                          foreach ($data_lapor as $list){
                              echo '
                                  <tr>
                                      <td>'.$list->lapor_id.'</td>
                                      <td>'.$list->nama_pelanggan.'</td>
                                      <td>'.$list->id.'</td>
                                      <td>'.$list->laporan.'</td>
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
