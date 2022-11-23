<html>

<head>
    <style>
        form {
            /* background-color: #f2e1e8; */
            /* width: 30%; */
            padding-bottom: 40px;
        }

        .login {
            /* justify-content: center; */
            /* align-items: center; */
            text-align: center;
            /* padding: 5px; */
        }

        .center {
            justify-content: center;
            text-align: center;
            align-items: center;
            margin: auto;
        }

        .title {
            width: 100px;
            margin: 2px;
        }

        .inputField {
            padding: 0;
        }

        table {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body bgcolor="#f2e1e8">

    <form action="../controller/C_Admin.php?option=login" name="f1" method="post">
        <div class="login">
            <h3>Login</h3>
        </div>
        <div class="center">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <h4 class="title">Username</h4>
                        </td>
                        <td>
                            <input type="text" name="username" class="inputField">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="title">Password</h4>
                        </td>
                        <td>
                            <input type="text" name="password" class="inputField">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="center">
            <button type="submit" name="submitbtn">Ok</button>
            <button type="reset">reset</button>
        </div>
    </form>
</body>

</html>