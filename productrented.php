<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Khang Thi's Product</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php require_once 'functions.php'; ?>
    <?php require_once 'addproduct.php'; ?>
    <?php require_once 'config.php';?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Khang Thi Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Bảng điều khiển</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tổng quan
            </div>

            <!-- Nav Item - Store Info Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInfo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-user"></i>
                    <span>Thông tin cửa hàng</span>
                </a>
                <div id="collapseInfo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="storeinfo.html">Thông tin</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-file-signature"></i>
                    <span>Quản lý hợp đồng</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="contract.html">Thông tin hợp đồng</a>
                        <a class="collapse-item" href="contract.html">Chưa thanh toán</a>
                        <a class="collapse-item" href="contract.html">Đã thanh toán</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-motorcycle"></i>
                    <span>Quản lý xe</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="product.php">Tất cả xe</a>
                        <a class="collapse-item" href="productready.php">Xe sẵn sàng</a>
                        <a class="collapse-item active" href="productrented.php">Xe đang thuê</a>
                        <a class="collapse-item" href="productdeadline.php">Xe tới hạn trả</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Term -->
            <li class="nav-item">
                <a class="nav-link" href="term.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Điều khoản dịch vụ</span></a>
            </li>

            <!-- Nav Item - Wallet -->
            <li class="nav-item">
                <a class="nav-link" href="property.html">
                    <i class="fas fa-wallet"></i>
                    <span>Tài sản cửa hàng</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="revenue.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Thống kê doanh thu</span></a>
            </li>

            <!-- Nav Item - Support -->
            <li class="nav-item" style="margin-left: 3px;">
                <a class="nav-link" href="support.html">
                    <i class="fas fa-info-circle"></i>
                    <span>Hỗ trợ</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Thành</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Thông tin
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cài đặt
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Nhật ký hoạt động
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Danh Sách Xe Đang Được Thuê</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 card-product">
                            <div class="sub-card-product">
                                <h6 class="m-0 font-weight-bold text-primary">Loại Xe</h6>
                                <select name="Loaixe" id="Loaixe" class="card-select-product">
                                    <option value="0">Tất cả</option>

                                </select>
                            </div>

                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#exampleModalLong">Thêm xe </button>

                            <form action="addproduct.php" method="post" enctype="multipart/form-data" class="modal fade"
                                id="exampleModalLong" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Thêm xe</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body_item">
                                                <label for="">Chọn hình ảnh xe<sup>*</sup></label>
                                                <input class="card-body_input" type="file" id="HinhAnh" name="HinhAnh"
                                                    multiple require>
                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Tên xe<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="TenXe" name="TenXe"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Biển số xe<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="BienSoXe" name="BienSoXe"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Khung xe<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="KhungXe" name="KhungXe"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Màu sắc<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="MauSac" name="MauSac"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Năm đăng ký<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="NamDangKy"
                                                    name="NamDangKy" required>

                                            </div>
                                            <?php 
                                        
                                        $sql = "select * from loaixe"; 
                                        $result=$link->query($sql);
                                        ?>
                                            <div class="card-body_item ">
                                                <label for="">Loại xe<sup>*</sup></label>
                                                <select name="TenLoaiXe" id="TenLoaiXe">
                                                    <?php 
                                                 foreach($result as $tl){
                                                echo " <option value=".$tl['MaLoaiXe'].">".$tl['TenLoaiXe']."</option>";
                                            }
                                            ?>

                                                </select>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Tình trạng xe<sup>*</sup></label>
                                                <select id="TrangThai" name="TrangThai">
                                                    <option value="Sẵn Sàng">Sẵn Sàng</option>
                                                    <option value="Đang Được Thuê">Đang Được Thuê</option>
                                                    <option value="Tới Hạn Trả">Tới Hạn Trả</option>

                                                </select>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Giá Thành<sup>*</sup></label>
                                                <input class="card-body_input" type="number" id="GiaThanh"
                                                    name="GiaThanh" min="0" required>

                                            </div>

                                            <div class="card-body_item">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Đóng</button>
                                            <input type="submit" id="submit" name="submit" class="btn btn-primary"
                                                value="Thêm mới">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php $result =$link->query("SELECT chitietxe.MaXe,chitietxe.TenXe,chitietxe.MaLoaiXe,chitietxe.BienSoXe,chitietxe.KhungXe,chitietxe.MauSac,chitietxe.NamDangKy,chitietxe.TrangThai,chitietxe.HinhAnh,chitietxe.GiaThanh,loaixe.TenLoaiXe,loaixe.SoLuong FROM (chitietxe inner join loaixe on chitietxe.MaLoaiXe = loaixe.MaLoaiXe) where chitietxe.TrangThai='Đang Được Thuê'")?>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>Mã xe</th>
                                            <th>Tên xe</th>
                                            <th>Loại Xe</th>
                                            <th>Tình trạng xe</th>
                                            <th>Giá</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>

                                    <tbody id="chitietxe">
                                        <?php while($row=$result->fetch_assoc()): ?>

                                        <tr>
                                            <td><?php echo $row['MaXe'];?></td>
                                            <td><?php echo $row['TenXe'];?></td>
                                            <td><?php echo $row['TenLoaiXe'];?></td>
                                            <td class="card-status-ready"><?php echo $row['TrangThai'];?></td>
                                            <td><?php echo $row['GiaThanh']."đ";?></td>
                                            <td class="card-table-item">
                                                <a href="detailproductready.php?MaXe=<?php echo $row ['MaXe']; ?>"
                                                    class="card-table-link">
                                                    <i class="fas fa-info-circle card-table-icon"></i>
                                                </a>
                                                <p class='card-table-link'
                                                    style='margin-bottom:0;margin-left:15px;cursor:pointer'
                                                    title='Update Record'
                                                    data-target='#exampleModalLong<?php echo $row ['MaXe']; ?>'
                                                    data-toggle='modal'><i
                                                        class='fas fa-edit card-table-icon update-config'></i>

                                                <form action='updateproduct.php?MaXe=<?php echo $row ['MaXe']; ?>'
                                                    method='post' enctype='multipart/form-data' class='modal fade'
                                                    id='exampleModalLong<?php echo $row ['MaXe']; ?>' tabindex='-1'
                                                    role='dialog'
                                                    aria-labelledby='exampleModalLongTitle<?php echo $row ['MaXe']; ?>'
                                                    aria-hidden='true'>
                                                    <div class='modal-dialog' role='document'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <h5 class='modal-title'
                                                                    id='exampleModalLongTitle<?php echo $row ['MaXe']; ?>'>
                                                                    Cập nhật xe</h5>
                                                                <button type='button' class='close' data-dismiss='modal'
                                                                    aria-label='Close'>
                                                                    <span aria-hidden='true'>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class='modal-body'>
                                                                <div class='card-body_item'>
                                                                    <label for=''>Chọn hình ảnh xe<sup>*</sup></label>
                                                                    <input class='card-body_input' type='file'
                                                                        name='HinhAnh'
                                                                        value=' <?php echo $row ['HinhAnh']; ?>'
                                                                        multiple require>
                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>Tên xe<sup>*</sup></label>
                                                                    <input class='card-body_input' type='text'
                                                                        name='TenXe'
                                                                        value='<?php echo $row ['TenXe']; ?>' required>

                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>Biển số xe<sup>*</sup></label>
                                                                    <input class='card-body_input' type='text'
                                                                        name='BienSoXe'
                                                                        value='<?php echo $row ['BienSoXe']; ?>'
                                                                        required>

                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>Khung Xe<sup>*</sup></label>
                                                                    <input class='card-body_input' type='text'
                                                                        name='KhungXe'
                                                                        value='<?php echo $row ['KhungXe']; ?>'
                                                                        required>

                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>Màu Sắc<sup>*</sup></label>
                                                                    <input class='card-body_input' type='text'
                                                                        name='MauSac'
                                                                        value='<?php echo $row ['MauSac']; ?>' required>

                                                                </div>

                                                                <div class='card-body_item '>
                                                                    <label for=''>Năm đăng ký<sup>*</sup></label>
                                                                    <input class='card-body_input' type='text'
                                                                        name='NamDangKy'
                                                                        value='<?php echo $row ['NamDangKy']; ?>'
                                                                        required>

                                                                </div>


                                                                <div class='card-body_item '>
                                                                    <label for=''>Loại xe<sup>*</sup></label>

                                                                    <select name='TenLoaiXe1' id='TenLoaiXe1'>
                                                                        <option
                                                                            value='<?php echo $row ['MaLoaiXe']; ?>'>
                                                                            <?php echo $row ['TenLoaiXe']; ?></option>;
                                                                        <?php
                                                              $MaLoaiXe=$row ['MaLoaiXe']; 
                                                                $sql1="SELECT MaLoaiXe,TenLoaiXe FROM `loaixe` where MaLoaiXe NOT in (SELECT MaLoaiXe from `loaixe` where MaLoaiXe=$MaLoaiXe)";
                                                               $result1=$link->query($sql1);                                                        
                                                              ?>
                                                                        <?php 
                                                           foreach($result1 as $tl1){
                                                           ?>
                                                                        <option
                                                                            value="<?php echo $tl1 ['MaLoaiXe']; ?>">
                                                                            <?php echo $tl1 ['TenLoaiXe']; ?></option>
                                                                        <?php
                                                              }
                                                           ?>
                                                                    </select>

                                                                </div>

                                                                <div class="card-body_item ">
                                                                    <label for="">Trạng Thái<sup>*</sup></label>
                                                                    <select id="TrangThai" name="TrangThai">
                                                                        <?php 
                                                                 $TrangThai=$row ['TrangThai'];
                                                                $array=['Sẵn Sàng','Đang Được Thuê','Tới Hạn Trả'];
                                                             foreach($array as $tt){
                                                             ?>
                                                                        <option value="<?php echo $tt;?>"
                                                                            <?php if($tt==$TrangThai) echo 'selected';?>>
                                                                            <?php echo $tt;?>
                                                                        </option>
                                                                        <?php
                                                                }
                                                             ?>


                                                                    </select>

                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>Giá<sup>*</sup></label>
                                                                    <input class='card-body_input' type='number'
                                                                        name='GiaThanh' min='0'
                                                                        value='<?php echo $row ['GiaThanh']; ?>'
                                                                        required>

                                                                </div>

                                                                <div class='card-body_item'>

                                                                </div>
                                                            </div>
                                                            <div class='modal-footer'>
                                                                <button type='button' class='btn btn-secondary'
                                                                    data-dismiss='modal'>Đóng</button>
                                                                <input type='submit' name='submit'
                                                                    class='btn btn-primary' value='Cập nhật'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                </p>
                                                <a href="deleteproduct.php?MaXe=<?php echo $row ['MaXe']; ?>"
                                                    class="card-table-link">
                                                    <i class="fas fa-trash-alt card-table-icon"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Bản quyền &copy; Khang Thị Company</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        function loadData(type, MaLoaiXe) {
            $.ajax({
                url: "loadxedangthue.php",
                type: "POST",
                data: {
                    type: type,
                    id: MaLoaiXe
                },
                success: function(data) {
                    if (type == "Loadxedangthue") {
                        $("#chitietxe").html(data);

                    } else {
                        $("#Loaixe").append(data);

                    }
                }
            });
        }
        loadData();
        $("#Loaixe").on("change", function() {
            var Loaixe = $("#Loaixe").val();
            loadData("Loadxedangthue", Loaixe);
        });
    });
    </script>

</body>

</html>