<div class="row no-gutters">

<?php foreach ($data_laundry as $list){ ?>

<div class="col-lg-4 col-sm-6">
  <a class="portfolio-box js-scroll-trigger" href="#about">
  <img class="img-fluid" src="<?php echo base_url('assets/laundry/'.$list->foto)?>">
  <div class="portfolio-box-caption">
    <div class="project-category text-white-50">
      <p><?php echo $list->nama_laundry; ?></p>
      <p><?php echo $list->desc_laundry; ?></p>
      <p class="btn btn-light btn-xl js-scroll-trigger ">Visit and Order</p>
    </div>    
  </div>
  </a>
  <div class=" bg-dark text-white container text-center ">
  </div>
</div>

<?php } ?>
</div>

<section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
        <div class="form-group">
          <h2 class="text-white ">Order Our Service</h2>
          </div>
          <form action="<?php echo base_url('index.php/order/tambah_order')?>" method="post">
          <div class="row justify-content-center">
            <div class="text-white">
              <table border="0">
                <tr>
                  <td>Pilih Laundry</td>
                  <td>
                    <select onchange="document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                      <?php foreach ($data_laundry as $list){ ?>
                       
                          <option value="<?php echo $list->laundry_id; ?>"><?php echo $list->nama_laundry; ?></option>

                      <?php } ?>
                    </select>                   
                  </td>
                </tr>
                <tr>
                  <td>Tanggal Jadi</td>
                  <td><input type="date" name="tgl_selesai" min="<?php echo date('Y-m-d', time() + 172800 );?>"></td>
                </tr>
                <tr>
                  <td>Alamat Pengambilan</td>
                  <td><input type="text" name="alt_pelanggan"></td>
                </tr>
                <tr>
                  <td>Note</td>
                  <td><textarea name="note" type="text"></textarea></td>
                </tr>
              </table> 
              <input type="hidden" name="laundry_id" id="idValue" value="<?php echo $list->laundry_id; ?>">
              <input type="hidden" name="status" value="belum jadi">
              <input type="hidden" name="tgl_order" value='<?php echo date('Y-m-d');?>'>
              <input type="hidden" name="pelanggan_id" value="<?php echo $this->session->userdata('pelanggan_id');?>">
            </div>
          </div>
          <br>
          <br>
          <input type="submit" class="btn btn-light btn-xl" name="simpan" value="Order Now!">
          </form>          
        </div>
      </div>
    </div>
  </section>