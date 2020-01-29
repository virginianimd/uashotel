  <div class="card mb-3">
          <div class="card-header bg-success">
           
            <i class="fas fa-table"></i>
            Pemesanan</div>
             <?php 
                  
                          if($this->session->flashdata('in')){
                            echo "<div class='alert alert-success'>
                                           <span>Pemesanan Check IN SUCCESS</span>  
                                        </div>";
                          }
                          else if($this->session->flashdata('out')){

                            echo "<div class='alert alert-success'>
                                           <span>Pemesanan Check OUT SUCCESS</span>  
                                        </div>";

                          }
                          else if($this->session->flashdata('berhasil')){

                            echo "<div class='alert alert-success'>
                                           <span>Pemesanan Baru SUCCESS</span>  
                                        </div>";

                          }

                          else if($this->session->flashdata('perpanjang')){

                            echo "<div class='alert alert-success'>
                                           <span>Perpanjang SUCCESS</span>  
                                        </div>";

                          }
                          
                        
              ?>
          <div class="card-body">
            <div class="table-responsive">
                <?php echo anchor('reservasi/post','Tambah Reservasi',array('class'=>'btn btn-success fa fa-plus')) ?> 
                <table class="table table-bordered table-hover" id="dataTables-example">
                <br>
         <thead>
          <tr>
            <th width="1%">No</th>
            <th width="10%" >Aksi</th>
            <th >Nama</th>
            <th >Telp</th>
            <th >Alamat</th>
            <th width="12%">Tgl Masuk</th>
            <th width="12%">Tgl Keluar</th>
            <th >Lama</th>
            <th width="15%" >Kamar</th>
          </tr>
        </thead>
         <tbody>
          <?php 
          $no = 1;
          foreach($record->result() as $r){
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td>
                
               

                <?php
                        if ($r->status_reservasi == 0) { ?>

                         <a  class="btn btn-success" href="<?php echo site_url('reservasi/new_reservasi_in/'.$r->id_reservasi);?>/1">Proses Check-IN</a> 
                        <?php
                        }
                        else if ($r->status_reservasi == 1) { ?>
                           <a  class="btn btn-danger" href="<?php echo base_url().'reservasi/new_reservasi_out/'.$r->id_reservasi?>/2"> Proses Check-OUT</a> 
                           <a  class="btn btn-primary" href="<?php echo base_url().'reservasi/status/'.$r->id_reservasi?>">PERPANJANG</a> 
                        <?php
                        }
                        else { ?>
                          <span class="label label-success">CHECK OUT SUCCESS</span>
                        <?php
                        }
                        ?>
              </td>
              <td><?php echo $r->nama; ?></td>
              <td><?php echo $r->notelp; ?></td>
              <td><?php echo $r->alamat; ?></td>
              <td><?php echo $r->tgl_reservasi_masuk; ?></td>
              <td><?php echo $r->tgl_reservasi_keluar; ?></td>
              <td><?php echo $r->namatipe; ?></td>
              <td><?php echo "".$r->namatipe." ".$r->no_kamar; ?></td>
            <?php 
          }
          ?>
        </tbody> 
            </table>
          </div>
        </div>
      </div>
<hr style="border: 1px solid">