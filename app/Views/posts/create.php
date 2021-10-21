<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/assets/alte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/assets/alte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/alte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
</li>
          <li class="nav-item">
            <a href="/admin/posts" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                My Posts
              </p>
            </a>
</li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">My Posts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <!-- Main Content-->
    <div class="container">
    <div class="card">
  <div class="card-header">
    Form Tambah Posts
  </div>
  <div class="card-body">

  <form action="/admin/posts/store" method="POST">
      <div class="row">
  <div class="col-md-4">
      <div class ="form-grup">
          <label for="judul" >Judul Postingan</label>
          <input type="text" class="form-control  <?= ($validation->hasError('judul')) ? 'is-invalid' : '';?>" id="judul" name="judul">
          <?php if ($validation->hasError('judul')): ?>
            <div class="invalid-feedback">
                <?=$validation->getError("judul"); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class ="form-grup">
            <label for="slug" >Slug</label>
            <input type="text" class="form-control <?= ($validation->hasError('slug')) ? 'is-invalid' : '';?>" id="slug" name="slug">
            <?php if ($validation->hasError('slug')): ?>
            <div class="invalid-feedback">
                <?=$validation->getError("slug"); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class ="form-grup">
            <label for="kategori" >Kategori Postingan</label>
            <input type="text" class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : '';?>" id="kategori" name="kategori">
            <?php if ($validation->hasError('kategori')): ?>
            <div class="invalid-feedback">
                <?=$validation->getError("kategori"); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class ="form-grup">
            <label for="author" >Author</label>
            <input type="text" class="form-control <?= ($validation->hasError('author')) ? 'is-invalid' : '';?> " id="author" name="author">
            <?php if ($validation->hasError('author')): ?>
            <div class="invalid-feedback">
                <?=$validation->getError("author"); ?>
            </div>
          <?php endif; ?>
        </div><br>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-paper-plane"></i>Submit</button>
        </div>

        <div class ="col-md-8">
            <label for="deskripsi">Deskripsi Postingan</label><br>
            <textarea name="deskripsi" id="deskripsi" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : '';?>"></textarea>
            <?php if($validation->hasError('deskripsi')) : ?>
            <div class="invalid-feedback">
              <?= $validation->getError("deskripsi"); ?>
            </div>
            <?php endif;?>
          </div>
    </div>
  </form>
    
</div>
    </div> 
</div>
    <!-- bakal diubah-->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?= $this->endSection(); ?>

<?=$this->section('myscript'); ?>
<script>
    $('#deskripsi').summernote()
</script>
<?=$this->endSection(); ?>