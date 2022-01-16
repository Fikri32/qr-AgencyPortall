<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<div style="padding-top: 30px; padding-bottom: 30px;">
    <h2 style="font-weight:600;"><span style="display:inline; vertical-align: middle;"><i class="bx bxs-user-plus"></i></span> Add Data</h2>
</div>
<div class="card w-80 shadow p-4 rounded-3" style="margin-right: 14px; border:none; ">
    <form action="<?= base_url('employee/simpan') ?>" method="post">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">EC Number</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-id-card bx-sm"></i></span>
                        </div>
                        <input type="text" name="ecnumb" class="form-control" placeholder="Employment Contract Number" aria-label="No Registrasi" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">EC Date</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-calendar bx-sm"></i></span>
                        </div>
                        <input type="date" name="ecdate" class="form-control" placeholder="Employment Contract Date" aria-label="EC Date" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Name Of Worker</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-user-detail bx-sm"></i></span>
                        </div>
                        <input type="text" name="worker" class="form-control" placeholder="Name of Worker" aria-label="Nama" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Name of Employer</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-user-detail bx-sm"></i></span>
                        </div>
                        <input type="text" name="employer" class="form-control" placeholder="Name of Employer" aria-label="Tanggal Lahir" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
            </div>
            <!-- Right -->
            <div class="col-md-6 col-sm-12">
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Working Address</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bx-map-alt bx-sm"></i></span>
                        </div>
                        <input type="text" name="address" class="form-control" placeholder="Working Address" aria-label="Working Address" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label for="exampleFormControlInput1">Salary (SGD)</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bx-dollar bx-sm"></i></span>
                        </div>
                        <input type="text" name="salary" class="form-control" placeholder="Salary in SGD" aria-label="Salary In SGD" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Off Days</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-calendar-x bx-sm"></i></span>
                        </div>
                        <input type="text" name="off" class="form-control" placeholder="Off Days" aria-label="Off Days" aria-describedby="basic-addon1" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Status</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bxs-badge-check bx-sm"></i></span>
                        </div>
                        <select name="status" class="form-select" aria-describedby="basic-addon1" required>
                            <option value="">Choose..</option>
                            <option value="Approved">Approved</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-md btn-block mb-3 mt-3" style="background: #001a57; color:white">Submit</button>
                </div>
            </div>
            <!-- End Right -->
        </div>
    </form>

</div>

<?= $this->endSection() ?>