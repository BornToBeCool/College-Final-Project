document.addEventListener('keydown',(event) => {
    var name = event.key;
    var code = event.code;
    event.preventDefault();
    if(name == "h" || name == "H"){
        window.location.href="index.php";
    }
    if(name == "l" || name == "L"){
        window.location.href="login.php";
    }
    if(name == "r" || name == "R"){
        window.location.href="register.php";
    }
    if(name == "b" || name == "B"){
        window.location.href="bikes.php";
    }
}, false);