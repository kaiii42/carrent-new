            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Services</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Services</li>
                        </ol>
                            

                            <form action="<?= base_url('admin/proses_tambah_services') ?>" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Service Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="service_name">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Service Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="service_description"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Service Price</label>
                                <input type="text" id="currencyInput" class="form-control" placeholder="IDR 0" name="service_price">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlFile1">Service Picture (Optional)</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="service_picture">
                              </div>
                            

                            <button type="submit" class="btn btn-success mb-4 mt-5">Add This Service</button>
                            </form>
                    </div>
                </main>