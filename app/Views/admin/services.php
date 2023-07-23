            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Services</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Services</li>
                        </ol>

                        <?php if (session()->getFlashKeys()): ?>
                                <?php echo session()->getFlashdata('berhasiltambahservice'); ?>
                                <?php echo session()->getFlashdata('berhasilhapusservice'); ?>
                        <?php endif; ?>

                        <a href="<?= base_url('admin/tambah_services') ?>"><button class="btn btn-success mb-4"><i class="fas fa-plus mr-1"></i> Add Service</button></a>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>List Of Services</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th><center>No</th>
                                                <th><center>Nama Service</th>
                                                <th><center>Deskripsi Service</th>
                                                <th><center>Harga</th>
                                                <th><center>Foto Service</th>
                                                <th><center>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th><center>No</th>
                                                <th><center>Nama Service</th>
                                                <th><center>Deskripsi Service</th>
                                                <th><center>Harga</th>
                                                <th><center>Foto Service</th>
                                                <th><center>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php $no = 1; foreach ($services as $s) : ?>

                                            <tr>
                                                <td><center><?php echo $no; ?></td>
                                                <td><center><?= $s->nama_service ?></td>
                                                <td><?= $s->deskripsi_service ?></td>
                                                <td><center><?= $s->harga ?></td>
                                                <td><img width="100" src="<?= base_url($s->foto) ?>"></td>
                                                <td><center>
                                                    <a href="<?= base_url('admin/edit_service/'.$s->id_service) ?>" class="btn btn-primary">Edit</a>
                                                    <button onclick="confirmDelete(<?= $s->id_service ?>)" class="btn btn-danger">Delete</button>
                                                </td>
                                            </tr>

                                            <?php $no++; ?>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>