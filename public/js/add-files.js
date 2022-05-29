$('.input-group-btn-operator').click(function() {
    
    $('.input-group-operator').clone().appendTo('.customer_records_dynamic');
    $('.customer_records_dynamic .input-group-operator').addClass('single remove');
    $('.single .input-group-btn-operator').remove();
    $('.single').append('<div class="input-group-btn input-group-btn-operator remove-field order-0"><span style="border-radius: 0 3px 3px 0 ;" class=" btn btn-danger pb-2"><span class="upl " id="upload">حذف اپراتور</span></span></div>');
    $('.customer_records_dynamic > .single').attr("class", "remove").attr("class" , "remove input-group mt-2");
    $('.customer_records_dynamic > .remove > input').addClass("order-1");
    $('.customer_records_dynamic input').each(function() {
      var count = 0;
      var fieldname = $(this).attr("name");
      $(this).attr('name', fieldname + count);
      count++;
    });
  
  });
  
  $(document).on('click', '.remove-field', function(e) {
    $(this).parent('.remove').remove();
    e.preventDefault();
  });