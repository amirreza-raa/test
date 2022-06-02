@extends('layouts.panel')
@section('main')
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-header">
            <div class="row">
              <div class="col">
                <div class="page-header-left">
                  <h3>افزودن کاربر</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}"><i data-feather="home"  ></i></a></li>
                    <li class="breadcrumb-item">کاربران</li>
                    <li class="breadcrumb-item active">افزودن کاربر</li>
                  </ol>
                </div>
              </div>
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
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <form action="{{ route('users.store') }} " method="POST" id="myform" class="needs-validation form" enctype="multipart/form-data" >
                       @csrf
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label for="validationCustom01">نام </label>
                        <input class="form-control my-0" id="validationCustom01" name="name" type="text"
                          placeholder="نام اصلی" required>
                          @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="validationCustom02">نام خانوادگی</label>
                        <input class="form-control my-0" id="validationCustom02" name="family" type="text"
                          placeholder="نام خانوادگی" required>
                          @error('family')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">ایمیل </label>
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text"
                              id="inputGroupPrepend">@</span></div>
                          <input class="form-control my-0" id="validationCustomUsername" name="email"
                            type="email" placeholder="ایمیل جدید " aria-describedby="inputGroupPrepend" required>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom03">شهر</label>
                        <input class="form-control my-0" id="validationCustom03" name="city" type="text"
                          placeholder="شهر" required>
                          @error('city')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationCustom04">ناحیه</label>
                        <input class="form-control my-0" id="validationCustom04" name="word" type="text"
                          placeholder="ناحیه" required>
                          @error('word')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationCustom05">پست</label>
                        <input class="form-control my-0" id="validationCustom05" name="post" type="text"
                          placeholder="پست" required>
                          @error('post')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label for="validationCustom06">شماره تلفن</label>
                        <input class="form-control my-0" id="validationCustom06" name="phone" type="number"
                          placeholder="شماره تلفن" required>
                          @error('phone')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                   
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="validationcustom08">تاریخ</label>
                        <input class="example1 form-control my-0" id="validationcustom08" name="date"
                          type="date" placeholder="تاریخ" required>
                      </div>
                      @error('date')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-btn">
                              <span style="border-radius: 0 3px 3px 0 ;" class="fileUpload btn btn-success pb-2">
                                <input type="file" class="upload up " id="up" name="file" onchange="readURL(this);" />
                                <span class="upl " id="upload">اپلود فایل</span>
                                @error('file')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </span><!-- btn-orange -->
                            </div><!-- btn -->
                            <input id="validationCustom07" name="filetext" style="border-radius:3px 0 0 3px;"
                              type="text" class="form-control bg-white " readonly required>
                              @error('filetext')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div><!-- group -->
                        </div><!-- form-group -->
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label for="validationCustom09">اپراتور</label>
                        <div class="input-group input-group-operator">
                          <div class="input-group-btn input-group-btn-operator">
                            <span style="border-radius: 0 3px 3px 0 ;" class=" btn btn-success pb-2">  
                              <span class="upl " id="upload">افزودن اپراتور</span>
                            </span><!-- btn-orange -->
                          </div><!-- btn -->
                          <input id="validationCustom09" name="oprator" style="border-radius:3px 0 0 3px;"   type="text" class="form-control bg-white " required >
                        </div>
                        @error('oprator')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="customer_records_dynamic mt-2 " ></div>
                      </div>
                      </div>
                    <div class="form-group">
                      <div class="form-check checkbox">
               
                          <input class="  form-check-input " id="invalidCheck" name="check"  type="checkbox" required >
                                 <label class="form-check-label" for="invalidCheck">شرایط و ضوابط را بپذیرید</label>
                       
                                 @error('check')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                      </div>
                      <button class="btn btn-primary" type="submit" >فرم ارسال</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection