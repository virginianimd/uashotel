<h3>Edit Status</h3>
<?php
echo form_open('status/edit');
?>
<input type="hidden" value="<?php echo $record['idstatus']?>" name="id">
<table class="table table-bordered">
  <tr><td width="130">Status</td>
        <td>
        <div>
       <input type="text" name="namastatus" placeholder="Status" class="form-control" value="<?php echo $record['namastatus']?>">
        </div>
       </td>
  </tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
        <?php echo anchor('status','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>