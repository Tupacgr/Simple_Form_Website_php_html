<!DOCTYPE html>
 <head>
 <title>ONLINE FORM</title>
 <link href="css/main.css" type="text/css" rel="stylesheet">
 </head>
 <body>
    <p id="heading1"><i>Welcome to the online form of <b>COMPANY NAME</b></i></p>
    <div id="center-form">
        <form action="data.php" method="post">
            <p><b>FULLNAME: :&nbsp;&nbsp;</b><input type="text" name="fullname" maxlength="30" id="fullname" required/><p>
            <p><b>GENDER :&nbsp;&nbsp;</b><input type="radio" id="gender" name="gender" value="male" required/><b><i>Male</i></b><input type="radio" id="gender" name="gender" value="Female" required/><b><i>Female</i></b></p>
            <p><b>AGE :&nbsp;&nbsp;</b><input type="number" name="age" id="age" required/></p>
            <p><b>PERCENTAGE OF YOUR INCOME THAT YOU SAVE PER MONTH?&nbsp;&nbsp;</b><input type="number" name="percentage_save" id="percentage_save" required/></p>
            <p><b>PERCENTAGE OF YOUR INCOME THAT YOU SPEND PER MONTH?&nbsp;&nbsp;</b><input type="number" name="percentage_spend" id="percentage_spend" required/></p>
            <p><b>ARE YOU SATISFIED WITH YOUR CURRENT ECONOMIC SITUATION?&nbsp;&nbsp;</b><input type="radio" name="satisfied" value="yes" required/><b>Yes</b> <input type="radio" name="satisfied" value="no"/><b>No</b></p>
            <p id="down">▼ ▼ ▼</p>► ► ► &nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT" id="submit"/>&nbsp&nbsp&nbsp ◄ ◄ ◄<p id="up">▲ ▲ ▲</p>
            </form>
    </div>
  </body>
 </html>