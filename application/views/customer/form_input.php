                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                           Tambah Data Customer
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('customer/post'); ?>
                                <div class="form-group"> 
                                    <label>Nama Customer</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Customer">
                                </div>
                                <div class="form-group"> 
                                    <label>No Telp.</label>
                                    <input type="text" name="notelp" class="form-control" placeholder="No Telp">
                                </div>
                                <div class="form-group"> 
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group"> 
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                                </div>
                                <div class="form-group"> 
                                    <label>Kota</label>
                                    <input type="text" name="kota" class="form-control" placeholder="Kota">
                                </div>
                                <div class="form-group"> 
                                    <label>Negara</label>
                                    <input type="text" name="negara" class="form-control" placeholder="Negara">
                                </div>
                                <div class="form-group"> 
                                    <label>No Passpor</label>
                                    <input type="text" name="nopasspor" class="form-control" placeholder="No Passpor">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('customer','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->