<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>C001 - Dashboard (Normal user)</title>
        <!-- Bootstrap's dependcies -->
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/popper-1.14.3.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/bootstrap.js"></script>
        <!-- Roboto Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> 
        <!-- Awesome Icon -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <script src="js/C001.js"></script>
        <link rel="stylesheet" href="css/C001.css">
    </head>
    <body>
        <?php
            if(isset($_SESSION['status'])) {
                echo "<script>";
                echo "alert('You are logged in');";
                echo "</script>";
                unset($_SESSION['status']);
            }
        ?>
        <nav id="navibar" class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-dark sticky-top">
            <a class="navbar-brand" href="#">
                <img src="img/logo_c9.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                UET graduate forum
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active ml-4">
                                <i class="fas fa-home mr-2"></i>
                                Trang chủ
                            </a>
                        </li>
                    <li class="nav-item">
                        <a
                            href="#"
                            class="nav-link ml-4"
                            data-toggle="popover"
                            data-trigger="focus"
                            data-placement="bottom"
                            data-container="#navibar"
                            data-html="true"
                            title=""
                            data-content="
                                <div class='media pt-2 pb-1 border-bottom border-gray'>
                                    <div class='media-body pb-1 mb-0 small lh-125'>
                                        <div class='d-flex justify-content-between align-items-center w-100'>
                                            <strong class='text-gray-dark'>
                                                <i class='fas fa-landmark mr-2'></i>Lớp QH2016-I/CQ-C-D
                                            </strong>
                                            <span class='d-block small'>3 ngày trước</span>
                                        </div>
                                        <span class='d-block'>Hoàng Việt Hưng đã mở một thăm dò</span>
                                    </div>
                                </div>

                                <div class='media pt-2 pb-1 border-bottom border-gray'>
                                    <div class='media-body pb-1 mb-0 small lh-125'>
                                        <div class='d-flex justify-content-between align-items-center w-100'>
                                            <strong class='text-gray-dark'>
                                                <i class='fas fa-users mr-2'></i>Sinh viên khóa K61
                                            </strong>
                                            <span class='d-block small'>1 tháng trước</span>
                                        </div>
                                        <span class='d-block'>Phòng Đào Tạo đã mở một khảo sát</span>
                                    </div>
                                </div>

                                <div class='media pt-2 pb-1 text-muted border-bottom border-gray'>
                                    <div class='media-body pb-1 mb-0 small lh-125'>
                                        <div class='d-flex justify-content-between align-items-center w-100'>
                                            <strong class='text-gray-dark'>
                                                <i class='fas fa-code mr-2'></i>Sinh viên khoa CNTT
                                            </strong>
                                            <span class='d-block small'>10 giờ trước</span>
                                        </div>
                                        <span class='d-block'>Trần Văn Định đã trả lời bình luận của bạn</span>
                                    </div>
                                </div>
                                
                                <span class='d-block small pt-2 pb-1 '>
                                    <i class='fas fa-caret-down mr-2 align-self-center'></i>
                                    Xem thêm
                                </span>
                            "
                        >
                            <i class="fas fa-bell mr-2"></i>
                            Thông báo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            href="#"
                            class="nav-link ml-4"
                            data-toggle="popover"
                            data-trigger="focus"
                            data-placement="bottom"
                            data-container="#navibar"
                            data-html="true"
                            title=""
                            data-content="
                                <div class='media pt-2 pb-1 border-bottom border-gray'>
                                    <img src='img/ava_blue.svg' alt='32x32' class='mr-2 rounded' style='width: 32px; height: 32px;' data-holder-rendered='true'>
                                    <div class='media-body pb-1 mb-0 small lh-125'>
                                        <div class='d-flex justify-content-between align-items-center w-100'>
                                        <strong class='text-gray-dark'>Hoàng Việt Hưng</strong>
                                        <span class='d-block small'>1 giờ trước</span>
                                        </div>
                                        <span class='d-block'>Đi họp lớp không Hiếu?</span>
                                    </div>
                                </div>

                                <div class='media text-muted pt-2 pb-1 border-bottom border-gray'>
                                    <img src='img/ava_purple.svg' alt='32x32' class='mr-2 rounded' style='width: 32px; height: 32px;' data-holder-rendered='true'>
                                    <div class='media-body pb-1 mb-0 small lh-125'>
                                        <div class='d-flex justify-content-between align-items-center w-100'>
                                        <strong class='text-gray-dark'>Tuấn Hưng</strong>
                                        <span class='d-block small'>2 tuần trước</span>
                                        </div>
                                        <span class='d-block'>Đi hát đê em ei</span>
                                    </div>
                                </div>
                                <div class='media text-muted pt-2 pb-1 border-bottom border-gray'>
                                    <img src='img/ava_purple.svg' alt='32x32' class='mr-2 rounded' style='width: 32px; height: 32px;' data-holder-rendered='true'>
                                    <div class='media-body pb-1 mb-0 small lh-125'>
                                        <div class='d-flex justify-content-between align-items-center w-100'>
                                        <strong class='text-gray-dark'>Mỹ Tâm</strong>
                                        <span class='d-block small'>1 tháng trước</span>
                                        </div>
                                        <span class='d-block'>Xin chào Trần Minh Hiếu!</span>
                                    </div>
                                </div>
                                <span class='d-block small pt-2 pb-1 '>
                                    <i class='fas fa-caret-down mr-2 align-self-center'></i>
                                    Xem thêm
                                </span>
                            "
                        >
                            <i class="fas fa-comment-alt mr-2"></i>
                            <?php
                                if(isset($_SESSION['msv'])) {
                                    echo $_SESSION['msv'];
                                }
                            ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="server.php?profile='1'" class="nav-link ml-4">
                            <i class="fas fa-user mr-2"></i>
                            <?php
                                if(isset($_SESSION['username'])) {
                                    echo $_SESSION['username'];
                                }
                            ?>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div id="left-content" class="col-3 border-right">                    
                    <p class="h6 mt-4">Nhóm</p>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="fas fa-user-graduate mr-2"></i>
                            Cựu sinh viên UET
                            <span class="badge badge-success badge-pill ml-auto">12</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="fas fa-users mr-2"></i>
                            Sinh viên khóa K61
                            <span class="badge badge-success badge-pill ml-auto">3</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="fas fa-code mr-2"></i>
                            Sinh viên khoa CNTT
                            <span class="badge badge-success badge-pill ml-auto">11</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="fas fa-landmark mr-2"></i>
                            Lớp QH2016-I/CQ-C-D
                            <span class="badge badge-success badge-pill ml-auto">1</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="fas fa-book-open mr-2"></i>
                            Thư viện Hội Sinh Viên
                            <span class="badge badge-success badge-pill ml-auto">0</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-caret-down mr-2"></i>
                            Xem thêm...
                        </a>
                    </div>
                    <p class="h6 mt-4">Khảo sát</p>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Khảo sát mức độ hài lòng thu nhập
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Khảo sát địa điểm làm việc
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Thu thập thông tin việc làm của sinh viên
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-caret-down mr-2"></i>
                            Xem thêm...
                        </a>
                    </div>
                </div>
                <div id="middle-content" class="col-6">
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-landmark mr-2"></i>
                                Lớp QH2016-I/CQ-C-D
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Hoàng Việt Hưng đã mở một thăm dò</h5>
                            <p class="card-text">Họp lớp nhân dịp đầu Xuân 2030.</p>
                            <p class="card-text"><small class="text-muted">3 ngày trước</small></p>
                            <a href="#" class="btn btn-outline-success">Chi tiết</a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-users mr-2"></i>
                                Sinh viên khóa K61
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Phòng Đào Tạo đã mở một khảo sát</h5>
                            <p class="card-text">Khảo sát về tỷ lệ sinh viên làm việc liên quan đến công tác giáo dục.</p>
                            <p class="card-text"><small class="text-muted">20/12/2029 (1 tháng trước)</small></p>
                            <a href="#" class="btn btn-outline-success">Chi tiết</a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-code mr-2"></i>
                                Sinh viên khoa CNTT
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Trần Văn Định đã trả lời bình luận của bạn</h5>
                            <p class="card-text">[RE#123][#189] Hôm nay có việc bận.</p>
                            <p class="card-text"><small class="text-muted">10 giờ trước</small></p>
                            <a href="#" class="btn btn-outline-success">Trả lời</a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-landmark mr-2"></i>
                                Lớp QH2016-I/CQ-C-D
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Hoàng Việt Hưng đã mở một thăm dò</h5>
                            <p class="card-text">Họp lớp nhân dịp đầu Xuân 2030.</p>
                            <p class="card-text"><small class="text-muted">3 ngày trước</small></p>
                            <a href="#" class="btn btn-outline-success">Chi tiết</a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-users mr-2"></i>
                                Sinh viên khóa K61
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Phòng Đào Tạo đã mở một khảo sát</h5>
                            <p class="card-text">Khảo sát về tỷ lệ sinh viên làm việc liên quan đến công tác giáo dục.</p>
                            <p class="card-text"><small class="text-muted">20/12/2029 (1 tháng trước)</small></p>
                            <a href="#" class="btn btn-outline-success">Chi tiết</a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-code mr-2"></i>
                                Sinh viên khoa CNTT
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Trần Văn Định đã trả lời bình luận của bạn</h5>
                            <p class="card-text">[RE#123][#189] Hôm nay có việc bận.</p>
                            <p class="card-text"><small class="text-muted">10 giờ trước</small></p>
                            <a href="#" class="btn btn-outline-success">Trả lời</a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-landmark mr-2"></i>
                                Lớp QH2016-I/CQ-C-D
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Hoàng Việt Hưng đã mở một thăm dò</h5>
                            <p class="card-text">Họp lớp nhân dịp đầu Xuân 2030.</p>
                            <p class="card-text"><small class="text-muted">3 ngày trước</small></p>
                            <a href="#" class="btn btn-outline-success">Chi tiết</a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-users mr-2"></i>
                                Sinh viên khóa K61
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Phòng Đào Tạo đã mở một khảo sát</h5>
                            <p class="card-text">Khảo sát về tỷ lệ sinh viên làm việc liên quan đến công tác giáo dục.</p>
                            <p class="card-text"><small class="text-muted">20/12/2029 (1 tháng trước)</small></p>
                            <a href="#" class="btn btn-outline-success">Chi tiết</a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-code mr-2"></i>
                                Sinh viên khoa CNTT
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Trần Văn Định đã trả lời bình luận của bạn</h5>
                            <p class="card-text">[RE#123][#189] Hôm nay có việc bận.</p>
                            <p class="card-text"><small class="text-muted">10 giờ trước</small></p>
                            <a href="#" class="btn btn-outline-success">Trả lời</a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-landmark mr-2"></i>
                                Lớp QH2016-I/CQ-C-D
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Hoàng Việt Hưng đã mở một thăm dò</h5>
                            <p class="card-text">Họp lớp nhân dịp đầu Xuân 2030.</p>
                            <p class="card-text"><small class="text-muted">3 ngày trước</small></p>
                            <a href="#" class="btn btn-outline-success">Chi tiết</a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-users mr-2"></i>
                                Sinh viên khóa K61
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Phòng Đào Tạo đã mở một khảo sát</h5>
                            <p class="card-text">Khảo sát về tỷ lệ sinh viên làm việc liên quan đến công tác giáo dục.</p>
                            <p class="card-text"><small class="text-muted">20/12/2029 (1 tháng trước)</small></p>
                            <a href="#" class="btn btn-outline-success">Chi tiết</a>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">
                                <i class="fas fa-code mr-2"></i>
                                Sinh viên khoa CNTT
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Trần Văn Định đã trả lời bình luận của bạn</h5>
                            <p class="card-text">[RE#123][#189] Hôm nay có việc bận.</p>
                            <p class="card-text"><small class="text-muted">10 giờ trước</small></p>
                            <a href="#" class="btn btn-outline-success">Trả lời</a>
                        </div>
                    </div>
                </div>
                <div id="right-content" class="col-3 border-left">
                    <div class="row">
                        <div class="col-12 border-bottom pb-3">
                            <p class="h6 mt-4">Tin tức mới</p>
                            <a href="#" class="text-secondary">
                                <i class="fas fa-external-link-alt mr-2"></i>
                                Đội UET-XXX giành giải nhất cuộc thi ABCXYZ
                            </a>
                            <br/>
                            <a href="#" class="text-secondary">
                                <i class="fas fa-external-link-alt mr-2"></i>
                                Hội nghị AI4Life lần thứ 8 diễn ra thành công
                            </a>
                            <br/>
                            <a href="#" class="text-secondary">
                                <i class="fas fa-external-link-alt mr-2"></i>
                                Trao học bổng CDEFGH
                            </a>
                            <br/>
                            <a href="#" class="text-secondary">
                                <i class="fas fa-external-link-alt mr-2"></i>
                                ĐHQGHN đạt top 1 Châu Á theo BXH QSXYZ
                            </a>
                            <br/>
                            <a href="#" class="text-secondary">
                                <i class="fas fa-external-link-alt mr-2"></i>
                                ĐH Công Nghệ triển khai đào tạo tiến sĩ
                            </a>
                            <br/>
                            <a class="text-secondary">
                                <i class="fas fa-caret-down mr-2"></i>
                                Xem thêm...
                            </a>
                            <br/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="h6 mt-4">Liên hệ gần đây</p>
                            <div 
                                class="media text-muted pt-3"
                                data-toggle="popover" data-trigger="hover"
                                data-html="true"
                                title="
                                    Trần Văn Định
                                "
                                data-content="
                                    <i class='fas fa-id-card mr-2'></i>
                                    16020XXX
                                    <br/>
                                    <i class='fas fa-building mr-2'></i>
                                    Giám đốc tại FPT
                                    <br/>
                                    <i class='fas fa-landmark mr-2'></i>
                                    Lớp QH2016-I/CQ-C-D
                                    <br/>
                                "
                            >
                                <img src="img/ava_pink.svg"" alt="" class="mr-2 rounded" width="40px;">
                                <div class="media-body pb-1 mb-0 lh-125">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <a href="#" class="text-muted"><strong class="text-gray-dark">Trần Văn Định</strong></a>
                                        <i class="fas fa-circle small text-success"></i>
                                    </div>
                                    <span class="d-block small">Đang hoạt động</span>
                                </div>
                            </div>
                            <div 
                                class="media text-muted pt-3"
                                data-toggle="popover" data-trigger="hover"
                                data-html="true"
                                title="
                                    Hoàng Việt Hưng
                                "
                                data-content="
                                    <i class='fas fa-id-card mr-2'></i>
                                    16020XXX
                                    <br/>
                                    <i class='fas fa-building mr-2'></i>
                                    CEO tại Amazon
                                    <br/>
                                    <i class='fas fa-landmark mr-2'></i>
                                    Lớp QH2016-I/CQ-C-D
                                    <br/>
                                "
                            >
                                <img src="img/ava_blue.svg"" alt="" class="mr-2 rounded" width="40px;">
                                <div class="media-body pb-1 mb-0 lh-125">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Hoàng Việt Hưng</strong>
                                        <i class="fas fa-circle small"></i>
                                    </div>
                                    <span class="d-block small">Hoạt động 7 phút trước</span>
                                </div>
                            </div>
                            <div 
                                class="media text-muted pt-3"
                                data-toggle="popover" data-trigger="hover"
                                data-html="true"
                                title="
                                    Tuấn Hưng
                                "
                                data-content="
                                    <i class='fas fa-id-card mr-2'></i>
                                    16020XXX
                                    <br/>
                                    <i class='fas fa-building mr-2'></i>
                                    Thánh Nhọ tại Hà Nội
                                    <br/>
                                    <i class='fas fa-landmark mr-2'></i>
                                    Lớp QH2016-I/CQ-C-D
                                    <br/>
                                "
                            >
                                <img src="img/ava_purple.svg"" alt="" class="mr-2 rounded" width="40px;">
                                <div class="media-body pb-1 mb-0 lh-125">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Tuấn Hưng</strong>
                                        <i class="fas fa-circle small"></i>
                                    </div>
                                    <span class="d-block small">Hoạt động 3 giờ trước</span>
                                </div>
                            </div>
                            <div 
                                class="media text-muted pt-3"
                                data-toggle="popover" data-trigger="hover"
                                data-html="true"
                                title="
                                    Mỹ Tâm
                                "
                                data-content="
                                    <i class='fas fa-id-card mr-2'></i>
                                    16020XXX
                                    <br/>
                                    <i class='fas fa-building mr-2'></i>
                                    Ca sỹ
                                    <br/>
                                    <i class='fas fa-landmark mr-2'></i>
                                    Lớp QH2016-I/CQ-C-D
                                    <br/>
                                "
                            >
                                <img src="img/ava_purple.svg"" alt="" class="mr-2 rounded" width="40px;">
                                <div class="media-body pb-1 mb-0 lh-125">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Mỹ Tâm</strong>
                                        <i class="fas fa-circle small"></i>
                                    </div>
                                    <span class="d-block small">Hoạt động 1 tháng trước</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <div class="form-row align-items-center">
                            <div class="col-10 mt-3">
                                <input type="text" class="form-control" placeholder="Tìm kiếm người dùng">
                            </div>
                            <div class="col-2 mt-3">
                                <button class="btn btn-outline-success">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>

            </div>
        </div>

    </body>
</html>
