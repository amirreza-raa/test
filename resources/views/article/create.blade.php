@extends('layouts.panel')

@section('main')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col">
            
          </div>
          <!-- Bookmark Start-->
          <div class="col">
            <div class="bookmark pull-right">
              <ul>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                    data-original-title="تقویم"><i data-feather="calendar"></i></a></li>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                    data-original-title="ایمیل"><i data-feather="mail"></i></a></li>
                <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title=""
                    data-original-title="چت"><i data-feather="message-square"></i></a></li>
                <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                  <form class="form-inline search-form">
                    <div class="form-group form-control-search">
                      <input type="text" placeholder="جستجو..">
                    </div>
                  </form>
                </li>
              </ul>
            </div>
          </div>
          <!-- Bookmark Ends-->
        </div>
      </div>
    </div>
    <!--search-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 ">
          <div class="card">
            <div id="serach-list-users" class="table-responsive">
              <div class="search-list my-4 " style="min-width: 800px;">
                <form action="" class="d-flex justify-content-around" >
                  <input class="form-control col-2" type="text" placeholder="نام اصلی" value="">
                  <input class="form-control col-2" type="text" placeholder="نام خانوادگی">
                  <input class="form-control col-2" type="text" placeholder="نام کاربری">
                  <button class="btn btn-success" type="button">جستجو</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <section>
            <form action="{{ route('posts.store') }}" method="POST" class="padding-30" enctype="multipart/form-data">
                @csrf
            <div class="continer text-aligt text-center" style="text-align: center"><br>
                <div class="form-floating mb-3 " >
                    <label for="">عنوان مقاله وارد کنید</label>
                    <input type="text" class="form-control" id="floatingInput" placeholder="عنوان مقاله" name="title"><br>
                  </div>
<br>
                  <div class="form-floating">
                    <label for=""> خلاصه مقاله وارد کیند</label>
                    <input type="text" class="form-control" id="floatingPassword" placeholder="خلاصه مقاله" name="content"> <br>
                  </div><br>
                  <div>
                      <label for="">متن مقاله وارد کیند</label>
                      <textarea name="texteara" id="" cols="30" rows="10"  class="form-control" id="floatingInput" placeholder="متن مقاله وارد کنید">
                          
                      </textarea>
                  </div>
                {{-- file --}}
                <div class="mb-3">
                    <label for="formFile" class="form-label">فایل خود را روارد کنید</label>
                    <input class="form-control" type="file" id="formFile" name="file"  accept="image/*"><br>
                  </div>
            </div>
            </form>
        </section>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection