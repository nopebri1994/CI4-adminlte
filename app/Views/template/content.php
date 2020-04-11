 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
		<?= $t_header; ?>
        <small><?= $desc; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fab fa-dashcube">
		<?= $bred; ?>
      </ol>
    </section>
	
    <!-- Main content -->
    <section class="content container-fluid">
		<?= $contents ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->