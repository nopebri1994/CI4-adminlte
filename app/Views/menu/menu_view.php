<?php $session = \Config\Services::session();?>
	<div class="box box-info">
		<div class="box-header with-border">
              <h3 class="box-title">Manajemen Menu</h3>
         <div class="box-tools pull-right">
			<a href="" data-toggle="modal" data-target="#addModal" class="btn btn-sm btn-info">Tambah Data</a>
         </div>
     </div>
	<div class="box-body">
					<table class="table table-bordered table-striped nowrap" style="width:100%" id="datatable2">
						<thead>
							<tr>
								<th width="5%">No</th>
								<th>Nama Menu</th>
								<th>Parent</th>
								<th>Child</th>
								<th>Link</th>
								<th width="20%">Icon</th>
								<th width="5%">Urutan</th>
								<th width="5%" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no=1;	
								foreach($menu as $m):?>
								<tr>
									<td><?= $no; ?></td>
									<td><?= $m['nama_menu']; ?></td>
									<td><?= $m['parent']; ?></td>
									<td><?= $m['child']; ?></td>
									<td><?= $m['link']; ?></td>
									<td><?= $m['icon']; ?> <i class="<?= $m['icon']; ?>"></i></td>
									<td><?= $m['urutan']; ?></td>
									 <td class="text-center"><a class="fa fa-edit"
											href="javascript:;"
											data-id="<?php echo $m['id_menu'] ?>"
											data-nama="<?php echo $m['nama_menu'] ?>"
											data-link="<?php echo $m['link'] ?>"
											data-icon="<?php echo $m['icon'] ?>"
											data-urutan="<?php echo $m['urutan'] ?>"
											data-toggle="modal" data-target="#editModal">
										</a>
										<a class="fa fa-trash"
											href="#"
											data-id="<?php echo $m['id_menu'] ?>"
											data-nama="<?php echo $m['nama_menu'] ?>"
											data-toggle="modal" data-target="#hapusModal">
										</a>
								</tr>
							<?php $no++; endforeach; ?>
						</tbody>
					</table>
		</div>
	</div>

<!-- modal add -->
<div class="modal fade" id="addModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data Menu</h4>
      </div>
      <div class="modal-body">
				<form action="/menu/save" method="post" class="form-horizontal">
					<div class="form-group row">
						<div class="col-lg-2">
								<label for="nama_menu" class="control-label">Nama Menu</label>
						</div>
							<div class="col-lg-8">
								<input type="text" class="form-control custom_input" placeholder="Nama Menu" name="nama_menu" id="nama_menu">
							</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-2">
							<label for="link" class="control-label">Link</label>
						</div>
							<div class="col-lg-8">
								<input type="text" class="form-control custom_input" placeholder="Link" name="link" id="link">
							</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-2">
							<label for="icon" class="control-label">Icon</label>
						</div>
							<div class="col-lg-8">
								<!-- <input type="text" class="form-control custom_input" placeholder="icon" name="icon" id="icon">-->
								<div class="input-group">
									<input data-placement="bottomRight" class="form-control custom_input icp icp-auto" value="fas fa-archive" type="text" name="icon" id="icon"/>
										<span class="input-group-addon"></span>
								</div>
							</div>	
					</div>
					<div class="form-group row">
						<div class="col-lg-2">
							<label for="tipe" class="control-label">Tipe</label>
						</div>
							<div class="col-lg-8">
								<select class="form-control custom_input" id="tipe" name="tipe" onchange="load_parent()">
									<option value="0">Parent</option>
									<option value="1">Child</option>
									<option value="2">Grand Child</option>
								</select>
							</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-2">
							<label for="parent" class="control-label">Parent</label>
						</div>
							<div class="col-lg-8">
								<select class="form-control custom_input" id="parent" onChange="load_child()" name="parent" disabled>
							
								</select>
							</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-2">
							<label for="Child" class="control-label">Child</label>
						</div>
							<div class="col-lg-8">
								<select class="form-control custom_input" id="child" name="child" disabled>
								</select>
							</div>
					</div>
      		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default custom_input" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary custom_input"><i class="fa fa-save"></i> Save changes</button>
				</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end modal add -->

