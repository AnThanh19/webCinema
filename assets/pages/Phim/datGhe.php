<?php
require_once('/xampp/htdocs/WebCinema/db/dbhelper.php');
$masc='';
if (isset($_GET['masc'])) {
    $masc = $_GET['masc'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/header__logo.png">
    <title>Phim đang chiếu</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../../fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./phimDangChieu.css">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../css/main.css">
    <!-- <link rel="stylesheet" href="../../css/datGhe.css"> -->
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- <script src="ajax.js"></script> -->
    <!-- <script src="text/javascript">
        $(document).ready(function(){
            $("#city").change(function(){
                var selValue= $(this).val();
                load_ajax_xml(selValue);
            });
        });
    </script> -->
    
</head>
<body>
    <div class="app">
    <header class="header">
            <a href="../../../index.php" class="header__logo hide-on-tablet-mobile">
                <img src="../../img/logo-sv" alt="" class="header__logo-img">
            </a>
            <nav class="navbar">
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="" class="navbar-link">Phim</a>
                        <div class="subnav">
                            <ul class="subnav-list">
                                <li class="subnav-item">
                                    <a href="./phimDangChieu.php" class="subnav-link">Phim đang chiếu</a>
                                </li>
                                <li class="subnav-item">
                                    <a href="./phimSapChieu.php" class="subnav-link">Phim sắp chiếu</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="navbar-item">
                        <a href="../Rap/allRap.php" class="navbar-link">Rạp phim</a>
    
                    </li>
                    <li class="navbar-item">
                        <a href="../tintuc/tinTuc.php" class="navbar-link">Tin tức</a>
    
                    </li>
                    
                </ul>
    
                </nav>
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

        </header>
  
  
        <!-- CONTENT -->
        <div class="content">
            <div class="content__header">
                <div class="grid content__header-nav">
                    <div class="home__logo">
                        <a href="../../../index.php" class="home__logo-link"><i class="fas fa-home home-icon"></i></a>
                    </div>
                    <i class="fas fa-angle-right angle-right-icon"></i>
                    <div class="content__header-title">Phim</div>
                    <i class="fas fa-angle-right angle-right-icon"></i>
                    <div class="content__header-title">Phim đang chiếu</div>

                </div>
            </div>

            <div class="grid">
                <div class="content-title">
                    <h1 class="content-title-name">Đặt vé</h1>
                </div>
                <input type="text" value="<?=$masc?>">
        
            <div class="modal-ticket js-datghe-modal">
                <div class="modal-content">
                  <i class="fa fa-times modal-close js-modal-close"></i>
                  <div class="film-infomation film-info">
                        <div>Phim: <span>Bo Gia</span></div>
                        <div>Suat chieu: <span>2020-05-12 19:00:00</span></div>
                        <div>Rap: <span>CGV Parkson Đồng Khởi</span></div>
                        <div>Phong: <span>1</span></div>
                        <div>Ghe: <span></span></div>
                  </div>
                  
                  <div class="modal-content-main">
                      <span class="screen">SCREEN</span>
                      <div class="grid seat-select">
                        <div class="seat-row">
                              
                            <div class="seat seat-standard empty"></div>
                            <div class="seat seat-standard empty">A10</div>
                            <div class="seat seat-standard empty">A9</div>
                            <div class="seat seat-standard empty">A8</div>
                            <div class="seat seat-standard empty">A7</div>
                            <div class="seat seat-standard empty">A6</div>
                            <div class="seat seat-standard empty">A5</div>
                            <div class="seat seat-standard empty">A4</div>
                            <div class="seat seat-standard empty">A3</div>
                            <div class="seat seat-standard empty">A2</div>
                            <div class="seat">
                                <i class="fas fa-angle-double-right door-arrow-icon"></i>
                            </div>
                            <div class="seat" style="font-size: 1.2rem; font-weight: 600; line-height: 3.4;">Exit</div>
                        </div>
                          <div class="seat-row">
                              
                              <div class="seat seat-standard empty"></div>
                              <div class="seat seat-standard active seat-unavailable disabled">A10</div>
                              <div class="seat seat-standard active">A9</div>
                              <div class="seat seat-standard active">A8</div>
                              <div class="seat seat-standard active">A7</div>
                              <div class="seat seat-standard active">A6</div>
                              <div class="seat seat-standard active">A5</div>
                              <div class="seat seat-standard active">A4</div>
                              <div class="seat seat-standard active">A3</div>
                              <div class="seat seat-standard active">A2</div>
                              <div class="seat seat-standard active">A1</div>
                              <div class="seat seat-standard empty"></div>
                          </div>
                          <div class="seat-row">
                            
                            <div class="seat seat-standard empty"></div>
                            <div class="seat seat-standard active">B10</div>
                            <div class="seat seat-standard active">B9</div>
                            <div class="seat seat-standard active">B8</div>
                            <div class="seat seat-standard active">B7</div>
                            <div class="seat seat-standard active">B6</div>
                            <div class="seat seat-standard active">B5</div>
                            <div class="seat seat-standard active">B4</div>
                            <div class="seat seat-standard active">B3</div>
                            <div class="seat seat-standard active">B2</div>
                            <div class="seat seat-standard active">B1</div>
                            <div class="seat seat-standard empty"></div>
                        </div>
                        <div class="seat-row">
                            
                            <div class="seat seat-standard empty"></div>
                            <div class="seat seat-standard active">C10</div>
                            <div class="seat seat-standard active">C9</div>
                            <div class="seat seat-standard active">C8</div>
                            <div class="seat seat-standard active">C7</div>
                            <div class="seat seat-standard active">C6</div>
                            <div class="seat seat-standard active">C5</div>
                            <div class="seat seat-standard active">C4</div>
                            <div class="seat seat-standard active">C3</div>
                            <div class="seat seat-standard active">C2</div>
                            <div class="seat seat-standard active">C1</div>
                            <div class="seat seat-standard empty"></div>
                        </div>
                        <div class="seat-row">
                            
                            <div class="seat seat-standard empty"></div>
                            <div class="seat seat-standard active">D10</div>
                            <div class="seat seat-standard active">D9</div>
                            <div class="seat seat-standard active">D8</div>
                            <div class="seat seat-standard active">D7</div>
                            <div class="seat seat-standard active">D6</div>
                            <div class="seat seat-standard active">D5</div>
                            <div class="seat seat-standard active">D4</div>
                            <div class="seat seat-standard active">D3</div>
                            <div class="seat seat-standard active">D2</div>
                            <div class="seat seat-standard active">D1</div>
                            <div class="seat seat-standard empty"></div>
                        </div>
                        <div class="seat-row">
                            
                            <div class="seat seat-standard empty"></div>
                            <div class="seat seat-standard active">E10</div>
                            <div class="seat seat-standard active">E9</div>
                            <div class="seat seat-standard active">E8</div>
                            <div class="seat seat-standard active">E7</div>
                            <div class="seat seat-standard active">E6</div>
                            <div class="seat seat-standard active">E5</div>
                            <div class="seat seat-standard active">E4</div>
                            <div class="seat seat-standard active">E3</div>
                            <div class="seat seat-standard active">E2</div>
                            <div class="seat seat-standard active">E1</div>
                            <div class="seat seat-standard empty"></div>
                        </div>
                        <div class="seat-row">
                            
                            <div class="seat seat-standard empty"></div>
                            <div class="seat seat-standard active">F10</div>
                            <div class="seat seat-standard active">F9</div>
                            <div class="seat seat-standard active">F8</div>
                            <div class="seat seat-standard active">F7</div>
                            <div class="seat seat-standard active">F6</div>
                            <div class="seat seat-standard active">F5</div>
                            <div class="seat seat-standard active">F4</div>
                            <div class="seat seat-standard active">F3</div>
                            <div class="seat seat-standard active">F2</div>
                            <div class="seat seat-standard active">F1</div>
                            <div class="seat seat-standard empty"></div>
                        </div>
                        <div class="seat-row">
                            
                            <div class="seat seat-standard empty"></div>
                            <div class="seat seat-standard active">G10</div>
                            <div class="seat seat-standard active">G9</div>
                            <div class="seat seat-standard active">G8</div>
                            <div class="seat seat-standard active">G7</div>
                            <div class="seat seat-standard active">G6</div>
                            <div class="seat seat-standard active">G5</div>
                            <div class="seat seat-standard active">G4</div>
                            <div class="seat seat-standard active">G3</div>
                            <div class="seat seat-standard active">G2</div>
                            <div class="seat seat-standard active">G1</div>
                            <div class="seat seat-standard empty"></div>
                        </div>
                        <div class="seat-row">
                           
                            <div class="seat">
                                <i class="fas fa-angle-double-up door-arrow-icon"></i>
                            </div>
                            <div class="seat seat-standard active">H10</div>
                            <div class="seat seat-standard active">H9</div>
                            <div class="seat seat-standard active">H8</div>
                            <div class="seat seat-standard active">H7</div>
                            <div class="seat seat-standard active">H6</div>
                            <div class="seat seat-standard active">H5</div>
                            <div class="seat seat-standard active">H4</div>
                            <div class="seat seat-standard active">H3</div>
                            <div class="seat seat-standard active">H2</div>
                            <div class="seat seat-standard active">H1</div>
                            <div class="seat seat-standard empty"></div>
                        </div>
                        <div class="seat-row">
                            
                            
                            <div class="seat" style="font-size: 1.2rem;font-weight: 600;">Lối vào</div>
                            <div class="seat active seat-couple">I10</div>
                            <div class="seat active seat-couple">I9</div>
                            <div class="seat active seat-couple">I8</div>
                            <div class="seat active seat-couple">I7</div>
                            <div class="seat active seat-couple">I6</div>
                            <div class="seat active seat-couple">I5</div>
                            <div class="seat active seat-couple">I4</div>
                            <div class="seat active seat-couple">I3</div>
                            <div class="seat active seat-couple">I2</div>
                            <div class="seat active seat-couple">I1</div>
                            <div class="seat seat-standard empty"></div>
                        </div>
                  </div>
                  
                  <input type="submit" class="btn primary-btn" value="Đặt vé" style="float: right; width: 200px; margin-top: 24px;"></input>
                </div>
        
            </div>
                </div>
            </div>
        </div>
        
        <!-- MODAL TRAILER -->
        <!-- <div class="modal modal-trailer js-modal-trailer" id="myModal">
                    <div class="modal__overlay"></div>
                    <div class="modal__body js-modal__body">
                        <iframe width="800" height="540" class="embed-responsive-item" src="<?=$view?>" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
        
         -->

       
        <footer class="footer">
            <div class="grid">
                <div class="grid__row-home footer-row">
                    <div class="grid__column-fourth-home">
                        <h3 class="footer-title">CineSV</h3>
                        <ul class="footer-list">
                            <a href="" class="footer-link">Giới thiệu</a>
                            <a href="" class="footer-link">Tiện ích Online</a>
                            <a href="" class="footer-link">Thẻ quà tặng</a>
                            <a href="" class="footer-link">Tuyển dụng</a>
                            <a href="" class="footer-link">Liên hệ quảng cáo</a>
                        </ul>
                    </div>

                    <div class="grid__column-fourth-home">
                        <h3 class="footer-title">Điều khoản sử dụng</h3>
                        <ul class="footer-list">
                            <a href="" class="footer-link">Điều khoản chung</a>
                            <a href="" class="footer-link">Điều khoản giao dịch</a>
                            <a href="" class="footer-link">Chính sách thanh toán</a>
                            <a href="" class="footer-link">Chính sách bảo mật</a>
                            <a href="" class="footer-link">Câu hỏi thường gặp</a>
                        </ul>
                    </div>

                    <div class="grid__column-fourth-home">
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

                    <div class="grid__column-fourth-home">
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
                                    <input type="text" class="auth-form__input" required placeholder="Tài khoản">
                                </div>
    
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" required placeholder="Mật khẩu">
                                </div>
                        </div>
    
                        <div class="auth-form__controls">
                                <button class="btn btn--primary">ĐĂNG NHẬP</button>
                        </div>
    
                            <div class="auth-form__help">
                                <a href="#" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu?</a>
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
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" required placeholder="Tài khoản">
                                </div>
    
                                <div class="auth-form__group">
                                    <input type="email" class="auth-form__input" required placeholder="Email">
                                </div>
    
                                <div class="auth-form__group">
                                    <input type="tel" class="auth-form__input" required placeholder="Số điện thoại">
                                </div>
    
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" required placeholder="Mật khẩu">
                                </div>
    
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" required placeholder="Nhập lại mật khẩu">
                                </div>
                        </div>
    
                        <div class="auth-form__controls">
                                <button class="btn btn--primary">ĐĂNG KÝ</button>
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
        function Phim() {
            var xmlHttp = new XMLHttpRequest();
            var obj = document.getElementById("time");
            var url = "TimTime.php";
            var param = "marap=" + marap.value + "&maphim=" + maphim.value;
            xmlHttp.open("POST", url, true);
            xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlHttp.send(param);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    if (xmlHttp.responseText == "ok") {
                        location.replace("./");
                    } else {
                        obj.innerHTML = xmlHttp.responseText;
                    }
                }
            }
        }

        function Rap() {
            var xmlHttp = new XMLHttpRequest();
            var obj = document.getElementById("targetDiv");
            var url = "Timrap.php";
            var param = "diachi=" + diachi.value+ "&maphim=" + maphim.value;
            xmlHttp.open("POST", url, true);
            xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlHttp.send(param);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    if (xmlHttp.responseText == "ok") {
                        location.replace("./");
                    } else {
                        obj.innerHTML = xmlHttp.responseText;
                    }
                }
            }
        }

        function Login() {
            var xmlHttp = new XMLHttpRequest();
            var obj = document.getElementById("notificationLogin");
            var url = "../../login.php";
            var param = "username=" + username.value + "&password=" + password.value;
            xmlHttp.open("POST", url, true);
            xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlHttp.send(param);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    if (xmlHttp.responseText == "ok") {
                        location.replace("./");
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
                var url = "../../register.php";
                var param = "fullname=" + reg_fullname.value + "&email=" + reg_email.value + "&telephone=" + reg_telephone.value + "&password=" + reg_password.value;
                xmlHttp.open("POST", url, true);
                xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xmlHttp.send(param);
                xmlHttp.onreadystatechange = function() {
                    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                        if (xmlHttp.responseText == "ok") {                        
                            window.alert("Đăng kí thành công");
                            location.replace("./");
                        } else {
                            obj.innerHTML = xmlHttp.responseText;
                        }
                    }
                }
            }  
        }


            // // TRAILER
            // var modalTrailer = document.querySelector('.js-modal-trailer');
            // var trailerBtns = document.querySelectorAll('.js-trailer-btn');
            // var modalBodyTrailer = document.querySelector('.js-modal__body');
            
            
            // function openTrailerForm(){
            //     modalTrailer.classList.add('open');
            //     modalBodyTrailer.classList.add('open');
                
            // }
            

            // function closeModalTrailer(){
            //     modalBodyTrailer.classList.remove('open');
            //     modalTrailer.classList.remove('open');
            // }
            
            // for(const trailerBtn of trailerBtns){
            //     trailerBtn.addEventListener('click', openTrailerForm);
            // }
            // modalTrailer.addEventListener('click', closeModalTrailer);
    


            
        </script>
        <script src="../../js/modalTickets.js"></script>
        <script src="../../js/modalTrailer.js"></script>
    </div>
</body>
</html>