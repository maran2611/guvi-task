function registerUser() {
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    // Check if passwords match
    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return;
    }
console.log(username);

    // Create an object with user data
    const userData = {
        "username": username,
        "email": email,
        "password": password
    };

    // Send a POST request to the PHP backe
    fetch('http://localhost/guvi_task/php/register.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(userData),
        })
        .then(response => response.json())
        .then(data => {
            if(data.message == "Registration successful")
            {
                window.location.href = 'profile.html?username=' + username+'&email='+email;
                return;
            }

            alert(data.message);
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Registration failed');
        });
//        
}