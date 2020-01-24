<h3>Edit Jenis Kamar</h3>
<?php
echo form_open('kamar/post/'.$kamar['id_kamar']);
?>
<table class="table table-bordered">


  <tr><td width="130">Tipe Kamar</td>
	<td>
	<div>
		<select name="idtipe" class="form-control">
		<option value="0">Pilih Kamar</option>
		<?php  foreach ($tipekamar->result() as $r):
			$tipe=$r->idtipe;
			$tipekamar=	$kamar['idtipe'];
			?>
		<option value="<?php echo $tipe  ?> " <?php if($tipe==$tipekamar){echo "selected";} ?>><?php echo $r->namatipe; ?></option>
		<?php endforeach; ?>   
		</select>
	</div>
	</td>
  </tr>
 <tr><td width="130">No Kamar</td>
   	<td>
   		<div>
   		  <input type="text" name="no_kamar" placeholder="No Kamar" class="form-control" value="<?php echo $kamar['no_kamar']?>">
		  </div>
	  </td>
 </tr>
 <tr><td width="130">Harga Kamar</td>
   	<td>
   		<div>
   		  <input type="text" name="harga_kamar" placeholder="Harga Kamar" class="form-control" value="<?php echo $kamar['harga_kamar']?>">
		  </div>
	  </td>
 </tr>
 <tr><td width="130">Status Kamar</td>
   	<td>
   		<div>
			 <select name="status_kamar" class="form-control">
			 <?php
			 
			 if($kamar['status_kamar']==0){
				 $s="selected";
				 $t="";
			 }else if($kamar['status_kamar']==1) {
				 $s="";
				 $t="selected";
				 
			 }
			 ?>
                    <option value="">-- Pilih Status --</option>
                    <option value="0" <?php echo $s;?>>Tidak Tersedia</option>
                    <option value="1" <?php echo $t;?> >Tersedia</option>
                    </select>
				  </div>
	  </td>
 </tr>
 <tr><td width="130">Foto Kamar</td>
   	<td>
   		<div>
   		  <input type="text" name="foto_kamar" placeholder="Foto Kamar" class="form-control" value="<?php echo $kamar['status_kamar']?>">
		  </div>
	  </td>
 </tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
        <?php echo anchor('kamar','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>