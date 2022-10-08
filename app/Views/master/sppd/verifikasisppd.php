<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title"><?= $titlebar ?></h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="<?= base_url('home') ?>">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('sppd') ?>"><?= $titlebar ?></a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">
                    <span class="badge badge-info btn-sm">
                        <?= $kegiatan['nama_kegiatan']; ?></span></a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="swal-error" data-swal="<?= session()->getFlashdata('me'); ?>"></div>
                <div class="card-header">
                    <div class="card-title"><?= $kegiatan['bagian']; ?></div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills nav-primary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                        <li class="nav-item submenu">
                            <a class="nav-link active show" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd" role="tab" aria-controls="pills-home-nobd" aria-selected="false">Data Kegiatan</a>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" id="pills-detail-tab-nobd" data-toggle="pill" href="#pills-detail-nobd" role="tab" aria-controls="pills-detail-nobd" aria-selected="false">Data Sub Kegiatan</a>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">File Upload</a>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd" role="tab" aria-controls="pills-contact-nobd" aria-selected="true">Verifikasi</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                        <div class="tab-pane fade active show" id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h4><b>Data Kegiatan</b></h4>
                                    <hr>
                                    <div class="table-responsive table-hover table-sales">
                                        <table class="table">
                                            <tr>
                                                <td style="width: 4%">
                                                    Kode Kegiatan
                                                </td>
                                                <td style="width: 0%">
                                                    :
                                                </td>
                                                <td style="width: 20%">
                                                    <?= $data['kode_kegiatan']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Kegiatan
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>
                                                    <?= $data['nama_kegiatan']; ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-detail-nobd" role="tabpanel" aria-labelledby="pills-detail-tab-nobd">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="col-md-12">
                                            <h4><b>Data Sub Kegiatan</b></h4>
                                            <hr>
                                            <div class="table-responsive table-hover table-sales">
                                                <table class="table">
                                                    <?php $i = 1;
                                                    $total = 0;
                                                    foreach ($datasub as $key => $s) :
                                                        $total += $s['nilai_kwitansi'];
                                                    ?>
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan="9" style="width: 10%">
                                                                    <span class="badge badge-primary btn-sm">
                                                                        sub <?= $i++; ?></span>
                                                                </td>
                                                                <td style="width: 20%">
                                                                    Kode
                                                                </td>
                                                                <td style="width: 0%">
                                                                    :
                                                                </td>
                                                                <td>
                                                                    <?= $s['kode_sub']; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Sub Kegiatan
                                                                </td>
                                                                <td>
                                                                    :
                                                                </td>
                                                                <td>
                                                                    <?= $s['nama_sub']; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Kode Rekening
                                                                </td>
                                                                <td>
                                                                    :
                                                                </td>
                                                                <td>
                                                                    <?= $s['kode_rek']; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Nama Rekening
                                                                </td>
                                                                <td>
                                                                    :
                                                                </td>
                                                                <td>
                                                                    <?= $s['nama_rek']; ?>
                                                                </td>
                                                            </tr>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Kode Rekening Simda
                                                                </td>
                                                                <td>
                                                                    :
                                                                </td>
                                                                <td>
                                                                    <?= $s['kode_rek_simda']; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Uraian Kegiatan
                                                                </td>
                                                                <td>
                                                                    :
                                                                </td>
                                                                <td>
                                                                    <?= $s['uraian']; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Nilai Kwitansi
                                                                </td>
                                                                <td>
                                                                    :
                                                                </td>
                                                                <td>
                                                                    <?= rupiah($s['nilai_kwitansi']); ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Nama Penerima
                                                                </td>
                                                                <td>
                                                                    :
                                                                </td>
                                                                <td>
                                                                    <?= $s['nama_penerima']; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Alamat Penerima
                                                                </td>
                                                                <td>
                                                                    :
                                                                </td>
                                                                <td>
                                                                    <?= $s['alamat_penerima']; ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    <?php endforeach; ?>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="2">
                                                                Total Nilai Kwitansi
                                                            </th>
                                                            <th>
                                                                :
                                                            </th>
                                                            <th>
                                                                <span class="badge badge-danger">
                                                                    <?= rupiah($total) ?></span>
                                                            </th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <h4><b>Data File</b></h4>
                                    <hr>
                                    <div class="table-responsive table-sales">
                                        <table class="table">
                                            <?php foreach ($datafile as $key => $f) : ?>
                                                <tr>
                                                    <td style="width: 4%">
                                                        Kwitansi
                                                    </td>
                                                    <td style="width: 20%">
                                                        <a href="<?= base_url() ?>/media/kwitansi/<?= $f['kwitansi']; ?>" target="blank"><button class="btn btn-info btn-xs"><i class="fa fa-download"></i>&nbsp;&nbsp;Download</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lumsum
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url() ?>/media/lumsum/<?= $f['lumsum']; ?>" target="blank"><button class="btn btn-info btn-xs"><i class="fa fa-download"></i>&nbsp;&nbsp;Download</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Surat Perintah Tugas
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url() ?>/media/spt/<?= $f['spt']; ?>" target="blank"><button class="btn btn-info btn-xs"><i class="fa fa-download"></i>&nbsp;&nbsp;Download</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Laporan Perjalanan Dinas
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url() ?>/media/lpd/<?= $f['lpd']; ?>" target="blank"><button class="btn btn-info btn-xs"><i class="fa fa-download"></i>&nbsp;&nbsp;Download</button></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">
                            <form action="<?= base_url('data-sppd/tolak/' . $data['id']) ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                <div class="card-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alasan</label>
                                            <textarea type="text" name="alasan" class="form-control" autocomplete="off"><?= old('alasan'); ?></textarea>
                                            <small class="form-text text-warning">*Isi jika SPJ ditolak. Uraikan alasan sebagai pemberitahuan kepada bagian terkait.</small>
                                            <small class="form-text text-warning">*Kosongkan jika diterima/verifikasi.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="btn btn-success btn-sm" title="Verifikasi" data-toggle='modal' data-target='#activateModalV<?= $data['id'] ?>'>
                                        <i class="fas fa-check-double"></i>&nbsp;&nbsp;Verifikasi
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-times-circle"></i>&nbsp;&nbsp;Tolak</button>
                                    <a href="<?= base_url('data-sppd') ?>" class="btn btn-dark btn-sm"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal Verifikasi -->
<form action="<?= base_url('data-sppd/verif/' . $data['id']); ?>" method="post">
    <?= csrf_field(); ?>
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <div class="modal fade" id="activateModalV<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Verifikasi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $total = 0;
                    foreach ($datasub as $key => $s) :
                        $total += $s['nilai_kwitansi'];
                    ?>
                        <input type="hidden" name="idbagian" value="<?= $s['id_bagian']; ?>">
                    <?php endforeach; ?>
                    <input type="hidden" name="nilai" value="<?= $total ?>">
                    Apakah data SPJ dari <b><?= $data['bagian']; ?></b> dengan <b> Total Nilai Kwitansi</b> sebesar <span class="text-danger"><b> <?= rupiah($total) ?></b></span> sudah sesuai dengan ketentuan. <b>Konfirmasi</b> jika data sudah sesuai.
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-check-double"></i>&nbsp;&nbsp;Konfirmasi</button>
                    <button class="btn btn-default btn-sm" type="button" data-dismiss="modal"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Kembali</button>
                </div>
            </div>
        </div>
    </div>
</form>