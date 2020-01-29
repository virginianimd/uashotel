<div class="card mb-3">
          <div class="card-header bg-success">
            <i class="fas fa-table"></i>
            Tambah Reservasi Baru</div>
            <div class="card-body">
                  
                    <?php if(validation_errors()) { ?>
                <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <?php echo validation_errors(); ?>
                </div>
                <?php 
                } 
                ?>
                    
                      <?php echo form_open_multipart('reservasi/post/','class="form-horizontal"'); ?>
                      <div class="form-body">
                        <h3 class="form-section"></h3>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-4">Tanggal Masuk</label>
                              <div class="col-md-9">
                                <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                  <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                  <input class="form-control" type="text" name="tgl_reservasi_masuk" id="tgl_reservasi_masuk" placeholder="Tanggal Chek In" autocomplete="off">
                                </div>                          
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-4">Tanggal Keluar</label>
                              <div class="col-md-9">
                                <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                 <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                 <input class="form-control" type="text" name="tgl_reservasi_keluar" id="tgl_reservasi_keluar" placeholder="Tanggal Chek Out" autocomplete="off">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-9">No Kamar - Tipe Kamar</label>
                              <div class="col-md-9">
                                <select data-placeholder="Select..." name="id_kamar" class="form-control select2me">
                                    <option value=""></option>          
                                    <?php
                                    foreach ($kamar->result() as $k): ?>
                                    <option value="<?php echo $k->id_kamar;?>"><?php echo $k->no_kamar;?> - <?php echo $k->namatipe;?></option>
                                    <?php endforeach; ?>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-9">Lama</label>
                              <input type="text" name="lama" class="form-control" placeholder="Lama Inap">
                            </div>
                          </div>
                              </div>
                            </div>
                        </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-9">Nama</label>
                              <div class="col-md-9">
                              <select data-placeholder="Select..." name="idcustomer" class="form-control select2me">
                                    <option value=""></option>          
                                    <?php
                                    foreach ($customer->result() as $c): ?>
                                    <option value="<?php echo $c->idcustomer;?>"><?php echo $c->nama;?></option>
                                    <?php endforeach; ?>
                                  </select>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-4">Telp.</label>
                              <div class="col-md-9">
                                  <select data-placeholder="Select..." class="form-control select2me">
                                    <option value=""></option>          
                                    <?php
                                    foreach ($customer->result() as $c): ?>
                                    <option value="<?php echo $c->idcustomer;?>"><?php echo $c->notelp;?></option>
                                    <?php endforeach; ?>
                                  </select>
                              </div>
                            </div>
                        </div>
                        </div>
                      </div>
                      <div class="row">
                      <label class="control-label col-md-4">Alamat</label>
                              <div class="col-md-9">
                                  <select data-placeholder="Select..." class="form-control select2me">
                                    <option value=""></option>          
                                    <?php
                                    foreach ($customer->result() as $c): ?>
                                    <option value="<?php echo $c->idcustomer;?>"><?php echo $c->alamat;?></option>
                                    <?php endforeach; ?>
                                  </select>

                      </div>

                      <div class="form-actions">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-offset-3 col-md-9">
                                <input type="submit" name="submit" value="save" class="btn btn-success"/>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                          </div>
                        </div>
                      </div>
                    <?php echo form_close();?>  
        </div>
      </div>
   </div>


