$(document).ready(function($) {
    $("#adminLogin").submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: 'server/classes/handleRequest.php?_mode=adminLogin',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
        })
        .done(function(response) {
            // console.log(resp)
           if (response.status == 1) {
                alert(response.message);
                alert('Successful... ');
                // window.location="http://localhost/sugcarsalessystem/admin/index.php";
           }
           else {
               alert('Incorrect Username or Password Please Try Again');
           }  

        }).fail(function(error) {
            console.log(error)
        });
    });
	
});




                    





                    

