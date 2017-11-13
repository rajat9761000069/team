$(document).ready(function () {
    $('.registration-form fieldset:first-child').fadeIn('slow');

    

    // next step
    $('.registration-form .btn-next').on('click', function () {
			
			var radios = document.getElementsByName("eq");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }
			
		if (formValid)
		{
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;


        if (next_step) {
            parent_fieldset.fadeOut(400,function () {
                $(this).next().fadeIn();
            });
        }
		}
    });

    // previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });

    // submit
  //  $('.registration-form').on('submit', function (e) {

    //    $(this).find('input[type="text"],input[type="email"]').each(function () {
      //      if ($(this).val() == "") {
        //        e.preventDefault();
          //      $(this).addClass('input-error');
           // } else {
             //   $(this).removeClass('input-error');
            //}
       // });

    //});

   
});