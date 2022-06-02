@extends('layouts.panel')

@section('main')
            <br><br><br><br><br><br><br><br>

<section>
      <div class="container-fluid">  
            <div class="input-group">
              
                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder=" یخچال ">
                <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">سامسونگ</a>
                    <a class="dropdown-item" href="#">ال جی</a>
                    <a class="dropdown-item" href="#">دیپوینت</a>
                    <a class="dropdown-item" href="#">اسنوا</a>
                    <a class="dropdown-item" href="#">الکترواستیل</a>
                    <a class="dropdown-item" href="#">امرسان</a>
                    <a class="dropdown-item" href="#">ارج</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">داخل اینها نیس؟؟</a>
                </div>
                </div>
            </div>
            <br><br>

            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="لوازم اشپزخانه">
                <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button><br>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">اجاق گاز </a>
                    <a class="dropdown-item" href="#">کابینت</a>
                    <a class="dropdown-item" href="#">قابلمه</a>
                    <a class="dropdown-item" href="#">لوازم برقی</a>
                    <a class="dropdown-item" href="#">کفگیر</a>
                    <a class="dropdown-item" href="#">پلاستیک جات</a>
                    <a class="dropdown-item" href="#">هود</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">داخل اینها نیس؟؟</a>
                </div>
                </div>
            </div>
            <br><br>

            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="لوازم ماشین ">
                <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button><br>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">خرید چرخ </a>
                    <a class="dropdown-item" href="#">شیشه</a>
                    <a class="dropdown-item" href="#">دستگیره</a>
                    <a class="dropdown-item" href="#">اینه بغل</a>
                    <a class="dropdown-item" href="#">داشبورد</a>
                    <a class="dropdown-item" href="#">سیم کشی برقی</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">داخل اینها نیس؟؟</a>
                </div>
                </div>
            </div>
        </div>    
        <br><br>
        <div class="pa-50 ">
            <button class="btn btn-danger">جست جو کیند</button>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
        </div>

</section>
@endsection