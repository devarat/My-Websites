$(document).ready(function() {
           
		   $('#content').load('Content/home.php');
          
		  
		  //For other Links
           $('ul#nav li a').click(function() {
		        var page = $(this).attr('href');
				 $('#content').load('content/' + page + '.php');
				 return false;
		    });
});