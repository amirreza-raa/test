@extends('layouts.panel')

@section('main')
    

<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col">
            <div class="page-header-left">
              <h3>لیست کاربران</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">کاربران</li>
                <li class="breadcrumb-item active">لیست کاربران</li>
              </ol>
            </div>
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
                 
                  <select class="form-control col-2 " name="operator" id="operator" placeholder="انتخاب اپراتور">
                    <option selected disabled value="0">انتخاب اپراتور:</option>
                    <option value="1">ایرانسل</option>
                    <option value="2">رایتل</option>
                    <option value="3">همراه اول</option>
  
                  </select>
               
                  <button class="btn btn-success" type="button">جستجو</button>
                </form>
              </div>
            </div>
  
          </div>
  
  
        </div>
      </div>
    </div>
  
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="card ">
  
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">نام اصلی</th>
                    <th scope="col">نام خانوادگی</th>
                    <th scope="col">آدرس الکترونیکی </th>
                    <th scope="col">ویرایش</th>
                    <th scope="col">حذف</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        
                  <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->family }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      <a href="#"> <button class="btn btn-primary" type="button">ویرایش</button></a>
                    </td>
                    <td>
                      <button class="btn btn-danger" type="button" data-toggle="modal"
                        data-target="#myModal">حذف</button>
                    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="d-flex justify-content-start dataTables_wrapper mt-3">
              <div class="dataTables_paginate paging_simple_numbers " id="basic-1_paginate"><a
                  class="paginate_button previous disabled" aria-controls="basic-1" data-dt-idx="0" tabindex="0"
                  id="basic-1_previous">قبلی</a><span><a class="paginate_button current" aria-controls="basic-1"
                    data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="basic-1"
                    data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="basic-1"
                    data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="basic-1"
                    data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="basic-1"
                    data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="basic-1"
                    data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="basic-1"
                  data-dt-idx="7" tabindex="0" id="basic-1_next">بعدی</a></div>
            </div>
          </div>
        </div>
  
      </div>
  
    </div>
    <!-- Container-fluid Ends-->
  </div>

@endsection