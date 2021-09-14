<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
<style>
    * {
        font-family: 'Noto Sans', sans-serif;
        color: #333;
    }

    body {
        padding: 15px 10%;
    }

    #login-form {
        width: auto;
    }

    #login-form input {
        padding: 10px 15px;
        margin: 0;
        border-radius: 3px;
        border: 1px solid #aaa;
        width: 300PX;
    }

    #login-form input:focus {
        border: 1px solid hsl(196, 100%, 45%);
        outline: none;
    }

    #form-header * {
        margin: 0;
    }

    #form-body {
        padding: 15px 0;
    }

    #form-group {
        padding: 5px 0;
    }

    .button {
        padding: 10px 15px;
        width: 150px;
        border-radius: 3px;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    .button:hover {
        background-color: rgba(0, 0, 0, .4);
    }

    .button:active {
        background-color: rgba(0, 0, 0, .2);
    }

    .submit {
        background-color: hsl(196, 100%, 45%);
        color: white;
    }
</style>