                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Status
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->
 
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('status/post','Tambah Status',array('class'=>'btn btn-danger btn-sm')) ?> 
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->namastatus ?></td>
                                                <td class="center">
                                                    <?php echo anchor('status/edit/'.$r->idstatus,'Edit'); ?> | 
                                                    <?php echo anchor('status/delete/'.$r->idstatus,'Hapus'); ?>
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
