function loginUser() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Create an object with user login data
    const loginData = {
        "username": username,
        "password": password
    };
    console.log(username);




   // Send a POST request to the PHP backe
    fetch('http://localhost/guvi_task/php/login.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(loginData),
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Registration failed');
        });
 }