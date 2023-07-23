            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Order</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?= base_url('user/submit_order') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Select Service</label>
                                            <select class="form-control" name="service" required="">
                                                <?php foreach ($services as $s) : ?>
                                                <option value="tes"><?php echo $s->nama_service." - ".$s->harga; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <input type="text"  value="<?php echo session('id_user'); ?>" name="id_user" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" name="alamat" style="height: 100px;" required=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Rental Car Delivery</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="delivery" id="courier" value="courier" required>
                                            <label class="form-check-label" for="courier">
                                                 Picked up by Carrent Driver
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="delivery" id="self" value="self" required>
                                            <label class="form-check-label" for="self">
                                                 Go To Carrent 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" name="tgl_transaksi" id="tgl_transaksi" class="form-control" readonly="">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Note (Optional)</label>
                                        <textarea class="form-control" name="catatan" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">Upload Bukti Bayar</label>
                                        <input type="file" name="bukti_bayar" id="bukti_bayar" class="form-control" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Order</button>
                            </form>
                        </div>
                    </div>
                </main>

