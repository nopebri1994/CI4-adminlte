  <?php 
    use App\Models\Menu_model;
    $uri = current_url(true);
    $model = new Menu_model();
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Nopebri Ade Cadra</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU </li>
        <!-- Optionally, you can add icons to the links -->
        <!-- ambil menu db -->
        <?php
          $tipe1='1';
          $tipe2='2';
          foreach($menu as $m):
            if($m['link'] == '#home'){
              $link=base_url().'/';
            }else{
              $link=base_url('').'/'.$m['link'];
            }
             $dataparent = $model->getChild($tipe1,$m['nama_menu']);
             $tmp_parent=0;
             if(count($dataparent)>0){           
                 $active='';
                 $active2='';
                 foreach($dataparent as $dp1): 
                  $datachild = $model->getgrandChild($tipe2,$m['nama_menu'],$dp1['nama_menu']);   
                  if(count($datachild)== 0 and $tmp_parent == 0){
                    // level one
                    $tmp_parent=1;
                       foreach($dataparent as $dp):   
                          $linksub=base_url('').'/'.$dp['link'];  
                          if($uri == $linksub){ $active="active"; }
                        endforeach; ?>
                          <li class="treeview <?= $active; ?>">
                            <a href="<?= base_url('#') ?>"><i class="<?= $m['icon']?>"></i><span class="text_menu"><?= $m['nama_menu']?></span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                                 <ul class="treeview-menu">
                                  <?php foreach($dataparent as $dp): 
                                    $linksub2=base_url('').'/'.$dp['link'];     
                                        ?>
                                      <li <?php if($uri == $linksub2){ echo "class='active'"; }?>><a href="<?= $dp['link']?>"><i class="<?= $dp['icon']?>"></i><span class="text_menu"><?= $dp['nama_menu']?></span></a></li>
                                <?php endforeach; ?>
                                    </ul>
                                  </li>
                      <!-- end level one -->
            <?php
                }elseif(count($datachild)>0 and $tmp_parent == 0){
                  $tmp_parent=1;
            ?>
            <!-- multi level two -->
                          <?php
                                  foreach($dataparent as $dp):   
                                    foreach($datachild as $dcc){
                                      $linksub2=base_url('').'/'.$dcc['link'];  
                                      if($uri == $linksub2){ $active2="active"; }
                                    }
                                     $linksub=base_url('').'/'.$dp['link'];  
                                      if($uri == $linksub){ $active="active"; }
                                  endforeach; ?>
                                  <li class="treeview <?= $active; ?><?= $active2; ?>">
                                      <a href="<?= base_url('#') ?>"><i class="<?= $m['icon']?>"></i><span class="text_menu"><?= $m['nama_menu']; ?></span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                      </a>
                                      <ul class="treeview-menu">
                                      <?php 
                                        foreach($dataparent as $dp): 
                                          $datachild = $model->getgrandChild($tipe2,$m['nama_menu'],$dp['nama_menu']);
                                          if(count($datachild)==0){
                                          $linksub2=base_url('').'/'.$dp['link'];     
                                      ?>
                                          <li <?php if($uri == $linksub2){ echo "class='active'"; }?>><a href="<?= $dp['link']?>"><i class="<?= $dp['icon']?>"></i><span class="text_menu"><?= $dp['nama_menu']?></span></a></li>
                                      <?php }else{
                                              foreach($datachild as $dcc){
                                                $linksub=base_url('').'/'.$dcc['link'];  
                                                if($uri == $linksub){ $active2="active"; }
                                              }
                                        ?>
                                        <li class="treeview <?= $active2 ?>">
                                          <a href="<?= base_url('#')?>"><i class="<?= $dp['icon']?>"></i><span class="text_menu"><?= $dp['nama_menu']?></span>
                                            <span class="pull-right-container">
                                              <i class="fa fa-angle-left pull-right"></i>
                                            </span>
                                          </a>
                                          <ul class="treeview-menu">
                                          <?php
                                          $active3='';
                                            foreach($datachild as $dcc){
                                                $linksub=base_url('').'/'.$dcc['link'];  
                                                if($uri == $linksub){ $active3="active"; }
                                              }
                                            ?>
                                            <?php foreach($datachild as $dc): ?>
                                            <li class="<?= $active3; ?>"><a href="<?= $dc['link']?>"><i class="<?= $dc['icon'] ?>"></i><span class="text_menu"><?= $dc['nama_menu']?></span></a></li>
                                            <?php endforeach; ?>
                                          </ul>
                                        </li>
                                            <?php } endforeach; ?>
                                      </ul>
                                    </li>

          <!-- end level two -->
          <?php 
          } endforeach; }elseif($m['tipe']==0){
        ?>
         <!-- main menu -->
           <li <?php if($uri == $link){ echo 'class="active"'; }?>><a href="<?= $link ?>"><i class="<?= $m['icon']?>"></i><span class="text_menu"><?= $m['nama_menu'] ?></span></a></li>
        <?php } endforeach; ?>
         <!-- end main menu -->
        <!-- end ambil menu -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>