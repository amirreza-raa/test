<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
  <title>اندلس - قالب مدیریت ویژه</title>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/icofont.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/themify.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/flag-icon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/feather-icon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link id="color" rel="stylesheet"      href="{{asset('css/light-1.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/upload-file.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/persian-datepicker.min.css')}}">
</head>

<body main-theme-layout="rtl">
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="loader bg-white">
      <div class="whirly-loader"> </div>
    </div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
      <div class="main-header-right row">
        <div class="main-header-left d-lg-none">
          <div class="logo-wrapper"><a href="index.html"><img src="{{asset('images/endless-logo.png')}}" alt=""></a></div>
        </div>
        <div class="mobile-sidebar d-block">
          <div class="media-body text-right switch-sm">
            <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
          </div>
        </div>
        <div class="nav-right col p-0">
          <ul class="nav-menus">
            <li>
              <form class="form-inline search-form" action="#" method="get">
                <div class="form-group">
                  <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                      <input class="Typeahead-input form-control-plaintext" id="demo-input" type="text" name="q"
                        placeholder="جستجو...">
                      <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">در حال
                          بارگذاری...</span></div><span class="d-sm-none mobile-search"><i
                          data-feather="search"></i></span>
                    </div>
                    <div class="Typeahead-menu"></div>
                  </div>
                </div>
              </form>
            </li>
            <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                  data-feather="maximize"></i></a></li>
            <li class="onhover-dropdown"><a class="txt-dark" href="#">
                <h6>EN</h6>
              </a>
              <ul class="language-dropdown onhover-show-div p-20">
                <li><a href="#" data-lng="en"><i class="flag-icon flag-icon-is"></i> انگلیسی</a></li>
                <li><a href="#" data-lng="es"><i class="flag-icon flag-icon-um"></i> اسپانیا</a></li>
                <li><a href="#" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> پرتغال</a></li>
                <li><a href="#" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> فرانسه</a></li>
              </ul>
            </li>
            <li class="onhover-dropdown"><i data-feather="bell"></i><span class="dot"></span>
              <ul class="notification-dropdown onhover-show-div">
                <li>اطلاعیه <span class="badge badge-pill badge-primary pull-right">3</span></li>
                <li>
                  <div class="media">
                    <div class="media-body">
                      <h6 class="mt-0"><span><i class="shopping-color" data-feather="shopping-bag"></i></span>سفارش شما
                        برای ارسال آماده است..!<small class="pull-right">9:30 صبح</small></h6>
                      <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم .</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-body">
                      <h6 class="mt-0 txt-success"><span><i class="download-color font-success"
                            data-feather="download"></i></span>دانلود کامل<small class="pull-right">2:30 غروب</small>
                      </h6>
                      <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم .</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-body">
                      <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger"
                            data-feather="alert-circle"></i></span>250 مگابایت فایل های حذف شده<small
                          class="pull-right">5:00 غروب</small></h6>
                      <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم .</p>
                    </div>
                  </div>
                </li>
                <li class="bg-light txt-dark"><a href="#">همه</a> اطلاعیه ها</li>
              </ul>
            </li>
            <li><a href="#"><i class="right_side_toggle" data-feather="message-circle"></i><span class="dot"></span></a>
            </li>
            <li class="onhover-dropdown">
              <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle"
                  src="{{asset('images/dashboard/user.png')}}" alt="header-user">
                <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div p-20">
                <li><a href="#"><i data-feather="user"></i>ویرایش پروفایل</a></li>
                <li><a href="#"><i data-feather="mail"></i> صندوق ورودی</a></li>
                <li><a href="#"><i data-feather="lock"></i> قفل صفحه</a></li>
                <li><a href="#"><i data-feather="settings"></i> تنظیمات</a></li>
                <li><a href="#"><i data-feather="log-out"></i> خروج</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
        <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
        <script id="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">جستجوی شما 0 نتیجه را به دست آورد. این احتمالا به این معنی است که باطن پایین است، وای!</div>
            
          </script>
      </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="page-sidebar">
        <div class="main-header-left d-none d-lg-block">
          <div class="logo-wrapper"><a href="index.html"><img src="{{asset('images/endless-logo.png')}}" alt=""></a></div>
        </div>
        <div class="sidebar custom-scrollbar">
          <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle" src="{{asset('images/user/1.jpg')}}" alt="#">
              <div class="profile-edit"><a href="edit-profile.html" target="_blank"><i data-feather="edit"></i></a>
              </div>
            </div>
            <h6 class="mt-3 f-14">پارادایم</h6>
            <p>مدیر کل.</p>
          </div>
          <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="#"><i data-feather="home"></i><span>کاربران</span><span
                  class="badge badge-pill badge-primary">2</span><i class="fa fa-angle-right pull-right"></i></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ route('users.create') }}"><i class="fa fa-circle"></i><span>ساخت کاربر</span></a></li>
                <li><a href="{{ route('users.index') }}"><i class="fa fa-circle"></i><span>لیست کاربران</span></a></li>

              </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="home"></i><span>کمپین ها</span><span
              class="badge badge-pill badge-primary">2</span><i class="fa fa-angle-right pull-right"></i></a>
          <ul class="sidebar-submenu">
            <li><a href="campaign-details.html"><i class="fa fa-circle"></i><span>جزئیات</span></a></li>
            <li><a href="campaign-parsing.html"><i class="fa fa-circle"></i><span>تجزیه و آمار</span></a></li>
   
          </ul>
        </li>
          </ul>
        </div>
      </div>
      <!-- Page Sidebar Ends-->
      <!-- Right sidebar Start-->
      <div class="right-sidebar" id="right_side_bar">
        <div class="container p-0">
          <div class="modal-header p-l-20 p-r-20">
            <div class="col-sm-8 p-0">
              <h6 class="modal-title font-weight-bold">لیست دوستان</h6>
            </div>
            <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
          </div>
        </div>
        <div class="friend-list-search mt-0">
          <input type="text" placeholder="جستجوی دوست"><i class="fa fa-search"></i>
        </div>
        <div class="chat-box">
          <div class="people-list friend-list">
            <ul class="list">
              <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('images/user/1.jpg')}}" alt="">
                <div class="status-circle online"></div>
                <div class="about">
                  <div class="name">اسم فرضی</div>
                  <div class="status"> آنلاین</div>
                </div>
              </li>
              <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('images/user/2.png')}}" alt="">
                <div class="status-circle away"></div>
                <div class="about">
                  <div class="name">اسم فرضی</div>
                  <div class="status"> 28 دقیقه پیش</div>
                </div>
              </li>
              <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('images/user/8.jpg')}}" alt="">
                <div class="status-circle online"></div>
                <div class="about">
                  <div class="name">اسم فرضی</div>
                  <div class="status"> آنلاین</div>
                </div>
              </li>
              <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('images/user/4.jpg')}}" alt="">
                <div class="status-circle online"></div>
                <div class="about">
                  <div class="name">اسم فرضی</div>
                  <div class="status"> آنلاین</div>
                </div>
              </li>
              <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('images/user/5.jpg')}}" alt="">
                <div class="status-circle offline"></div>
                <div class="about">
                  <div class="name">اسم فرضی</div>
                  <div class="status"> 2 دقیقه پیش</div>
                </div>
              </li>
              <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/6.jpg')}}" alt="">
                <div class="status-circle away"></div>
                <div class="about">
                  <div class="name">اسم فرضی</div>
                  <div class="status"> 2 ساعت پیش</div>
                </div>
              </li>
              <li class="clearfix"><img class="rounded-circle user-image" src="{{asset('assets/images/user/7.jpg')}}" alt="">
                <div class="status-circle online"></div>
                <div class="about">
                  <div class="name">اسم فرضی</div>
                  <div class="status"> آنلاین</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Right sidebar Ends-->

      @yield('main')

      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 footer-copyright">
              <p class="mb-0">کپی رایت 2018 © اندلس همه حقوق محفوظ است.</p>
            </div>
            <div class="col-md-6">
              <p class="pull-right mb-0">دست ساز و ساخته شده با<i class="fa fa-heart"></i></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
  <script src="{{asset('js/icons/feather-icon/feather.min.js')}}"></script>
  <script src="{{asset('js/icons/feather-icon/feather-icon.js')}}"></script>
  <script src="{{asset('js/sidebar-menu.js')}}"></script>
  <script src="{{asset('js/config.js')}}"></script>
  <script src="{{asset('js/jquery.ui.min.js')}}"></script>
  <script src="{{asset('js/beautifyhtml.js')}}"></script>
  <script src="{{asset('js/form-builder-2.js')}}"></script>
  <script src="{{asset('js/typeahead/handlebars.js')}}"></script>
  <script src="{{asset('js/typeahead/typeahead.bundle.js')}}"></script>
  <script src="{{asset('js/typeahead/typeahead.custom.js')}}"></script>
  <script src="{{asset('js/chat-menu.js')}}"></script>
  <script src="{{asset('js/form-validation-custom.js')}}"></script>
  <script src="{{asset('js/tooltip-init.js')}}"></script>
  <script src="{{asset('js/typeahead-search/handlebars.js')}}"></script>
  <script src="{{asset('js/typeahead-search/typeahead-custom.js')}}"></script>
  <script src="{{asset('js/script.js')}}"></script>
  <script src="{{asset('js/theme-customizer/customizer.js')}}"></script>
  <script src="{{asset('js/upload-file.js')}}"></script>
  <script src="{{asset('js/persian-date.min.js')}}"></script>
  <script src="{{asset('js/persian-datepicker.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $(".example1").pDatepicker();
    });
  </script>
   <!--insert and delete operator-->
 <script src="{{asset('js/add-files.js')}}"></script>


 
</body>

</html>