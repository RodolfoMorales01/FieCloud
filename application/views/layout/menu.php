  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>img/perfil.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('s_usu');?> </p>
          <!-- Status -->
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><center><h4><b><font color="white">MEN&Uacute;</font></b></h3></center></li>
        <li class="active">
          <a href="<?= site_url('cinicio')?>"><i class="fa fa-cloud"></i> <span>Mi Unidad</span></a>
        </li>
        <li class="treeview">
          <a href="<?= site_url('ccompartir')?>"><i class="fa fa-users"></i><span>Compartidos</span></a>
        </li>
        <li class="treeview">
          <a href="<?= site_url('cpapelera')?>"><i class="fa fa-trash"></i><span>Papelera</span></a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="content">