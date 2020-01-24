<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Pengguna Aplikasi <small>(Edit, Tambah & Hapus Pengguna)</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            
                            <?php echo form_open_multipart('kamar/gambaradd'); ?> 
          <div class="form-group">
                    <label class="font-weight-bold">Gambar</label>
                    <input type="hidden" value="<?php echo $id_kamar; ?>" name="id_kamar">
                    <input type="file" class="form-control" name="nama_kamar_gambar" required="required">
                </div>
          <div class="form-group">
               
                      NOTE!
                 
          </div>
          <div class="form-group">
            
                      File hanya dalam format gif,jpg,png,jpeg dengan max size 3 MB, File gambar tidak boleh kosong
                  </div>
          
          
          <div class="form-group">
                
                            <input type="submit" name="submit" class="btn btn-success " value="UPDATE">
                  </div>
                  </form>
      
                            
                                
                             </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r)
                                        { 
                                            ?>
                                            <tr class="gradeU">
                                            <td><?php echo $no; ?></td>
                                            <td>
                                            <img src="<?php echo base_url();?>assets/images/<?php echo $r->nama_kamar_gambar;?>" alt="" style="width:80px; height:80px;">
            
                                            </td>
                                            <td>
                                            <a  href="<?php echo site_url('kamar/gambardelete/'.$r->id_kamar_gambar.'/'.$r->id_kamar);?>" onclick="return confirm('Yakin Ingin Menghapus ?')"> <i class="fa fa-times"></i></a>
                                          </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->