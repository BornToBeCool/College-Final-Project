const hamburger = document.getElementById("hamburger");
const navBar = document.getElementById("navBar");
hamburger.addEventListener("click", () =>{
    navBar.classList.toggle("show");
});

function hide(){
   var x = document.getElementById("searchBox");
   var y = document.getElementById("search_box")
   var z = document.getElementById("basketIcon")
   if (x.style.display === "none" && y.style.display === "none" && z.style.display === "none"){
       x.style.display = "block";
       y.style.display = "block";
       z.style.display = "block";
   }
   else{
       x.style.display = "none";
       y.style.display = "none";
       z.style.display = "none";
   }
}

function test()
{
    alert("Testing the function");
}

function validateRegForm(event)
{
    var firstname = document.getElementById("firstName");
    var lastname = document.getElementById("lastName");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("confirmPassword")

    if(firstname.value == "" || firstname.value.length < 3){
        alert("First name must be at least 3 character length")
        firstname.focus();
        event.preventDefault();
    }
    if(lastname.value == "" || lastname.value.length < 3){
        alert("Last name must be at least 3 character length")
        lastname.focus();
        event.preventDefault();
    }
    if(email.value == "") {
        alert("Email must be provided")
        email.focus();
        event.preventDefault();
    }

    if(password.value == "" || password.value.length < 4){
        alert("Password must be at least 4 character length")
        password.focus();
        event.preventDefault();
    } 
}


