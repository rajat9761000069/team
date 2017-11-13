$(document).ready(function () {
    $('.registration-form fieldset:first-child').fadeIn('slow');

    

    // next step
    $('.registration-form .btn-next1').on('click', function () {
			
			var radios = document.getElementsByName("fd1");
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



   

    // next step
    $('.registration-form .btn-next2').on('click', function () {
			
			var radios = document.getElementsByName("fd2");
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
	
	
	
	$('.registration-form .btn-next3').on('click', function () {
			
			var radios = document.getElementsByName("fd3");
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




$('.registration-form .btn-next4').on('click', function () {
			
	var x= document.getElementById('fd4').value;
		if(x.length>=1)
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
	
$('.registration-form .btn-next5').on('click', function () {
			
	var x= document.getElementById('fd5').value;
		if(x.length>=1)
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

$('.registration-form .btn-next6').on('click', function () {
			
	var x= document.getElementById('fd6').value;
		if(x.length>1)
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

$('.registration-form .btn-next7').on('click', function () {
			var x= document.getElementById('fd7').value;
		if(x.length>1)
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