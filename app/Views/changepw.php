<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div style="padding-top: 30px; padding-bottom: 30px;">
    <h2 style="font-weight:600;"><span style="display:inline; vertical-align: middle;"><i class="bx bxs-lock"></i></span> Change Password</h2>
</div>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success alert-dismissible fade show p-1 mr-3 mt-1 mb-1" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
        <button type="button" class="btn btn-close btn-sm p-1 m-1" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<div class="card w-80 shadow p-4 rounded-3" style="margin-right: 14px; border:none; ">
    <form action="<?= base_url('user/changepw') ?>" method="post">
        <div class="col-md-12 col-sm-12">
            <div class="form-group was-validated">
                <label for="exampleFormControlInput1">New Password</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="bx bxs-key bx-sm"></i></span>
                    </div>
                    <input type="text" name="password" class="form-control" placeholder="New Password" aria-label="New Password" aria-describedby="basic-addon1" autocomplete="off" required>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-md btn-block mb-3 mt-3" style="background: #001a57; color:white">Submit</button>
        </div>
    </form>

</div>

<?= $this->endSection() ?>