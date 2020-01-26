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

                         <a  class="btn btn-success" href="<?php echo site_url('reservasi/status/'.$r->id_reservasi);?>/1">Proses Check-IN</a> 
                        <?php
                        }
                        else if ($r->status_reservasi == 1) { ?>
                           <a  class="btn btn-danger" href="<?php echo base_url().'reservasi/status/'.$r->id_reservasi?>/2"> Proses Check-OUT</a> 
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


<!-- <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Pengguna Aplikasi <small>(Edit, Tambah & Hapus Pengguna)</small>
                        </h2>
                    </div>
                </div>  -->
                <!-- /. ROW  -->

                <!-- <div class="row">
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
                </div> -->
                <!-- /. ROW  -->