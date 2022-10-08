<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar <?= session()->get('status') == 1 ? 'avatar-online' : 'avatar-offline' ?>">
                    <?php if (session()->get('foto') == null) { ?>
                        <img src="<?= base_url('/media/fotouser/' . 'blank.png') ?>" alt="image profile" class="avatar-img rounded-circle">
                    <?php } else { ?>
                        <img src="<?= base_url('/media/fotouser/' . session()->get('foto')) ?>" alt="image profile" class="avatar-img rounded-circle">
                    <?php } ?>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?= session()->get('nama'); ?>
                            <span class="user-level">
                                <?php if (session()->get('level') == '1') {
                                    echo "Admin";
                                } elseif (session()->get('level') == '2') {
                                    echo "User Bagian";
                                }
                                ?>
                            </span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="<?= base_url('my-profil') ?>">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <!-- Service uri -->
                <?php $request = \Config\Services::request(); ?>
                <!-- =========== -->
                <li class="nav-item <?= ($request->uri->getSegment(1) == 'home') ? 'active' : ""; ?>">
                    <a href="<?= base_url('/home') ?>">
                        <i class="fas fa-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>
                <?php if (session()->get('level') == '1') { ?>
                    <li class="nav-item <?= ($request->uri->getSegment(1) == 'data-user' or
                                            $request->uri->getSegment(1) == 'data-bagian' or
                                            $request->uri->getSegment(1) == 'data-anggaran' or
                                            $request->uri->getSegment(1) == 'data-gu' or
                                            $request->uri->getSegment(1) == 'data-kegiatan' or
                                            $request->uri->getSegment(1) == 'data-sub-kegiatan' or
                                            $request->uri->getSegment(1) == 'data-kode-rekening') ? 'active' : ""; ?>">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Master Data</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?= base_url('data-user') ?>">
                                        <span class="sub-item">Data User</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('data-bagian') ?>">
                                        <span class="sub-item">Data Bagian</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('data-anggaran') ?>">
                                        <span class="sub-item">Data Anggaran</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('data-gu') ?>">
                                        <span class="sub-item">Data GU</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('data-kegiatan') ?>">
                                        <span class="sub-item">Data Kegiatan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('data-sub-kegiatan') ?>">
                                        <span class="sub-item">Data Sub Kegiatan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('data-kode-rekening') ?>">
                                        <span class="sub-item">Data Kode Rekening</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item <?= ($request->uri->getSegment(1) == 'data-sppd') ? 'active' : ""; ?>">
                        <a href="<?= base_url('data-sppd') ?>">
                            <i class="fas fa-file"></i>
                            <p>SPJ SPPD</p>
                        </a>
                    </li>
                    <li class="nav-item <?= ($request->uri->getSegment(1) == 'data-spjkegiatan') ? 'active' : ""; ?>">
                        <a href="<?= base_url('data-spjkegiatan') ?>">
                            <i class="fas fa-file"></i>
                            <p>SPJ Kegiatan</p>
                        </a>
                    </li>
                <?php } ?>
                <?php if (session()->get('level') == '2') { ?>
                    <li class="nav-item <?= ($request->uri->getSegment(1) == 'sppd') ? 'active' : ""; ?>">
                        <a href="<?= base_url('sppd') ?>">
                            <i class="fas fa-file"></i>
                            <p>SPJ SPPD</p>
                        </a>
                    </li>
                    <li class="nav-item <?= ($request->uri->getSegment(1) == 'kegiatan') ? 'active' : ""; ?>">
                        <a href="<?= base_url('kegiatan') ?>">
                            <i class="fas fa-file"></i>
                            <p>SPJ Kegiatan</p>
                        </a>
                    </li>
                <?php } ?>
                <hr>
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout') ?>">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
<div class="main-panel">
    <div class="content">
        <!-- Mulai isi content -->