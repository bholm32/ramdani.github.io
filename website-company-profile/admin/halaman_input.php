    <?php include("inc_header.php") ?>
    <?php
    $judul     = "";
    $kutipan   = "";
    $isi       = "";
    $error     = "";
    $sukses    = "";

    if(isset($_POST['simpan'])){
        $judul      = $_POST['judul'];
        $isi        = $_POST['isi'];
        $kutipan    = $_POST['kutipan'];

        if($judul == '' or $isi == ''){
            $error     = "SILAHKAN ISI JUDUL DAN ISI jika kalau mau selamat";
        }
        if(empty($error)){
            $sql1       = "insert into halaman(judul,kutipan,isi) values ('$judul','$kutipan','$isi')";
            $q1         = mysqli_query($koneksi,$sql1);
            if($q1){
                $sukses      = "cie sukses v";
            }else{
                $error       = "mampus error aowwkwkwk v";
            }
        }
    }



    ?>
    <h1>halaman admin input data</h1>
    <div class="mb-3 row">
        <a href="halaman.php">
            << kembali ke halaman admin</a>
    </div>
    <?php
    if($error){
        ?>
        <div class="alert alert-danger" role="alert">
             <?php echo $error?>
        <?php 
    }
    ?>
    <?php
    if($sukses){
        ?>
        <div class="alert alert-primary" role="alert">
             <?php echo $sukses?>
        <?php 
    }
    ?>
    <form action="" method="post">
        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" value="<?php echo $judul ?>" name="judul">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kutipan" class="col-sm-2 col-form-label">kutipan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kutipan" value="<?php echo $kutipan ?>" name="kutipan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="isi" class="col-sm-2 col-form-label">isi</label>
            <div class="col-sm-10">
                <textarea name="isi" class="form-control" id="summernote"><?php echo $isi ?></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <input type="submit" name="simpan" value="simpan data" class="btn btn-primary" />
            </div>
        </div>


    </form>
    <?php include("inc_footer.php") ?>