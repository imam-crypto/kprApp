<div class="site-blocks-cover overlay mt-3" style="background-image: url(<?= base_url('assets/assets_shop') ?>/images/gbr.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

                <div class="row mb-4">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');  ?>">
                    </div>

                    <h1>Purnama Industries Project</h1>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="div">
    <?= $this->session->flashdata('flashh');  ?>
</div>

<div class="site-section" id="products-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="section-sub-title">Popular Products</h3>
                <h2 class="section-title mb-3">Our Products</h2>
                <p>Wujudkan Hunian Nyamaan Untuk keluarga kualitas terbaik di kelasnya.</p>
            </div>
        </div>
        <div class="row">



            <?php foreach ($produk as $rm) : ?>
                <div class="col-lg-4  mb-5">
                    <div class="card border-info shadow  h-300">
                        <div class="card-body border-info">
                            <div class="card-title">
                                <div class="product-item">
                                    <figure>
                                        <img src=" <?= base_url('assets/upload/' . $rm->gambar) ?> " alt="Image" height="100px" width="300px" class="img-fluid" style="height: 200px;">
                                    </figure>
                                    <div class="px-4">
                                        <h3><a href="#"> <?php if ($rm->kode_type == "CLS") {
                                                                echo "Cluster";
                                                            } elseif ($rm->kode_type == "SCLS") {
                                                                echo "Spesial Cluster";
                                                            } elseif ($rm->kode_type == "NCLS") {
                                                                echo "Non Cluster";
                                                            }
                                                            ?> </a></h3>

                                        <p class="mb-2"><?= $rm->ukuran ?> </p>
                                        <p class="mb-3" style="color: red; font-size: medium;">Promo Spesial</p>
                                        <p class="mb-2"> <del><?= $rm->harga * 2 ?> </del> </p>

                                        <p class="mb-4">Rp. <?= number_format($rm->harga, 0, ',', '.') ?> / Tahun </p>
                                        <p class="mb-4"> <?php if ($rm->status == 1) {
                                                                echo " <span class='badge badge-info p-1'> Tersedia </span>";
                                                            } else {
                                                                echo "<span class='badge badge-danger p-1'> Tidak tersedia </span>";
                                                            }
                                                            ?> </p>
                                        <div>
                                            <a href="<?= base_url('customer/dashboard/detail_rumah/' . $rm->id_rumah); ?>  " class="btn btn-info mr-1 ">Detail</a>

                                            <?php if ($this->session->userdata('nama')) { ?>

                                                <a href=" <?= base_url('transaksi/sewa/tambah_sewa/' . $rm->id_rumah); ?> " class="btn btn-warning  ml-1 ">Sewa</a>

                                            <?php } else { ?>
                                                <a href=" <?= base_url('transaksi/sewa/tambah_sewa/' . $rm->id_rumah); ?> " class="btn btn-warning  ml-1 disabled ">Sewa</a>
                                            <?php } ?>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>



<div class="site-section bg-light" id="services-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">

                <h4 class="text text-info section-title mb-3">Support BY</h4>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary icon-pie_chart"></span></div>
                    <div>
                        <h3>Business Consulting</h3>
                        <p>Kapten Darman OMA</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary icon-backspace"></span></div>
                    <div>
                        <h3>Market Analysis</h3>
                        <p>Kakang Prabu.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary icon-av_timer"></span></div>
                    <div>
                        <h3>User Monitoring</h3>
                        <p>Suhu Aldo.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>