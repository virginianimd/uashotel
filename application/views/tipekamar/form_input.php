                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                           tipe
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('tipekamar/post'); ?>
                                <div class="form-group"> 
                                    <label>tipe</label>
                                    <input type="text" name="namatipe" class="form-control" placeholder="tipe">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('tipekamar','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->