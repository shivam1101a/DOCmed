<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <link href = "Sign_up1.css" type = "text/css" rel = "stylesheet" />
        <h2>Sign Up</h2>
        <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >
            <div class = "container">
                <div class = "form_group">
                    <label>Name:</label>
                    <input type = "text" name = "name" value = "" required/>
                </div>
                <label>Age:</label>
                <input type = "tel" name = "age" value = "" maxlength="3" required/>
            </div>
            <label>Gender:</label>
            <input type = "text" name = "gender" value = "" required/>
        </div>
        <label>Weight:</label>
        <input type = "number" name = "weight" value = "" required/>
    </div>
    <label>Height:</label>
    <input type = "number" name = "height" value = "" required/>
</div>
<label>Email-Id:</label>
  <input type = "email" name = "email" value = "" required/>
</div>
<label>Phone no:</label>
  <input type = "tel" name = "Phone" value = "" maxlength="10" required/>
</div>
 <label>Password:</label>
  <input type = "password" name = "pwd" value = "" required/>
</div>

            </div>
        </form>
    </body>
</html>
