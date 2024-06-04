<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Page</title>

    <link rel='stylesheet' type='text/css' href='bootstrap-5.3.0-dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="CSS/styles.css">

</head>

<style>

    .invalidfeedback {
        display: none;
        font-size: 13px;
        float: right;
    }
    html,
    body {
        height: 100%;
    }
    .form-signin {
        max-width: 330px;
        padding: 1rem;
    }
    .form-signin .form-floating:focus-within {
        z-index: 2;
    }
    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

</style>


<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
        <form action="#">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>

            <div class="form-floating">
                <label for="floatingInput">Email address</label>
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <span class="design invalidfeedback">Please enter the valid email address</span>
            </div>
            <div class="form-floating">
                <label for="floatingPassword">Password</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <span class="design invalidfeedback">Please enter valid password</span>
            </div>

            <button id="submit" class="btn btn-success w-100 py-2" type="submit">Login</button>
        </form>
    </main>

</body>
<script>

    let login = document.querySelector("submit");
    let email = document.querySelector("#floatingInput");
    let passwd = document.querySelector("#floatingPassword");
    let span1 = email.nextElementSibling;
    let span2 = passwd.nextElementSibling;
    let data = document.querySelectorAll("input");
    
    function validateEmail(elementValue) {
        var emailPattern = /^[a-zA-Z0-9_\.\-]+\@[a-zA-Z\-]+\.[a-zA-Z]{2,4}$/;
        return emailPattern.test(elementValue);
    }
    function validatePassword(elementValue) {
        var passPattern = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        ;
        return passPattern.test(elementValue);
    }
    
    let emailex = validateEmail(email);
    let passwdex = validatePassword(passwd);
    
    email.addEventListener('blur', function (event) {
        event.preventDefault();
        if (email.value == "") {
            span1.style.display = "flex";
        } else if (emailex == false) {
            span1.style.display = "flex";
        }
        else {
            span1.style.display = "none";
        }
    })
    
    passwd.addEventListener('blur', function (event) {
        event.preventDefault();
        if (passwd.value == "") {
            span2.style.display = "flex";
        } else if (passwdex == false) {
            span2.style.display = "flex";
        }
        else {
            span1.style.display = "none";
        }
    })
    
    var sb = document.getElementById("submit");
    sb.addEventListener('click', function (event) {
        data.forEach(element => {
            let nexttag = element.nextElementSibling;
            if (element.value == '') {
                nexttag.style.display = "flex";
            }
            else {
                nexttag.style.display = "none";
            }

        });
    })

</script>

</html>