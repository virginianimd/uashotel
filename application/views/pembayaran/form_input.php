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
                                <?php echo form_open('pembayaran/post'); ?>
                                <div class="form-group"> 
                                    <label>Payment Method</label>
                                    <input type="text" name="namametode" class="form-control" placeholder="Payment Method">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('pembayaran','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->