<!-- modal edit -->
<div class="modal fade" id="editModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Data Menu</h4>
      </div>
      <div class="modal-body">
		<form action="/menu/update" method="post" class="form-horizontal">
		<div class="form-group row">
		<input type="hidden" name="id" id="editid">	
						<div class="col-lg-2">
								<label for="nama_menu" class="control-label">Nama Menu</label>
						</div>
							<div class="col-lg-8">
								<input type="text" class="form-control custom_input" placeholder="Nama Menu" name="nama_menu" id="editnama_menu">
							</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-2">
							<label for="link" class="control-label">Link</label>
						</div>
							<div class="col-lg-8">
								<input type="text" class="form-control custom_input" placeholder="Link" name="link" id="editlink">
							</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-2">
							<label for="icon" class="control-label">Icon</label>
						</div>
							<div class="col-lg-8">
								<div class="input-group">
									<input data-placement="bottomRight" class="form-control custom_input icp icp-auto" type="text" name="icon" id="editicon"/>
										<span class="input-group-addon"></span>
								</div>
							</div>	
					</div>
					<div class="form-group row">
						<div class="col-lg-2">
							<label for="urutan" class="control-label">Urutan</label>
						</div>
							<div class="col-lg-8">
								<input type="text" class="form-control custom_input" placeholder="Urutan" name="urutan" id="editurutan">
							</div>
					</div>
      		</div>	
      <div class="modal-footer">
        <button type="button" class="btn btn-default custom_input" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary custom_input"><i class="fa fa-save"></i> Save changes</button>
		</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end modal edit -->

<!-- modal hapus -->
<div class="modal fade" id="hapusModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Konfirmasi Hapus Data</h4>
      </div>
      <div class="modal-body">
		<form action="/menu/hapus" method="post" class="delete_action">
			<input type="hidden" name="deletid" id="deletid">					
			<p>Apakah yakin data <br>
			<span id="deletnama"></span><br>
			Akan dihapus ??</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default custom_input" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger custom_input"><i class="fa fa-trash"></i> Delete Data</button>
		</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end modal hapus -->
<script>
$(document).ready(function(){

	var table = $('#datatable2').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );

	<?php if($session->getFlashdata('sukses')==1){ ?>
 		 toastr.success("Data Berhasil Disimpan");
	<?php } ?>

	<?php if($session->getFlashdata('sukses')==2){ ?>
 		 toastr.success("Data Berhasil Diperbarui");
	<?php } ?>

	<?php if($session->getFlashdata('sukses')==3){ ?>
 	 	toastr.error("Data Berhasil Dihapus");
	<?php } ?>


	$('#addModal').on('shown.bs.modal', function () {
  		$('#nama_menu').focus()
	})

	$('#editModal').on('show.bs.modal', function (event) {
        var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
        var modal          = $(this)
        // Isi nilai pada field
        modal.find('#editid').attr("value",div.data('id'));
		modal.find('#editnama_menu').attr("value",div.data('nama'));
		modal.find('#editlink').attr("value",div.data('link'));
		modal.find('#editicon').attr("value",div.data('icon'));
		modal.find('#editurutan').attr("value",div.data('urutan'));
	 });

	 $('#hapusModal').on('show.bs.modal', function (event) {
        var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
        var modal          = $(this)
        // Isi nilai pada field
        modal.find('#deletid').attr("value",div.data('id'));
		modal.find('#deletnama').text(div.data('nama'));
	 });

	 $('.icp-auto').iconpicker();
});
	function load_parent()
		{
			var tipe = $('#tipe').val();
				if(tipe != '0'){
					$('#parent').prop("disabled",false);
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "menu/getparent",
						data: '',
						success: function(msg){
							$("select#parent").html(msg);      
							load_child();
						}
					});              
				}else{
					$('#parent').prop("disabled",true);
				}
		}

		function load_child()
		{
			var tipe = $('#tipe').val();
			var parent = $('#parent').val();
				if(tipe == '2'){
					$('#child').prop("disabled",false);
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "menu/getchild",
						data: "tipe="+tipe+"&parent="+parent,
						success: function(msg){
							$("select#child").html(msg);      
						}
					});            

				}else{
					$('#child').prop("disabled",true);
				}
		}
</script>