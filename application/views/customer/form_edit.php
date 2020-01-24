<h3>Edit Data Customer</h3>
<?php
echo form_open('customer/edit');
?>
<input type="hidden" value="<?php echo $record['idcustomer']?>" name="id">
<table class="table table-bordered">
  <tr><td width="130">Nama Customer</td>
        <td>
        <div>
       <input type="text" name="nama" placeholder="Nama Customer" class="form-control" value="<?php echo $record['nama']?>">
        </div>
       </td>
  </tr>
  <tr><td width="130">No Telp.</td>
        <td>
        <div>
       <input type="text" name="notelp" placeholder="No Telp" class="form-control" value="<?php echo $record['notelp']?>">
        </div>
       </td>
  </tr>
  <tr><td width="130">Email</td>
        <td>
        <div>
       <input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo $record['email']?>">
        </div>
       </td>
  </tr>
  <tr><td width="130">Alamat</td>
        <td>
        <div>
       <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?php echo $record['alamat']?>">
        </div>
       </td>
  </tr>
  <tr><td width="130">Kota</td>
        <td>
        <div>
       <input type="text" name="kota" placeholder="Kota" class="form-control" value="<?php echo $record['kota']?>">
        </div>
       </td>
  </tr>
  <tr><td width="130">Negara</td>
        <td>
        <div>
       <input type="text" name="negara" placeholder="Negara" class="form-control" value="<?php echo $record['negara']?>">
        </div>
       </td>
  </tr>
  <tr><td width="130">No Passpor</td>
        <td>
        <div>
       <input type="text" name="nopasspor" placeholder="No Passpor" class="form-control" value="<?php echo $record['nopasspor']?>">
        </div>
       </td>
  </tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
        <?php echo anchor('customer','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>