                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Payment Method
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->
 
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('Pembayaran/post','Tambah Payment Method',array('class'=>'btn btn-danger btn-sm')) ?> 
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Payment Method</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->namametode ?></td>
                                                <td class="center">
                                                    <?php echo anchor('pembayaran/edit/'.$r->idmetode,'Edit'); ?> | 
                                                    <?php echo anchor('pembayaran/delete/'.$r->idmetode,'Hapus'); ?>
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
