 <!--Counter Inbox-->
 <?php
  error_reporting(0);
  $query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
  $query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
  $jum_comment = $query2->num_rows();
  $jum_pesan = $query->num_rows();
  ?>
 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
   <section class="sidebar">

     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
       <li class="header">Menu Utama</li>
       <li class="active">
         <a href="<?php echo base_url() . 'admin/dashboard' ?>">
           <i class="fa fa-home"></i> <span>Dashboard</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-newspaper-o"></i>
           <span>Berita</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="<?php echo base_url() . 'admin/tulisan' ?>"><i class="fa fa-list"></i> List Berita</a></li>
           <li><a href="<?php echo base_url() . 'admin/tulisan/add_tulisan' ?>"><i class="fa fa-thumb-tack"></i> Post Berita</a></li>
           <li><a href="<?php echo base_url() . 'admin/kategori' ?>"><i class="fa fa-wrench"></i> Kategori</a></li>
         </ul>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-cogs"></i>
           <span>Pengaturan</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="<?php echo base_url() . 'admin/pengaturan' ?>"><i class="fa fa-list"></i> Data Puskesmas</a></li>
           <li><a href="<?php echo base_url() . 'admin/pengaturan/header' ?>"><i class="fa fa-picture-o"></i> Header </a></li>
           <!-- <li><a href="<?php echo base_url() . 'admin/pengaturan' ?>"><i class="fa fa-wrench"></i> Kategori</a></li> -->
         </ul>
       </li>

       <!-- <li>
         <a href="<?php echo base_url() . 'admin/program' ?>">
           <i class="fa fa-list"></i> <span>List Program Unggulan</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li> -->
       <li>
         <a href="<?php echo base_url() . 'admin/pengguna' ?>">
           <i class="fa fa-users"></i> <span>Pengguna</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>
       <li>
         <a href="<?php echo base_url() . 'admin/menu' ?>">
           <i class="fa fa-users"></i> <span>Menu / Halaman </span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>
       <!-- <li>
         <a href="<?php echo base_url() . 'admin/agenda' ?>">
           <i class="fa fa-calendar"></i> <span>Agenda</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>
       <li>
         <a href="<?php echo base_url() . 'admin/pengumuman' ?>">
           <i class="fa fa-volume-up"></i> <span>Pengumuman</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li> -->
       <li>
         <a href="<?php echo base_url() . 'admin/files' ?>">
           <i class="fa fa-download"></i> <span>Bank Data</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>
       <!-- <li>
         <a href="<?php echo base_url() . 'admin/loker' ?>">
           <i class="fa fa-download"></i> <span>Lowongan Kerja</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li> -->
       <li class="treeview">
         <a href="#">
           <i class="fa fa-camera"></i>
           <span>Gallery</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="<?php echo base_url() . 'admin/album' ?>"><i class="fa fa-clone"></i> Album</a></li>
           <li><a href="<?php echo base_url() . 'admin/galeri' ?>"><i class="fa fa-picture-o"></i> Photos</a></li>
           <li><a href="<?php echo base_url() . 'admin/video' ?>"><i class="fa fa-camera"></i> Video</a></li>
         </ul>
       </li>

       <li>
         <a href="<?php echo base_url() . 'admin/pegawai' ?>">
           <i class="fa fa-user"></i> <span>Data Pegawai</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>



       <li>
         <a href="<?php echo base_url() . 'admin/inbox' ?>">
           <i class="fa fa-envelope"></i> <span>Inbox</span>
           <span class="pull-right-container">
             <small class="label pull-right bg-green"><?php echo $jum_pesan; ?></small>
           </span>
         </a>
       </li>

       <li>
         <a href="<?php echo base_url() . 'admin/komentar' ?>">
           <i class="fa fa-comments"></i> <span>Komentar</span>
           <span class="pull-right-container">
             <small class="label pull-right bg-green"><?php echo $jum_comment; ?></small>
           </span>
         </a>
       </li>

       <li>
         <a href="<?php echo base_url() . 'admin/survei' ?>">
           <i class="fa fa-comments"></i> <span>Survey</span>

         </a>
       </li>

       <!-- <li class="treeview">
         <a href="#">
           <i class="fa fa-newspaper-o"></i>
           <span>Survey</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">

           <li><a href="<?php echo base_url() . 'admin/survei' ?>"><i class="fa fa-list"></i> Survey</a></li>
           <li><a href="<?php echo base_url() . 'admin/grafik' ?>"><i class="fa fa-bar-chart"></i> Grafik</a></li>
         </ul>
       </li> -->
     </ul>
   </section>
 </aside>