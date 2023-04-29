function change_role(e, idUserRole){
    let value_option = e.value;
    $.ajax({  
        type: "POST",  
        url: "../controller/data-sender.php", 
        data: {
            value_option : value_option,
            idUserRole : idUserRole
        },
        success: function(response) {
            console.log(response);
        }
    });
}