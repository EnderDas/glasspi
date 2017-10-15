//The menu button
$(document).ready(function(){
    $("#hidehelp").click(function(){
        $(".nback").hide();
    });
    $("#showhelp").click(function(){
        $(".nback").show();
    });
});
  
//The menu button END

//The custom app
$(document).ready(function(){
    $("#closecustom").click(function(){
        $(".custom").hide();
    });
    $("#opencustom").click(function(){
        $(".custom").show();
    });
});
  
//The custom button END

//The notepad app
$(document).ready(function(){
    $("#closenotepad").click(function(){
        $(".notepad").hide();
    });
    $("#opennotepad").click(function(){
        $(".notepad").show();
    });
});
  
//The notepad button END


//The internet app
$(document).ready(function(){
    $("#closeinternet").click(function(){
        $(".internet").hide();
    });
    $("#openinternet").click(function(){
        $(".internet").show();
    });
});

function setURL(url){
    document.getElementById('internet_home').src = url;
}
  
//The internet button END


//The writrr app
$(document).ready(function(){
    $("#closewritrr").click(function(){
        $(".writrr").hide();
    });
    $("#openwritrr").click(function(){
        $(".writrr").show();
    });
});
  
//The writrr button END

//The texte app
$(document).ready(function(){
    $("#closetexte").click(function(){
        $(".texte").hide();
    });
    $("#opentexte").click(function(){
        $(".texte").show();
    });
});
  
//The texte button END
