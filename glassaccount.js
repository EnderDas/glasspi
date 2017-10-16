var count = 2;
function validate() {
    var un = document.glogin.username.value;
    var pw = document.glogin.pword.value;
    var valid = false;

    var unArray = ["user"];  // as many as you like - no comma after final entry. Example: ["user, "user2"]
    var pwArray = ["pass"];  // the corresponding passwords;

    for (var i=0; i <unArray.length; i++) {
        if ((un == unArray[i]) && (pw == pwArray[i])) {
            valid = true;
            break;
        }
    }

    if (valid) {
        window.location = "desktop/desktop.html";
        return false;
    }


    var t = " tries";
    if (count == 1) {t = " try"}

        if (count >= 1) {
            alert ("Invalid username and/or password.");
            document.myform.username.value = "";
            document.myform.pword.value = "";
        }

        else {

    }

}
