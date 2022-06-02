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
            <h6 class="mt-3 f-14">{{ auth()->user()->name }}</h6>
            <span style="color: beige">نقش:</span>
            <p>مدیریت</p>
            {{-- {{ auth()user()->roles }} --}}
          </div>
    <ul class="sidebar-menu">
                <li><a class="sidebar-header" href="#"><i data-feather="home"></i><span>کاربران</span><span
                    class="badge badge-pill badge-primary"></span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                        <li><a href="{{ route('users.index') }}"><i class="fa fa-circle"></i><span>لیست کاربران</span></a></li>
                        <li><a href="{{ route('users.create') }}"><i class="fa fa-circle"></i><span>ساخت کاربر</span></a></li>
                        <li><a href="{{ route('users.create') }}"><i class="fa fa-circle"></i><span>ویرایش کاربر</span></a></li>
                </ul>
                </li>

            

                <li><a class="sidebar-header" href="#"><i data-feather="home"></i><span>دسته بندی</span><span
                    class="badge badge-pill badge-primary"></span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                        <li><a href="{{ route('categorys.index') }}"><i class="fa fa-circle"></i><span> دسته بندی</span></a></li>
                        <li><a href="{{ route('categorys.create') }}"><i class="fa fa-circle"></i><span>ساخت دسته بندی</span></a></li>
                        {{-- <li><a href="{{ route('categorys.edit') }}"><i class="fa fa-circle"></i><span>ویرایش  دسته بندی</span></a></li> --}}

                </ul>
                </li>

                <li><a class="sidebar-header" href="#"><i data-feather="home"></i><span>پست ها</span><span
                  class="badge badge-pill badge-primary"></span><i class="fa fa-angle-right pull-right"></i></a>
              <ul class="sidebar-submenu">
                      <li><a href="{{ route('users.create') }}"><i class="fa fa-circle"></i><span>لیست پست</span></a></li>
                      <li><a href="{{ route('users.index') }}"><i class="fa fa-circle"></i><span> ساخت پست </span></a></li>
                      {{-- <li><a href="{{ route('users.index') }}"><i class="fa fa-circle"></i><span> ویرایش پست </span></a></li> --}}
              </ul>
              </li>
    

                <li><a class="sidebar-header" href="{{ route('articles.index') }}"><i data-feather="home"></i><span> مقاله</span><span
                class="badge badge-pill badge-primary"></span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                        <li><a href="{{ route('articles.index') }}"><i class="fa fa-circle"></i><span>مقاله ها </span></a></li>
                        <li><a href="{{ route('articles.create') }}"><i class="fa fa-circle"></i><span> ایجاد مقاله  </span></a></li>
                        {{-- <li><a href="{{ route('articles.edit' , $post->id) }}"><i class="fa fa-circle"></i><span> ویرایش مقاله  </span></a></li> --}}

                </ul>
                </li>
               

    </ul>
 </div>
      </div>