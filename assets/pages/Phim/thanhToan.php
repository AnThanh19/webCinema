<?php
require "../../../db/dbhelper.php";
if (isset($_GET['sohd'])) {
    $sohd = $_GET['sohd'];
}

$sql1    = "SELECT * FROM `sanpham` ";
$result1 = executeResult($sql1);

if (!empty($_POST)) {
    
    foreach ($result1 as $row1) 
    {
        if (isset($_POST["sl$row1[0]"])) 
        {
            $sl=0;
            $sl = $_POST["sl$row1[0]"];
            $thanhtien= $sl * $row1[2];
            if ($sl>0) {
                $sql4 = "INSERT INTO `cthd`(`MASP`, `SOHD`, `SOLUONG`, `THANHTIEN`) 
                        VALUES ('$row1[0]','$sohd','$sl','$thanhtien') ";
                execute($sql4);
            }
        }   
    }
    
    header('Location: ../../users/userInfo.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/header__logo.png">
    <title>CineSV Cinema</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../../fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/grid.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="./thanhToan.css">
</head>
<body>
  <div class="app">
    <header class="header">
        <a href="../../../index.php" class="header__logo hide-on-tablet-mobile">
            <img src="../../img/logo-sv" alt="" class="header__logo-img">
        </a>
        
        <label for="tablet-mobile-bars-checkbox" class="header__bars">
            <i class="header__bars-icon fas fa-bars"></i>
        </label>
        <input type="checkbox" hidden id="tablet-mobile-bars-checkbox" class="header__navbar-bars-checkbox">
        <label for="tablet-mobile-bars-checkbox" class="nav__overlay"></label>
        <nav class="navbar">
            <ul class="navbar-list">
                <li class="navbar-item noHover">
                    <label for="subnav-film-checkbox" class="navbar-link">Phim</label>
                    <input type="checkbox" hidden id="subnav-film-checkbox" class="suvnav-checkbox">                      
                    
                        <ul class="subnav-list">
                            <li class="subnav-item">
                                <a href="./phimDangChieu.php" class="subnav-link">Phim đang chiếu</a>
                            </li>
                            <li class="subnav-item">
                                <a href="./phimSapChieu.php" class="subnav-link">Phim sắp chiếu</a>
                            </li>
                        </ul>
                    
                </li>
                <li class="navbar-item">
                        <a href="../Rap/allRap.php" class="navbar-link">Rạp phim</a>
    
                </li>
                <li class="navbar-item">
                        <a href="../tintuc/tinTuc.php" class="navbar-link">Tin tức</a>
    
                </li>
                
            </ul>
            
        </nav>
        <div>
        <div class="header__user" id="block_info_user">
                <div class="header__user-info">
                    <i class="header__user-icon fas fa-user-circle"></i>
                    <span id="usernameCineSV" class="header__user-name"></span>
                </div>
                <div class="header__user-options">
                    <ul class="user-options-list">
                        <li class="user-options-item">
                            <a href="../../users/userInfo.php" class="user-option-link">Tài khoản</a>
                        </li>
                        <!-- <li class="user-options-item">
                            <a href="" class="user-option-link">Cài đặt</a>
                        </li> -->
                        <li class="user-options-item">
                            <a href="../../../logout.php" class="user-option-link">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="login" id="block_login_register">
                <ul class="login-list">
                    <li class="login-item login-item-sign-in">
                        <label class="login-link js-login-form">Đăng nhập</label>
                    </li>
                    <li class="login-item login-item-register">
                        <label class="login-link js-register-form">Đăng ký</label>
                    </li>
                </ul>
            </div>       
            </div>
    </header>

    <div class="content">
        <div class="grid wide">
            <label class="title-content" >Bạn đã đặt vé thành công!!!</label>
            <h2>Tiếp tục đặt bắp nước hoặc bỏ qua!</h2>
            <a href="../../users/userInfo.php">
                <button class="btn btn-success" style="max-width: 80px;border-radius: 5px;">Bỏ qua</button>
            </a>
            <form method="post">
            <?php
                require_once('../../../db/dbhelper.php');
                $sql          = "SELECT * FROM `sanpham` ";
                $result = executeResult($sql);
                $i=0;
                foreach ($result as $row) 
                {
                    $i++;
                    if( $i %2 != 0 )
                    {
                        if( $i ==1 ) echo "<div class='row content-row'>";
                        else
                            echo"</div> <div class='row content-row'>";
                    }
                    echo"   <div class='col l-2 m-2 c-4 content-item'>
                                <img src='../../img/bapnuoc/$row[3]' >
                            </div>
                            <div class='col l-4 m-4 c-8 content-item'>
                                <div class='product-title'>$row[1]</div>
                                <div class='product-desc'>
                                    **Nhận trong ngày xem phim**
                                </div>
                                <div class='product-num-price'>
                                    <div class='product-price'>
                                        <span>Giá:</span>
                                        <span class='price'>$row[2] &nbsp;VNĐ</span>
                                    </div>";?>
                                <div class='product-num'>
                                    
                                    <input onclick="var resultss = document.getElementById('sl<?=$row[0]?>'); var qty = resultss.value; 
                                    if(!isNaN(qty) && (qty>0)) resultss.value--;" type='button' value='-' />
                                    <input id='sl<?=$row[0]?>' style="text-align: center; width: 50px;" min='0' name='sl<?=$row[0]?>' type='number' value='0' />
                                    <input onclick="var resultss = document.getElementById('sl<?=$row[0]?>'); var qty = resultss.value; 
                                    if(!isNaN(qty)) resultss.value++;" type='button' value='+' />
<?php
                            echo"    </div> 
                                </div>
                            </div>";
                }
                echo "</div>"
            ?>
            
            <button style="width: 120px;float: right;" class="btn primary-btn bill-btn">Đặt</button>
            </div>
            </form>
        </div>
    </div>


    <footer class="footer">
        <div class="grid wide">
            <div class="row footer-row">
                <div class="col l-3 m-4 c-6">
                    <h3 class="footer-title">CineSV</h3>
                    <ul class="footer-list">
                        <a href="" class="footer-link">Giới thiệu</a>
                        <a href="" class="footer-link">Tiện ích Online</a>
                        <a href="" class="footer-link">Thẻ quà tặng</a>
                        <a href="" class="footer-link">Tuyển dụng</a>
                        <a href="" class="footer-link">Liên hệ quảng cáo</a>
                    </ul>
                </div>

                <div class="col l-3 m-4 c-6">
                    <h3 class="footer-title">Điều khoản sử dụng</h3>
                    <ul class="footer-list">
                        <a href="" class="footer-link">Điều khoản chung</a>
                        <a href="" class="footer-link">Điều khoản giao dịch</a>
                        <a href="" class="footer-link">Chính sách thanh toán</a>
                        <a href="" class="footer-link">Chính sách bảo mật</a>
                        <a href="" class="footer-link">Câu hỏi thường gặp</a>
                    </ul>
                </div>

                <div class="col l-3 m-4 c-6 footer-socials">
                    <h3 class="footer-title">CineSV</h3>
                    <a href="https://www.facebook.com/Tins.Grace.vl/" target="_blank" class="footer-link-socials">
                        <i class="footer-icon-socials fab fa-facebook-square" style="color: rgb(12, 55, 150); padding-left: 0;"></i>
                    </a>
                    <a href="https://www.instagram.com/lethanhtin____/" target="_blank" class="footer-link-socials">
                        <i class="footer-icon-socials fab fa-instagram-square"  style="color: rgb(219, 58, 152);"></i>
                    </a>
                    <a href="https://www.youtube.com/cgvvietnam" target="_blank" class="footer-link-socials">
                        <i class="footer-icon-socials fab fa-youtube-square" style="color: rgb(161, 31, 31);"></i>
                    </a>
                    <a href="https://twitter.com/CGV_ID" target="_blank" class="footer-link-socials">
                        <i class="footer-icon-socials fab fa-twitter-square" style="color: rgb(42, 146, 187);"></i>
                    </a>
                    <a href="http://online.gov.vn/Home/WebDetails/30270" target="_blank" class="bo-cong-thuong"></a>
                </div>

                <div class="col l-3 m-4 c-6 hide-on-tablet">
                    <h3 class="footer-title">Chăm sóc khách hàng</h3>
                    <ul class="footer-list">
                            <h4 href="" class="footer-link">Hotline: 1900 6017</h4>
                            <h4 href="" class="footer-link">Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ Tết)</h4>
                            <h4 href="" class="footer-link">Email hỗ trợ: hoidap@cinesv.vn</h4>
                    </ul>
                </div>
            </div>

            <div class="footer__about">
                <div class="footer-logo" style="background-image: url(/assets/img/Slider/common_sprite_area.png);"></div>
                <div class="footer__contact">
                <h3 class="footer-name">CÔNG TY TNHH MTV CineSV</h3>
                        <h4 class="footer-sub">Giấy CNĐKDN: 0303675393, đăng ký lần đầu ngày 31/7/2008, đăng ký thay đổi lần thứ 5 ngày 14/10/2015, cấp bởi Sở KHĐT thành phố Hồ Chí Minh.</h4>
                        <h4 class="footer-sub">Địa Chỉ: Khu phố 6, Phường Linh Trung, Thành Phố Thủ Đức, TPHCM.</h4>
                        <h4 class="footer-sub">COPYRIGHT 2021 CINESV. All RIGHTS RESERVED</h4>
                    </div>

            </div>
        </div>
    </footer>
</div>
        <!-- MODAL-LOGIN -->
        <div class="modal js-modal">
            <div class="modal__overlay"></div>
    
            <div class="modal__body js-modal__body--login">
                <div class="auth-form">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                                <h3 class="auth-form__heading">Đăng nhập</h3>
                                <span class="auth-form__switch--btn js-register">Đăng ký</span>   
                        </div>
                        <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" required placeholder="Số điện thoại" name="username" id="username">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" required placeholder="Mật khẩu" name="password" id="password">
                        </div>
                        <div>
                            <p id="notificationLogin"></p>
                        </div>
                    </div>
                    <div class="auth-form__controls">
                        <!-- <input type="submit" value="Login" name="Login"> -->
                        <button class="btn btn--primary" onclick="Login()">ĐĂNG NHẬP</button>
                    </div>
                    </div>
                </div>   
            </div>
            
            <div class="modal__body js-modal__body--register">
                <!-- Auth-form register -->
    
                <div class="auth-form">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <span class="auth-form__switch--btn js-login">Đăng nhập</span>
                            <h3 class="auth-form__heading">Đăng ký</h3>        
                        </div>
                        <div class="auth-form__form">
                        <form>
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" required placeholder="Họ và tên" id="reg_fullname">
                            </div>
                            <div class="auth-form__group">
                                <input type="email" class="auth-form__input" required placeholder="Email" id="reg_email">
                            </div>
                            <div class="auth-form__group">
                                <input type="tel" class="auth-form__input" required placeholder="Số điện thoại" id="reg_telephone">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" required placeholder="Mật khẩu" id="reg_password">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" required placeholder="Nhập lại mật khẩu" id="reg_password_confirm">
                            </div>
                            <div>
                                <p id="notificationRegister"></p>
                            </div>
                        </form>
                        <div class="auth-form__controls">
                            <button class="btn btn--primary" onclick="Register()">ĐĂNG KÝ</button>
                        </div>
                    </div>
                        <div class="auth-form__aside">
                            <p class="auth-form__policy-text">Bằng việc đăng ký, bạn đã đồng ý với LTT-Shop về
                                <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                                <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                            </p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        

<script>
       
        var loginForm = document.querySelector('.js-login-form');
        var registerForm = document.querySelector('.js-register-form');
        var modal = document.querySelector('.js-modal');
        var modalBodyLogin = document.querySelector('.js-modal__body--login');
        var modalBodyRegister = document.querySelector('.js-modal__body--register');
        var switchFormLogin = document.querySelector('.js-login');
        var switchFormRegister = document.querySelector('.js-register');
        if (getCookie("fullName") != "") {
            block_login_register.innerHTML = "";
            usernameCineSV.innerHTML = getCookie("fullName");
        } else {
            block_info_user.innerHTML = "";
        }
        // Hàm mở gogin Form
        function openLoginForm() {
            modal.classList.add('open__modal');
            modalBodyRegister.classList.remove('modal-body__open');
            modalBodyLogin.classList.add('modal-body__open');
        }
        // Hàm mở register Form
        function openRegisterForm() {
            modal.classList.add('open__modal');
            modalBodyLogin.classList.remove('modal-body__open');
            modalBodyRegister.classList.add('modal-body__open');
        }
        // Hàm ẩn modal 
        function closeModal() {
            modal.classList.remove('open__modal');
        }
        // Hàm chuyển form login-regisrer
        function switchToLogin() {
            modalBodyRegister.classList.remove('modal-body__open');
            modalBodyLogin.classList.add('modal-body__open');
        }
        function switchToRegister() {
            modalBodyLogin.classList.remove('modal-body__open');
            modalBodyRegister.classList.add('modal-body__open');
        }
        loginForm.addEventListener('click', openLoginForm);
        registerForm.addEventListener('click', openRegisterForm);
        switchFormRegister.addEventListener('click', switchToRegister);
        switchFormLogin.addEventListener('click', switchToLogin);
        //Đóng modal
        modal.addEventListener('click', closeModal);
        modalBodyLogin.addEventListener('click', function(event) {
            event.stopPropagation();
        })
        modalBodyRegister.addEventListener('click', function(event) {
            event.stopPropagation();
        })
        function Tru(){
            var result = document.getElementById('quantity');
            var qty = result.value; 
            if( !isNaN(qty) && qty > 0 ) 
                result.value--;
            return false;
        }
        function Cong(){
            var result4 = document.getElementById('quantity4'); 
            var qty4 = result4.value; 
            if( !isNaN(qty4)) 
                result4.value++;
            return false;
        }
        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        function Login() {
            var xmlHttp = new XMLHttpRequest();
            var obj = document.getElementById("notificationLogin");
            var url = "../../../login.php";
            var param = "username=" + username.value + "&password=" + password.value;
            xmlHttp.open("POST", url, true);
            xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlHttp.send(param);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    if (xmlHttp.responseText == "ok") {
                        location.replace("./phimSapChieu.php");
                    } else {
                        obj.innerHTML = xmlHttp.responseText;
                    }
                }
            }
        }
        function Register() {
            var xmlHttp = new XMLHttpRequest();
            var obj = document.getElementById("notificationRegister");
            if (reg_password.value != reg_password_confirm.value) {
                obj.innerHTML = "Mật khẩu không khớp";
                // location.replace("https://www.fb.com");
            } else {
                var url = "../../../register.php";
                var param = "fullname=" + reg_fullname.value + "&email=" + reg_email.value + "&telephone=" + reg_telephone.value + "&password=" + reg_password.value;
                xmlHttp.open("POST", url, true);
                xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xmlHttp.send(param);
                xmlHttp.onreadystatechange = function() {
                    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                        if (xmlHttp.responseText == "ok") {                        
                            window.alert("Đăng kí thành công");
                            location.replace("./phimSapChieu.php");
                        } else {
                            obj.innerHTML = xmlHttp.responseText;
                        }
                    }
                }
            }  
        }


</script>
<!-- 
<script src="../../js/userInfo.js"></script> -->
</body>
</html>