let host = location.origin;
let pathFolder = "car-sales";

$(document).ready(function($) {

    $("#adminLogin").submit(function(event) {
        alert("hy");
        event.preventDefault();
        let formBody = new FormData(document.querySelector("#adminLogin"));
        formBody.append("_mode", "adminLogin");
        fetch(host + '/' + pathFolder + '/server/classes/handleRequest.php', {
            method : "post",
            headers : {
            "X-Requested-With" : "XMLHttpRequest",
            },
            body : formBody
        }).then((res) => {
            return res.text();
        }).then((data) => {
            console.log(data);
        })

    //     $.ajax({
    //         url: host + '/server/classes/handleRequest.php?_mode=|',
    //         method: 'POST',
    //         body : new FormData(document.querySelector(this)),
    //     })
    //     .done(function(response) {
    //         console.log(resp);
    //        if (response.status == 1) {
    //             alert(response.message);
    //             alert('Successful... ');
    //             // window.location="http://localhost/sugcarsalessystem/admin/index.php";
    //        }
    //        else {
    //            alert('Incorrect Username or Password Please Try Again');
    //        }  

    //     }).fail(function(error) {
    //         console.log(error)
    //     });
    });
	
});




                    





                    

