                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Data Customer<small> (Edit, Tambah & Hapus Master)</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->
 
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('customer/post','Tambah Data Customer',array('class'=>'btn btn-danger btn-sm')) ?> 
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Customer</th>
                                                <th>No Telp</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                                <th>Kota</th>
                                                <th>Negara</th>
                                                <th>No Passpor</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama ?></td>
                                                <td><?php echo $r->notelp ?></td>
                                                <td><?php echo $r->email ?></td>
                                                <td><?php echo $r->alamat ?></td>
                                                <td><?php echo $r->kota ?></td>
                                                <td><?php echo $r->negara ?></td>
                                                <td><?php echo $r->nopasspor ?></td>

                                                <td class="center">
                                                    <?php echo anchor('customer/edit/'.$r->idcustomer,'Edit'); ?> | 
                                                    <?php echo anchor('customer/delete/'.$r->idcustomer,'Hapus'); ?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->
