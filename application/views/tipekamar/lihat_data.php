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
                                 <?php echo anchor('tipekamar/post','Tambah tipe',array('class'=>'btn btn-danger btn-sm')) ?> 
                             </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tipe Kamar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $r->namatipe; ?></td>
                                            <td>
                                            <a  href="<?php echo site_url('tipekamar/edit/'.$r->idtipe); ?>"
                                            <i class="fa fa-edit"></i></a> &nbsp;
                                            <a  href="<?php echo site_url('tipekamar/delete/'.$r->idtipe);?>" onclick="return confirm('Yakin Ingin Menghapus ?')"> <i class="fa fa-times"></i></a>
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