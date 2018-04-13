/* ==========================
    Author: Aline Ferreira
    Version: 1.0 
=============================*/

function checkAll(e){
    if($(e).is(":checked")){
        
        $("input[name=table_records]").each(function(){                        
            $(this).prop("checked",true);
        });
    }else{
        $("input[name=table_records]").each(function(){                        
            $(this).prop("checked",false);
        });
    }        
} 

function formatReal(x){
    var xString = x.toString();
    var decimal = xString.substr(xString.length - 2, xString.length);
    var parts = xString.replace(/(\d)(\d{2})$/, "$1").split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    if (xString.length > 2)
        return parts.join(".") + "," + decimal;
    else if(xString.length == 2)
        return "0," + parts.join(".") 
    else
        return "0,0" + parts.join(".")  
}
