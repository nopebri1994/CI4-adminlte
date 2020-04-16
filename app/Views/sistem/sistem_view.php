<div class="box box-info" id="box-utama">
	<div class="box-header with-border">
		<div class="box-title">
			Pengaturan Sistem 
		</div>
	</div>
	<div class="box-body">
			<div class="row">
				<div class="col-md-12">

                        <form action="/sistem/update" method="post" class="form-horizontal">
                            <div class="form-group row">
                                            <div class="col-lg-2">
                                                    <label for="nama_pengguna" value="<?= $setting->nama_pengguna; ?>" class="control-label">Nama Pengguna</label>
                                            </div>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control custom_input" value="<?= $setting->nama_pengguna; ?>" placeholder="Nama Pengguna" name="nama_pengguna" id="nama_pengguna">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-2">
                                                <label for="deskripsi" class="control-label">Deskripsi</label>
                                            </div>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control custom_input" name="deskripsi" id="deskripsi"><?= $setting->description; ?></textarea>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-2">
                                                <label for="nama_program" class="control-label">Nama program</label>
                                            </div>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control custom_input" value="<?= $setting->nama_program; ?>" name="nama_program" id="nama_program"/>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-2">
                                                <label for="singkatan" class="control-label">Singkatan nama program</label>
                                            </div>
                                                <div class="col-lg-2">
                                                    <input type="text" class="form-control custom_input" value="<?= $setting->singkatan_program; ?>" name="singkatan" id="singkatan"/>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-2">
                                                <label for="no_telepon" class="control-label">No Telpon</label>
                                            </div>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control custom_input" value="<?= $setting->no_telp; ?>" placeholder="no telepon" name="no_telepon" id="no_telepon">
                                                </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary custom_input"><i class="fa fa-save"></i> Save changes</button>
                            </form>

				</div>
		</div>
	</div>
</div>