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
                            <div class="panel-body">
                                <?php echo form_open('status/post'); ?>
                                <div class="form-group"> 
                                    <label>Status</label>
                                    <input type="text" name="namastatus" class="form-control" placeholder="Status">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('status','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->