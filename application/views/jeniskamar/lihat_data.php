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
                                 <?php echo anchor('kamar/post','Tambah tipe',array('class'=>'btn btn-danger btn-sm')) ?> 
                             </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>No Kamar</th>
                                                <th>Harga Kamar</th>
                                                <th>Kelas Kamar</th>
                                                <th>Status</th>
                                                <th>Gambar Kamar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r)
                                        { 
                                            $status=$r->status_kamar;
                                            if($status==1){
                                                $statustipe="Tersedia";
                                            }else{
                                                $statustipe="Tidak Tersedia";
                                            }
                                            ?>
                                            <tr class="gradeU">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $r->no_kamar; ?></td>
                                            <td><?php echo $r->harga_kamar; ?></td>
                                            <td><?php echo $r->namatipe; ?></td>
                                            <td><?php echo  $statustipe; ?></td>
                                            <td>
                                            <a  class="btn btn-success" href="<?php echo site_url('kamar/gambar/'.$r->id_kamar);?>"<i class="fa fa-image"></i></a>
                                        </td>
                                            <td>
                                            <a  href="<?php echo site_url('kamar/post/'.$r->id_kamar); ?>"
                                            <i class="fa fa-edit"></i></a> &nbsp;
                                            <a  href="<?php echo site_url('kamar/delete/'.$r->id_kamar);?>" onclick="return confirm('Yakin Ingin Menghapus ?')"> <i class="fa fa-times"></i></a>
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