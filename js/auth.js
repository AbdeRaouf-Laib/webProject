


// auth.js
// Function to check if the user is already logged in

    document.getElementById("submit").addEventListener("click", function (event) {
        event.preventDefault(); 
        const IdNumber = document.getElementById("IdNumber").value;
        const password = document.getElementById("password").value;
        const remamberMe = document.getElementById("rememberMe").checked;

        if (IdNumber === "" || password === "") {
            alert("Please fill in all fields.");
            return;
        }else{
            if(!/^\d+$/.test(IdNumber)) {
                // Check if IdNumber contains only digits
                alert("Id Number must be a number.");
                return;
            }
            if(IdNumber.length !== 12) {
                alert("Id Number must be 12 digits long.");
                return;
            }
            if(password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return;
            }
            if (remamberMe) {
                // Handle the "Remember me" functionality here
                // For example, you can store the IdNumber in local storage
                localStorage.setItem("IdNumber", IdNumber);
                console.log("Remember me checked.");
            } else {
                console.log("Remember me not checked.");
            }

            window.location.href = "/main/home.php";
        }
        

        document.getElementById("IdNumber").value = "";
        document.getElementById("password").value = "";
        document.getElementById("rememberMe").checked = false;
        // Redirect to the dashboard page after successful login    
    });




checkLoginStatus();
function checkLoginStatus() {}