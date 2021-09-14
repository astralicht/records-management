<?php include_once 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/assets/shared/headers.php'; ?>
    <title>Employee Records Management</title>
</head>
<body>
    <form id="login-form">
        <div id="form-header">
            <h1>Employee Records Management</h1>
            <h3>User Login</h3>
        </div>
        <div id="form-body">
            <div id="form-group">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div id="form-group">
                <input type="password" name="password" placeholder="Password">
            </div>
        </div>
        <div id="form-footer">
            <a href="" class="button submit">Login</a>
        </div>
    </form>
    <script>
        document.body.onload = function() {
            document.querySelector('#submit').onclick = function() {
                username = document.querySelector('input#username').value
                password = document.querySelector('input#password').value
                request = new XMLHttpRequest()
                request.onreadystatechange = function() {
                    if (request.readyState != 4 && request.status != 200) return
                    response = JSON.parse(request.responseText)
                    if(response['body'] !== 'VALID') return // show notif on login error
                    window.location.href = '../dashboard'
                }
                request.open('POST', '../auth/login', true)
                request.send(JSON.stringify({
                    'type': 'api_request',
                    'body': {
                        'username': username,
                        'password': password,
                    },
                }))
            }
        }
    </script>
</body>
</html>