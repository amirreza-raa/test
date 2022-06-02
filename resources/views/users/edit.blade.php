@extends('layouts.panel')
@section('main')
<br><br><br><br>
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                    <div class="card-body">
                            <form action="{{ route('users.update', $user->id) }}" method="post"  id="myform" class="needs-validation form"  enctype="multipart/form-data">
                                @csrf
                                @method('put')
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom01">نام </label>
                            <input class="form-control my-0" id="validationCustom01" name="name" type="text" value="{{ $user->name }}"
                                placeholder="نام اصلی" required>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom02">نام خانوادگی</label>
                            <input class="form-control my-0" id="validationCustom02" name="family" type="text"  value="{{ $user->family }}"
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
                                <input class="form-control my-0" id="validationCustomUsername" name="email"  value="{{ $user->email }}"
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
                            <input class="form-control my-0" id="validationCustom03" name="city" type="text"  value="{{ $user->city }}"
                                placeholder="شهر" required>
                                @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                            <label for="validationCustom04">ناحیه</label>
                            <input class="form-control my-0" id="validationCustom04" name="word" type="text"  value="{{ $user->word }}"
                                placeholder="ناحیه" required>
                                @error('word')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                            <label for="validationCustom05">پست</label>
                            <input class="form-control my-0" id="validationCustom05" name="post" type="text"  value="{{ $user->post  }}"
                                placeholder="پست" required>
                                @error('post')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                               <label for="validationCustom06">شماره تلفن</label>
                               <input class="form-control my-0" id="validationCustom06" name="phone" type="number"  value="{{ $user->phone }}"
                                placeholder="شماره تلفن" required>
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                            <button class="btn btn-primary" type="submit" >فرم ارسال</button>
                        </form>
                    </div>
                    </div>
                </div>

@endsection