$(document).ready(function () {
    $("#txtUsuario").keydown(function (event) {
        // Allow only backspace and delete
        if (event.keyCode === 46 || event.keyCode === 8 || event.keyCode === 9 || event.keyCode < 65 || event.keyCode > 90) {
            // let it happen, don't do anything
        } else {
            // Ensure that it is a number and stop the keypress
            if (event.keyCode < 48 || event.keyCode > 57) {
                event.preventDefault();
            }
        }
    });

    $("#txtFolio").keydown(function (event) {
        // Allow only backspace and delete
        if (event.keyCode === 46 || event.keyCode === 8 || event.keyCode === 9 || event.keyCode < 65 || event.keyCode > 90) {
            // let it happen, don't do anything
        } else {
            // Ensure that it is a number and stop the keypress
            if (event.keyCode < 48 || event.keyCode > 57) {
                event.preventDefault();
            }
        }
    });

    $("#query").keydown(function (event) {
        // Allow only backspace and delete
        if (event.keyCode === 46 || event.keyCode === 8 || event.keyCode === 241 || event.keyCode === 9 || event.keyCode < 65 || event.keyCode > 90) {
            // let it happen, don't do anything
        } else {
            // Ensure that it is a number and stop the keypress
            if (event.keyCode < 48 || event.keyCode > 57) {
                event.preventDefault();
            }
        }
    });
    $("#query").keypress(function (e) {
        // Allow only backspace and delete
        //if the letter is not digit then display error and don't type anything
        if (e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            return false;
        }
    });
    
   
});