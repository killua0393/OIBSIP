function registerUser(event) {
    event.preventDefault();
   
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    
    console.log("Username: " + username);
    console.log("Email: " + email);
    console.log("Password: " + password);
}
