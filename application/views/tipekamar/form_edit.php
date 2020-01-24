<h3>Edit tipe</h3>
<?php
echo form_open('tipekamar/edit');
?>
<input type="hidden" value="<?php echo $record['idtipe']?>" name="idtipe">
<table class="table table-bordered">
  <tr><td width="130">tipe</td>
        <td>
        <div>
       <input type="text" name="namatipe" placeholder="tipe" class="form-control" value="<?php echo $record['namatipe']?>">
        </div>
       </td>
  </tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
        <?php echo anchor('tipekamar','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>