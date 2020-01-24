<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Tambah Jenis Kamar <small>(Jenis Kamar)</small>
        </h2>
    </div>
</div> 
<!-- /. ROW  -->

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('kamar/post'); ?>
                <div class="form-group"> 
                    <label>Tipe Kamar</label>
                    <select name="idtipe" class="form-control">
                    <option value="0">Pilih Kamar</option>
                    <?php  foreach ($tipekamar->result() as $r): ?>
                    <option value="<?php echo $r->idtipe; ?>"><?php echo $r->namatipe; ?></option>
                    <?php endforeach; ?>   
                    </select>
                </div>
                <div class="form-group"> 
                    <label>No Kamar</label>
                    <input type="text" name="no_kamar" class="form-control" placeholder="Jenis Kamar">
                </div>
                <div class="form-group"> 
                    <label>Harga Kamar</label>
                    <input type="text" name="harga_kamar" class="form-control" placeholder="Harga Kamar">
                </div>
                <div class="form-group"> 
                    <label>Keterangan kamar</label><br>
                    <textarea name="fasilitas_kamar" id="summernote" ></textarea>
                </div>
                <div class="form-group"> 
                    <label>Status Kamar</label>
                    <select name="status_kamar" class="form-control">
                    <option value="">-- Pilih Status --</option>
                    <option value="0">Tidak Tersedia</option>
                    <option value="1">Tersedia</option>
                    </select>
                </div>
                <div class="form-group"> 
                    <label>Foto Kamar</label>
                    <input type="text" name="foto_kamar" class="form-control" placeholder="Foto Kamar">
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                <?php echo anchor('kamar','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->