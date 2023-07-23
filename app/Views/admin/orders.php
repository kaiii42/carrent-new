            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Order History</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Order History</li>
                        </ol>

                        <?php if (session()->getFlashKeys()): ?>
                            <?php echo session()->getFlashdata('confirm_order'); ?>
                        <?php endif; ?>


                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Order History Data</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th><center>No</th>
                                                <th><center>Tanggal Transaksi</th>
                                                <th><center>Status</th>
                                                <th><center>Nama Pemesan</th>
                                                <th><center>Alamat</th>
                                                <th><center>Layanan</th>
                                                <th><center>No Telepon</th>
                                                <th><center>Catatan</th>
                                                <th><center>Bukti Bayar</th>
                                                <th><center>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th><center>No</th>
                                                <th><center>Tanggal Transaksi</th>
                                                <th><center>Status</th>
                                                <th><center>Nama Pemesan</th>
                                                <th><center>Alamat</th>
                                                <th><center>Layanan</th>
                                                <th><center>No Telepon</th>
                                                <th><center>Catatan</th>
                                                <th><center>Bukti Bayar</th>
                                                <th><center>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php $no=1; foreach ($orders as $o) : ?> 

                                            <tr>
                                                <td><center><?= $no; ?></td>
                                                <td><center> <?= $o->tgl_transaksi ?> </td>
                                                <td> <?= $o->status ?> </td>
                                                <td> <?= $o->nama ?> </td>
                                                <td> <?= $o->alamat ?> </td>
                                                <td> <?= $o->nama_service ?> </td>
                                                <td> <?= $o->no_telp ?> </td>
                                                <td> <?= $o->catatan ?> </td>
                                                <td>
                                                    <a href="<?= base_url('uploads/'.$o->bukti_bayar) ?>" data-lightbox="image-group">
                                                        <img src="<?= base_url('uploads/'.$o->bukti_bayar) ?>" width="100">
                                                    </a>
                                                </td>

                                                <td> 
                                                    <a href="#" onclick="cancelConfirmation(<?php echo $o->id_transaksi; ?>)">
                                                        <input type="button" name="" class="btn btn-success" value="Confirm">
                                                    </a>
                                                </td>
                                            </tr>

                                            <?php $no++; endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>


<script>
    function cancelConfirmation(transactionId) {
    if (confirm('Are you sure you want to confirm this booking?')) {
    window.location.href = '<?= base_url('admin/confirm_order') ?>?id=' + transactionId;
    }
    }
</script>