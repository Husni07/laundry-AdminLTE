<?php
include 'navbar.php';
include 'sidebar.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <?php
            $page = @$_GET["page"];
            if ($page == "outlet") {
                include 'outlet.php';
            } else if ($page == "paket") {
                include 'paket.php';
            } else if ($page == "user") {
                include 'user.php';
            } else if ($page == "pelanggan") {
                include 'pelanggan.php';
            } else if ($page == "transaksi") {
                include 'transaksi.php';
            } else if ($page == "laporan") {
                include 'laporan.php';
            } else {
                include 'dashboard.php';
            }
            ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<?php
include 'footer.php';
?>