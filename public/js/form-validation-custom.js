$(document).ready(function(){
console.log("mmm");
$("#myform").validate({
    rules: {
        validationCustom01: "required",
        validationCustom02:"required",
        validationCustomUsername:"required",
        validationCustom03:"required",
        validationCustom04:"required",
        validationCustom05:{
            required:true,
            minlength:10
        },
        validationCustom06:{
            required:true,
            minlength:10
        },
        validationCustom07:"required",
        validationcustom08:"required",
        validationCustom09:"required",
        invalidCheck:"required",
     
    },
    messages: {
        validationCustom01:"لطفا نام را وارد کنید",
        validationCustom02:"لطفا نام خانوادگی را وارد کنید",
        validationCustomUsername:"لطفا نام کاربری را وارد کنید",
        validationCustom03:"لطفا شهر را وارد کنید",
        validationCustom04:"لطفا ناحیه را وارد کنید",
        validationCustom05:{
            required:"لطفا کدپستی را وارد فرمایید",
            minlength:"کدپستی باید 10 رقمی باشد",
        },
        validationCustom06:{
        required:"لطفا شماره تلفن را وارد کنید",
        minlength:"شماره تلفن باید 10 رقمی باشد(مثال:9958222234)",
        },
        validationCustom07:"لطفا فایل را وارد کنید",
        validationcustom08:"لطفا تاریخ را وارد کنید",
        validationCustom09:"لطفا اپراتور های موردنظر را اضافه کنید",
       invalidCheck:"لطقا قوانین و ضوابط را بپذیرید",
    }
  });





})
