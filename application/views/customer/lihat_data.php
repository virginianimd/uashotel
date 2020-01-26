<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Customer's
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('customer/post','Tambah Customer',array('class'=>'btn btn-danger btn-sm')) ?> 
                             </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $r->nama ?></td>
                                            <td><?php echo $r->notelp ?></td>
                                            <td><?php echo $r->email ?></td>
                                            <td><?php echo $r->alamat ?></td>
                                            <td><?php echo $r->kota ?></td>
                                            <td><?php echo $r->negara ?></td>
                                            <td><?php echo $r->nopasspor ?></td>
                                            <td>
                                            <a  href="<?php echo site_url('customer/edit/'.$r->idcustomer); ?>"
                                            <i class="fa fa-edit"></i></a> &nbsp;
                                            <a  href="<?php echo site_url('customer/delete/'.$r->idcustomer);?>" onclick="return confirm('Yakin Ingin Menghapus ?')"> <i class="fa fa-times"></i></a>
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