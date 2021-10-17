<?php include("inc_header.php") ?>
<?php
$katakuni = (isset($_GET['katakuni'])) ? $_GET['katakuni'] : "";
?>
<h1>
    halaman admin
</h1>
<p>
    <a href="halaman_input.php">
        <input type="button" class="btn btn-primary" value="Buat Halaman Baru" />
    </a>
</p>
<form class="row g-3" method="get">
    <div class="col-auto">
        <input type="text" class="form-control" placeholder="masukan kata kunci" name="katakunci" value="<?php echo $katakuni ?>" />
    </div>
    <div class="col-auto">
        <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary" />
    </div>
</form>
<table class="table table stripped">
    <thead>
        <tr>
            <th class="col-1">#</th>
            <th>judul</th>
            <th>kutipan</th>
            <th class="col-2">aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, minima.</td>
            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
            <td>
                <span class="bagde bg-warning text-dark">edit</span>
                <span class="badge bg-danger">delete</span>
            </td>
        </tr>
    </tbody>
</table>
<?php include("inc_footer.php") ?>