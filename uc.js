$(document).ready(function () {
    $('.registration-form fieldset:first-child').fadeIn('slow');

    

    // next step
    $('.registration-form .btn-next').on('click', function () {
			
	var radios = document.getElementsByName("tw");
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
	$('.registration-form .btn-next11').on('click', function () {
			
	var x= document.getElementById('tw11').value;
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
	
$('.registration-form .btn-next1').on('click', function () {
			
	var x= document.getElementById('tw1').value;
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

$('.registration-form .btn-next2').on('click', function () {
			
	var x= document.getElementById('tw2').value;
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

$('.registration-form .btn-next3').on('click', function () {
			var x= document.getElementById('tw3').value;
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

$('.registration-form .btn-next4').on('click', function () {
		var x= document.getElementById('tw4').value;
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

$('.registration-form .btn-next5').on('click', function () {
		var x= document.getElementById('tw5').value;
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

$('.registration-form .btn-next6').on('click', function () {
		var x= document.getElementById('tw6').value;
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
			
	var x= document.getElementById('tw7').value;
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

$('.registration-form .btn-next8').on('click', function () {
		var x= document.getElementById('tw8').value;
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

$('.registration-form .btn-next9').on('click', function () {
			
	var x= document.getElementById('tw9').value;
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

$('.registration-form .btn-next10').on('click', function () {
		var x= document.getElementById('tw10').value;
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


$('.registration-form .btn-next11').on('click', function () {
		var x= document.getElementById('tw11').value;
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