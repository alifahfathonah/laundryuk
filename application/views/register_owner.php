<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets2/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets2/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="<?php echo base_url('index.php/laundry/register_laundry'); ?>" method="POST" class="register-form" id="register-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="username" id="Username" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label  ><i class="zmdi zmdi-account"></i></label>
                                <input type="text" name="nama_laundry" id="nama_laundry" placeholder="Nama Laundryan"/>
                            </div>
                            <div class="form-group">
                                <br>
                                <select onchange="document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                                    <option>--Kecamatan--</option>
                                    <option value="kedungkandang">Kedungkandang</option>
                                    <option value="blimbing">Blimbing</option>
                                    <option value="klojen">Klojen</option>
                                    <option value="lowokwaru">Lowokwaru</option>
                                    <option value="sukun">Sukun</option>
                                </select> 
                                <input type="hidden" name="kecamatan" id="idValue" placeholder="Kecamatan"/>
                            </div>
                           
                            <div class="form-group">
                                <label  ><i class="zmdi zmdi-account"></i></label>
                                <input type="file" name="foto" placeholder="foto"/>
                            </div>
                            <div class="form-group">
                                <label  ><i class="zmdi zmdi-account"></i></label>
                                <input type="text" name="desc_laundry" id="desc_laundry" placeholder="Alamat"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="simpan" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url()?>assets2/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="<?=base_url('index.php/loginowner')?>" class="signup-image-link">Login</a>
                        <a href="<?=base_url('index.php/masukadmin')?>" class="signup-image-link">Admin</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
     
    </div>

    <!-- JS -->
    <script src="<?php echo base_url()?>assets2/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets2/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>