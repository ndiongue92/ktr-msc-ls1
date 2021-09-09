document.getElementById('inscription').addEventListener("submit" , function do_check(){
   

    var return_value=prompt("Password:");
    if(return_value==="epitech")
        return true;
    else {
        return false; 
    }


});



