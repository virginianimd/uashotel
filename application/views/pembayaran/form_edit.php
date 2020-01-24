<h3>Edit Metode</h3>
<?php
echo form_open('pembayaran/edit');
?>
<input type="hidden" value="<?php echo $record['idmetode']?>" name="id">
<table class="table table-bordered">
  <tr><td width="130">Metode Pembayaran</td>
        <td>
        <div>
       <input type="text" name="namametode" placeholder="Payment Method" class="form-control" value="<?php echo $record['namametode']?>">
        </div>
       </td>
  </tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
        <?php echo anchor('pembayaran','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>