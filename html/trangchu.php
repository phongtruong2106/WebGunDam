<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>It'sGunDamz</title>
    <link rel="stylesheet" href="../Css/Asset1.css" />
    <link rel="stylesheet" href="../Css/base.css" />
    <link rel="stylesheet" href="../bootTraps/boottrap/js/bootstrap.js" />
    <link rel="stylesheet" href="../bootTraps/Wow/wow.js" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="../bootTraps/fontawesome-free-6.2.0-web/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="../bootTraps/fontawesome-free-6.2.0-web/css/all.min.css"
    />
    <link rel="stylesheet" href="../bootTraps/boottrap/css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="../bootTraps/boottrap/css/bootstrap.min.css.map"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="../bootTraps/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../bootTraps/slick/slick-theme.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/react/umd/react.production.min.js" crossorigin></script>  
  </head>
  <body>
    <div class="container-fluid myapp">
      <!-- Begin  topbar-->
      <div class="topbar" id="divtopbar">
        <div class="row topbar_d">
          <div class="col-md-6 topbarleft">
            <div class="hotlineleft">
              <span> Hotline: </span>
              <span>
                <a href="tel:0123066120" class="title">0123 066 120 </a>
              </span>
              <span> (8h - 12h, 13h30 - 17h) </span>
            </div>
            <div class="aff-left">
              <a href="../html/lienhehoptac.html" class="title"
                >Liên hệ hợp tác</a
              >
            </div>
          </div>
          <div class="col-md-6 topbarright">
            <li class="font1 title">
              <a href="../html/timcuahang.html">Tìm cửa hàng</a>
            </li>
            <li class="font2 title">
              <a href="../html/kiemtradonhang.html">Kiểm tra dơn hàng</a>
            </li>
          </div>
        </div>
      </div>
      <!-- End topbar -->

      <!-- Begin Heder -->
      <script>
        $(document).ready(function () {
          $("#toggle").click(function () {
            $("nav").slideToggle();
          });
        });

        $(document).ready(function () {
          //tìm tất cả các li có dub-menu và thêm vào nó class has-child
          $(".su-menu").parent("li").addClass("has-child");
        });
      </script>
      <div class="header">
        <div class="row">
          <div class="col-md-2">
            <img
              src="./img/logo.png"
              alt=""
              style="width: 100px"
              class="logo"
            />
            <div id="toggle">
              <i class="fa-solid fa-bars"></i>
            </div>
          </div>
          <div class="col-md-7 menuheader">
            <nav>
              <ul id="main-menu">
                <li class="col-md-2">
                  <a href="">GIỚI THIỆU</a>
                </li>
                <li class="col-md-2 inner-header has-child">
                  <span class="du">
                    <a href="#">GUNDAMS</a>
                  </span>
                  <ul class="sub-menu">
                    <li>
                      <a href="">SD – Super Deformed</a>
                    </li>
                    <li>
                      <a href="">HG – High Grade 1/144</a>
                    </li>
                    <li>
                      <a href="">RG – Real Grade 1/144</a>
                    </li>
                    <li>
                      <a href="">MG – Master Grade 1/100</a>
                    </li>
                    <li>
                      <a href="">RE/100</a>
                    </li>
                    <li>
                      <a href="">Premium Bandai</a>
                    </li>
                    <li>
                      <a href="">PG – Perfect Grade 1/60</a>
                    </li>
                    <li>
                      <a href="">Megasize 1/48</a>
                    </li>
                    <li>
                      <a href="">Haropla</a>
                    </li>
                    <li>
                      <a href="">HiRm – Hi Resolution Model</a>
                    </li>
                    <li>
                      <a href="">Converge</a>
                    </li>
                    <li>
                      <a href="">Weapon + Support Unit</a>
                    </li>
                  </ul>
                </li>
                <li class="col-md-2">
                  <a href="">FIGURES</a>
                </li>
                <li class="col-md-2">
                  <a href=""> PHỤ KIỆN - GIÁ ĐỠ </a>
                </li>
                <li class="col-md-2 has-child inner-header">
                  <span>SẢN PHẨM KHÁC</span>
                  <ul class="sub-menu">
                    <li>
                      <a href="">30 Minutes Missions</a>
                    </li>
                    <li>
                      <a href="">Dragon Ball</a>
                    </li>
                    <li>
                      <a href="">LBX</a>
                    </li>
                    <li>
                      <a href="">Kimetsu No Yaiba</a>
                    </li>
                    <li>
                      <a href="">Re:Zero</a>
                    </li>
                    <li>
                      <a href="">One Piece</a>
                    </li>
                    <li>
                      <a href="">Kamen Rider</a>
                    </li>
                  </ul>
                </li>
                <li class="col-md-2 has-child inner-header">
                  <span>SƠN - DUNG DỊCH</span>
                  <ul class="sub-menu">
                    <li>
                      <a href="">Mr.Hobby</a>
                    </li>
                    <li>
                      <a href="">Tamiya</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-md-3 header-action">
            <div class="header-search-box col-md-6">
              <form action="/search" class="searchFrom">
                <div class="search-textBo">
                  <input type="hidden" name="type" value="product" />
                  <input
                    required
                    id="inputSearch"
                    class="search-input"
                    name="q"
                    maxlength="40"
                    autocomplete="off"
                    type="text"
                    size="20"
                    placeholder="Bợn cần giề..."
                  />
                </div>
                <button
                  type="submit"
                  class="btn-search-box"
                  id="search-box-header"
                  aria-label="button search"
                >
                  <ion-icon name="search-outline"></ion-icon>
                </button>
              </form>
            </div>
            <div class="action-nomal">
              <div class="header-account col-md-2">
                <a href="./dangnhap.html" title="User">
                  <i class="fa-regular fa-user"></i>
                </a>
              </div>
              <div class="header-wishlist co-md-2"></div>
              <div class="header-cart col-md-2">
                <a
                  href="./kiemtradonhang.html"
                  title="Kiem Tra DOn Hang"
                  class="notification"
                >
                  <i class="fa-solid fa-cart-shopping icon-grey"></i>
                  <span class="badges" data-count="10"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- action mobile -->
        <div class="action_mobile">
          <div class="header-account">
            <a href="./dangnhap.html" title="User">
              <i class="fa-regular fa-user"></i>
            </a>
          </div>
          <div class="header-wishlist"></div>
          <div class="header-cart">
            <a
              href="./kiemtradonhang.html"
              title="Kiem Tra DOn Hang"
              class="notification"
            >
              <i class="fa-solid fa-cart-shopping icon-grey"></i>
              <span class="badges" data-count="10"></span>
            </a>
          </div>
        </div>
        </div>
        <div class="btn-search-mobile">
          <div class="btn_mobile">
            <div class="btn_search_mobile">
              <form action="/search" class="search_mobile">
                <div class="search_textBox_mobile">
                  <input type="hidden" name="type" value="product" />
                  <input
                    required
                    id="InputSearchAuto-md"
                    class="input-search"
                    name="q"
                    maxlength="40"
                    autocomplete="off"
                    type="text"
                    size="20"
                    placeholder="bạn cần tìm gì..."
                  />
                </div>

                <button
                  type="submit"
                  class="btn-search-mobile"
                  id="search-header-mobile"
                  aria-label="button search"
                >
                  <span class="searchicon">
                    <i class="icofont-ui-search"></i>
                  </span>
                  <span class="search-close">
                    <ion-icon name="close-outline"></ion-icon>
                  </span>
                </button>
              </form>
            </div>
          </div>
        </div>
      
      <!-- End Header -->

      <!-- Breadcrumb  -->
      <div class="container Breadcrumb">
            <li>
                <a href="./html/trangchu.php"></a>
            </li>
            <li></li>
            <li></li>
      </div>

      <!-- Begin Showslide -->
      <div class="showslide_header">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img
                src="../img/slideimg1.png"
                alt="Los Angeles"
                style="width: 100%; height: 594px"
              />
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img
                src="../img/slideimg2.png"
                alt="Chicago"
                style="width: 100%; height: 594px"
              />
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img
                src="../img/slideimg3.png"
                alt="New York"
                style="width: 100%; height: 594px"
              />
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img
                src="../img/slideimg4.png"
                alt="New York"
                style="width: 100%; height: 594px"
              />
              <div class="carousel-caption"></div>
            </div>
            <div class="item">
              <img
                src="../img/slideimg5.png"
                alt="New York"
                style="width: 100%; height: 594px"
              />
              <div class="carousel-caption"></div>
            </div>
            <div class="item">
              <img
                src="../img/slideimg6.png"
                alt="New York"
                style="width: 100%; height: 594px"
              />
              <div class="carousel-caption"></div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="right carousel-control"
            href="#myCarousel"
            data-slide="next"
          >
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="showslide_header_mobile">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img
                src="../img/slideimg1.png"
                alt="Los Angeles"
                style="width: 100%; height: 256px"
              />
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img
                src="../img/slideimg2.png"
                alt="Chicago"
                style="width: 100%; height: 256px"
              />
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img
                src="../img/slideimg3.png"
                alt="New York"
                style="width: 100%; height: 256px"
              />
              <div class="carousel-caption"></div>
            </div>

            <div class="item">
              <img
                src="../img/slideimg4.png"
                alt="New York"
                style="width: 100%; height: 256px"
              />
              <div class="carousel-caption"></div>
            </div>
            <div class="item">
              <img
                src="../img/slideimg5.png"
                alt="New York"
                style="width: 100%; height: 256px"
              />
              <div class="carousel-caption"></div>
            </div>
            <div class="item">
              <img
                src="../img/slideimg6.png"
                alt="New York"
                style="width: 100%; height: 256px"
              />
              <div class="carousel-caption"></div>
            </div>
          </div>
          </a>
        </div>
      </div>

      <div class="content_showslide container">
        
        <div class="slideshow-container">

          <div class="mySlides_content text fade1">
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
          </div>
          
          <div class="mySlides_content text fade1">
            <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
          </div>
          
          <div class="mySlides_content text fade1">
            <q>I have not failed. I've just found 10,000 ways that won't work.</q>
          </div>
          
              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>
          
          </div>
          <script>
                var slideIndex = 1;
                  showSlides(slideIndex);

                  function plusSlides(n) {
                    showSlides(slideIndex += n);
                  }

                  function currentSlide(n) {
                    showSlides(slideIndex = n);
                  }

                  function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides_content");
                    var dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                  }
          </script>
      </div>

      <div class="banner_Img container">
          <div class="banner_img_animation your-class col-md-12">
            <figure class="snip0016 col-md-4">
              <img src="../img/img14.png" alt="sample41"/>
              <figcaption>
                <h2>CHẤT LƯỢNG</h2>
                <a href="#"></a>
              </figcaption>			
            </figure>
            <figure class="snip0016  col-md-4">
              <img src="../img/img13.png" alt="sample42"/>
              <figcaption>
                <h2>UY TÍN</h2>
                <a href="#"></a>
              </figcaption>			
            </figure>
            <figure class="snip0016  col-md-4">
              <img src="../img/img12.png" alt="sample43"/>
              <figcaption>
                <h2>ĐA DẠNG </h2>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
      </div>
      <div class="SanPhamMoi container" id="wrapper">
        <div class="SanPhamMoi_list">
          <h3>Sản phẩm mới</h3>
        </div>
        <div class="showSilde_sanPhamMoi container">
          <ul class="productss">
            <li>
              <div class="products-itemw">
                  <div class="product-top">
                    <a href="" class="product-thumd">
                          <img src="../img/listcart1.png" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
              </div>
              <div class="products-info">
                    <a href="" class="product-cat">
                      RG
                    </a>
                    <a href="" class="product-name">
                      RG 35 God Gundam – Mô hình lắp ráp Gundam Bandai
                    </a>
                    <div class="product-price">
                      919.000₫
                    </div>
                  </div>
              </div>
            </li>
            <li>
              <div class="products-itemw">
                <div class="product-top">
                  <a href="" class="product-thumd">
                        <img src="../img/listcart2.png" alt="">
                  </a>
                  <a href="" class="buy-now">Mua Ngay</a>
            </div>
            <div class="products-info">
                  <a href="" class="product-cat">
                    RG
                  </a>
                  <a href="" class="product-name">
                    RG 35 God Gundam – Mô hình lắp ráp Gundam Bandai
                  </a>
                  <div class="product-price">
                    919.000₫
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="products-itemw">
                <div class="product-top">
                  <a href="" class="product-thumd">
                        <img src="../img/listcart3.png" alt="">
                  </a>
                  <a href="" class="buy-now">Mua Ngay</a>
            </div>
            <div class="products-info">
                  <a href="" class="product-cat">
                    FM 1/100
                  </a>
                  <a href="" class="product-name">
                    Raider Gundam – Mô hình lắp ráp Gundam Bandai
                  </a>
                  <div class="product-price">
                    1.199.000₫
                  </div>
  
                </div>
              </div>
            </li>
            <li>
              <div class="products-itemw">
                <div class="product-top">
                  <a href="" class="product-thumd">
                        <img src="../img/listcart4.png" alt="">
                  </a>
                  <a href="" class="buy-now">Mua Ngay</a>
            </div>
            <div class="products-info">
                  <a href="" class="product-cat">
                    HG
                  </a>
                  <a href="" class="product-name">
                    Gundam Breaker Perfect Strike Freedom
                  </a>
                  <div class="product-price">
                    597.000₫
                  </div>
  
                </div>
              </div>
            </li>
            <li>
              <div class="products-itemw">
                <div class="product-top">
                  <a href="" class="product-thumd">
                        <img src="../img/listcart5.png" alt="">
                  </a>
                  <a href="" class="buy-now">Mua Ngay</a>
            </div>
            <div class="products-info">
                  <a href="" class="product-cat">
                    HG
                  </a>
                  <a href="" class="product-name">
                    Gundam Breaker Blazing Gundam
                  </a>
                  <div class="product-price">
                    919.000₫
                  </div>
  
                </div>
              </div>
            </li>
            <li>
              <div class="products-itemw">
                <div class="product-top">
                  <a href="" class="product-thumd">
                        <img src="../img/listcart6.png" alt="">
                  </a>
                  <a href="" class="buy-now">Mua Ngay</a>
            </div>
            <div class="products-info">
                  <a href="" class="product-cat">
                    HG
                  </a>
                  <a href="" class="product-name">
                    Gundam Breaker Wing Gundam Sky Zero
                  </a>
                  <div class="product-price">
                    919.000₫
                  </div>
  
                </div>
              </div>
            </li>
            <li>
              <div class="products-itemw">
                <div class="product-top">
                  <a href="" class="product-thumd">
                        <img src="../img/listcart7.png" alt="">
                  </a>
                  <a href="" class="buy-now">Mua Ngay</a>
            </div>
            <div class="products-info">
                  <a href="" class="product-cat">
                    RG
                  </a>
                  <a href="" class="product-name">
                    RG 35 God Gundam – Mô hình lắp ráp Gundam Bandai
                  </a>
                  <div class="product-price">
                    719.000₫
                  </div>
  
                </div>
              </div>
            </li>
            <li>
              <div class="products-itemw">
                <div class="product-top">
                  <a href="" class="product-thumd">
                        <img src="../img/listcart8.png" alt="">
                  </a>
                  <a href="" class="buy-now">Mua Ngay</a>
            </div>
            <div class="products-info">
                  <a href="" class="product-cat">
                    RG
                  </a>
                  <a href="" class="product-name">
                    RG 35 God Gundam – Mô hình lắp ráp Gundam Bandai
                  </a>
                  <div class="product-price">
                    1.919.000₫
                  </div>
  
                </div>
              </div>
            </li>
            <li>
              <div class="products-itemw">
                <div class="product-top">
                  <a href="" class="product-thumd">
                        <img src="" alt="">
                  </a>
                  <a href="" class="buy-now">Mua Ngay</a>
            </div>
            <div class="products-info">
                  <a href="" class="product-cat">
                    Re:Zero
                  </a>
                  <a href="" class="product-name">
                    Mô Hình Rem
                  </a>
                  <div class="product-price">
                    919.000₫
                  </div>
  
                </div>
              </div>
            </li>
          </ul>


        </div>
      </div>  

      <!-- Begin San Pham Giam Gia -->
      <div class="sanPham_GiamGia container">
            <div class="SanPhan_GiamGia_Producs">
                  <div class="TieuDe_SPGG">
                          <h3>Sản Phẩm Giảm Giá</h3>
                  </div>
                  <div class="showSlide_GiamGia">
                    <ul class="productss">
                      <li>
                        <div class="products-itemw">
                            <div class="product-top">
                              <a href="" class="product-thumd">
                                    <img src="../img/listcart1.png" alt="">
                              </a>
                              <a href="" class="buy-now">Mua Ngay</a>
                        </div>
                        <div class="products-info">
                              <a href="" class="product-cat">
                                RG
                              </a>
                              <a href="" class="product-name">
                                RG 35 God Gundam – Mô hình lắp ráp Gundam Bandai
                              </a>
                              <div class="product-price">
                                919.000₫
                              </div>
                            </div>
                        </div>
                      </li>
                      <li>
                        <div class="products-itemw">
                          <div class="product-top">
                            <a href="" class="product-thumd">
                                  <img src="../img/listcart2.png" alt="">
                            </a>
                            <a href="" class="buy-now">Mua Ngay</a>
                      </div>
                      <div class="products-info">
                            <a href="" class="product-cat">
                              RG
                            </a>
                            <a href="" class="product-name">
                              RG 35 God Gundam – Mô hình lắp ráp Gundam Bandai
                            </a>
                            <div class="product-price">
                              919.000₫
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="products-itemw">
                          <div class="product-top">
                            <a href="" class="product-thumd">
                                  <img src="../img/listcart3.png" alt="">
                            </a>
                            <a href="" class="buy-now">Mua Ngay</a>
                      </div>
                      <div class="products-info">
                            <a href="" class="product-cat">
                              FM 1/100
                            </a>
                            <a href="" class="product-name">
                              Raider Gundam – Mô hình lắp ráp Gundam Bandai
                            </a>
                            <div class="product-price">
                              1.199.000₫
                            </div>
            
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="products-itemw">
                          <div class="product-top">
                            <a href="" class="product-thumd">
                                  <img src="../img/listcart4.png" alt="">
                            </a>
                            <a href="" class="buy-now">Mua Ngay</a>
                      </div>
                      <div class="products-info">
                            <a href="" class="product-cat">
                              HG
                            </a>
                            <a href="" class="product-name">
                              Gundam Breaker Perfect Strike Freedom
                            </a>
                            <div class="product-price">
                              597.000₫
                            </div>
            
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="products-itemw">
                          <div class="product-top">
                            <a href="" class="product-thumd">
                                  <img src="../img/listcart5.png" alt="">
                            </a>
                            <a href="" class="buy-now">Mua Ngay</a>
                      </div>
                      <div class="products-info">
                            <a href="" class="product-cat">
                              HG
                            </a>
                            <a href="" class="product-name">
                              Gundam Breaker Blazing Gundam
                            </a>
                            <div class="product-price">
                              919.000₫
                            </div>
            
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="products-itemw">
                          <div class="product-top">
                            <a href="" class="product-thumd">
                                  <img src="../img/listcart6.png" alt="">
                            </a>
                            <a href="" class="buy-now">Mua Ngay</a>
                      </div>
                      <div class="products-info">
                            <a href="" class="product-cat">
                              HG
                            </a>
                            <a href="" class="product-name">
                              Gundam Breaker Wing Gundam Sky Zero
                            </a>
                            <div class="product-price">
                              919.000₫
                            </div>
            
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="products-itemw">
                          <div class="product-top">
                            <a href="" class="product-thumd">
                                  <img src="../img/listcart7.png" alt="">
                            </a>
                            <a href="" class="buy-now">Mua Ngay</a>
                      </div>
                      <div class="products-info">
                            <a href="" class="product-cat">
                              RG
                            </a>
                            <a href="" class="product-name">
                              RG 35 God Gundam – Mô hình lắp ráp Gundam Bandai
                            </a>
                            <div class="product-price">
                              719.000₫
                            </div>
            
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="products-itemw">
                          <div class="product-top">
                            <a href="" class="product-thumd">
                                  <img src="../img/listcart8.png" alt="">
                            </a>
                            <a href="" class="buy-now">Mua Ngay</a>
                      </div>
                      <div class="products-info">
                            <a href="" class="product-cat">
                              RG
                            </a>
                            <a href="" class="product-name">
                              RG 35 God Gundam – Mô hình lắp ráp Gundam Bandai
                            </a>
                            <div class="product-price">
                              1.919.000₫
                            </div>
            
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="products-itemw">
                          <div class="product-top">
                            <a href="" class="product-thumd">
                                  <img src="../img/listcart9.png" alt="">
                            </a>
                            <a href="" class="buy-now">Mua Ngay</a>
                      </div>
                      <div class="products-info">
                            <a href="" class="product-cat">
                              Re:Zero
                            </a>
                            <a href="" class="product-name">
                              Mô Hình Rem
                            </a>
                            <div class="product-price">
                              919.000₫
                            </div>
            
                          </div>
                        </div>
                      </li>
                    </ul>
          
                  </div>

            </div>
      </div>
        <!-- ENd San Pham Giam Gia -->

        <!-- Begin Thong TIn -->
      <div class="list_SanPham">
              <div class="row TieuDe_ListSanPham">
                    <div class="col-md-4">
                        <h4>THÔNG TIN LIÊN HỆ</h4>
                    </div>
                    <div class="col-md-4">
                        <h4>ITSGUNDAMZ.COM</h4>
                    </div>
                    <div class="col-md-4">
                        <h4>TIN TỨC</h4>
                    </div>
              </div>
              <div class="Content_listSanPham">
                <div class="content_Thongtin col-md-4">
                    <div class="diachi">
                       <span>Địa chỉ: </span>
                       <p> 122p,Phường 2, Quận Gò Vấp</p>
                    </div>
                   <div class="dienthoai">
                        <span>Điện thoại : </span>
                        <p> 012.306.6120</p>
                   </div>
                  <div class="Email">
                        <span>Email:</span>
                        <p>itGundamz@gmail.com</p>
                  </div>
                  <div class="giolamviec">
                        <span>Giời làm việc: </span>
                        <p> từ thứ 2 - CN (7h - 22h)</p>
                  </div>
                 </div>
                 <div class="Gioithieu col-md-4" >
                  <div>
                     <span>
                         <a href="">Giới thiệu ITSGUNDAMZ</a></span>
                  </div>
                  <div>
                     <span><a href="">
                          Điều Khoản sử dụng
                        </a></span>
                  </div>
                  <div>
                    <span><a href="">
                            Hướng Dẫn Đặt Hàng
                        </a></span>
                  </div>
                  <div>
                    <span><a href="">Giao Hàng - Đổi Hàng</a></span>

                  </div>
                  <div>
                    <span><a href="">Chính Sách Bảo Mật</a></span>
                  </div>
                  <div>
                    <span><a href="">Phương Thức Thanh Toán</a></span>
                  </div>       
                 </div>
                 <div class="tintuc col-md-4">
                      <div>
                        <span>
                          <a href="">Gundam Review</a>
                        </span>
                      </div>
                      <div>
                        <span><a href="">Khuyến mãi</a></span>
                      </div>
                      <div>
                        <span><a href="">Thông Tin</a></span>
                      </div>
                 </div>
              </div>
            </div>
            <!-- End Thong TIN -->
    </div>
         <!-- Begon footer -->
         <div class="footer container-fluid">

        </div>
        <!-- End Footer -->
    <script type="text/javascript" src="../bootTraps/slick/slick.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script> 
    <script src="../JS/assest.js"></script>
  </body>
</html>
