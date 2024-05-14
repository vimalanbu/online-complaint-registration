<html>
<head>
    <title>COMPLAINT RESGISTER</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="container">
    <form action="connect.php" method="post">
    <h3>COMPLAINT FORM</h3>
    <div class="tb">

    <table>
        <tr>
            <td>
                <label for="fname">FIRSTNAME</label>
            </td>
            <td>
                <input type ="text" name="firstname" id="fname">
            </td>
        </tr>
        <tr>
            <td>
                <label for="lname">LASTNAME</label>
            </td>
            <td>
                <input type ="text" name="lastname" id="lname">
            </td>
        </tr>
        <tr>
            <td>
                <label for="num">PHONENUMBER</label>
            </td>
            <td>
                
            <input type = "number" name="number" id="num">
        </td>
        </tr>
        <tr>
            <td>
                <label for = "alnum">ALTERNATIVE NUMBER</label>
            </td>
            <td>
                <input type="number" name="alternum"  id="alnum">
            </td>
        </tr>
        <div class="gd">
        <tr>
            <td>
                <label for ="gen">GENDER</label>
            </td>
               <td>
                    <input type="radio" name="gen" id="male" value="MALE">MALE
                    <input type="radio" name="gen" id="female" value="FEMALE">FEMALE
                    <input type="radio" name="gen" id="others"value="OTHERS">OTHERS
                    </td>
                </tr>
                </div>
                <tr>
                    <td> 
                        <label for = "email">email</label>
                    </td>
                    <td>
                        <input type="email" name="email"  id="email">
                     </td>
                </tr>
                <tr>
                    <td> 
                        <label for = "comdate">COMPLAINT DATE</label>
                    </td>
                    <td>
                        <input type="date" name="complaintdate"  id="comdate">
                     </td>
                </tr>
                <tr>
                    <td> 
                        <label for = "typecom">TYPES OF COMPLAINT</label>
                    </td>
                    <td>
                        <select name="dob" id="dob">
                            <option value="">select types</option>
                            <option value="pipe">street pipe</option>
                            <option value="light">street light</option>
                            <option value="road">street road</option>
                        </select>
                     </td>
                </tr>
                <tr>
                    <td> 
                        <label for = "dis">DISTRICT</label>
                    </td>
                    <td>
                        <input type="text" name="district"  id="dis">
                     </td>
                </tr>
                <tr>
                    <td> 
                        <label for = "city">CITY</label>
                    </td>
                    <td>
                        <input type="text" name="city"  id="city">
                     </td>
                </tr>
                <tr>
                    <td> 
                        <label for = "street">STREET</label>
                    </td>
                    <td>
                        <input type="text" name="street"  id="street">
                     </td>
                </tr>
                <tr>
                    <td> 
                        <label for = "addrs">ADDRESS</label>
                    </td>
                    <td>
                        <input type="text" name="address"  id="addrs">
                     </td>
                </tr>
                <tr>
                    <td> 
                        <label for = "attach">ATTACH YOUR IMAGE</label>
                    </td>
                    <td>
                        <input type="file" name="image"  id="attach">
                     </td>
                </tr>
    </table>
    <div class="btn">
    <input type="submit"  value="Submit">
    </div>
    </div>
    </form>
</div>    
</body>
</html>