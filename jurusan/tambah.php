<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>modul jurusan</h1>
        </div>
        <div class="col-4">
            <a href="?m=jurusan&s=tampil" class="btn btn-large btn-info float-end" style="float: end;"> kembali </a>
        </div>
        <div class="col">
        <form action="?m=jurusan&s=simpan" method="post">
            <div class="mb-2">
                <label for="">nama jurusan</label>
                <input type="text" name="nama_jurusan" class="form-control" autofocus>
            </div>
            <div class="mb-2">
                <label for="">kapasitas</label>
                <input type="number" name="kapasitas" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">terisi</label>
                <input type="number" name="terisi" class="form-control">
            </div>
            <div class="mb-2">
                <input type="reset"class="btn btn-warning">
                <input type="submit" name="simpan" class="btn btn-primary">
            </div>          
        </form>
        </div>
    </div>
</section>