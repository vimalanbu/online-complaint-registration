<html>
<head>
    <title>COMPLAINT RESGISTER</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="container">
    <form action="admin_db.php" method="post">
    <h3>COMPLAINT ADMIN UPDATE FORM</h3>
    <div class="tb">

    <table>
        <tr>
            <td>
                <label for="name">NAME</label>
            </td>
            <td>
                <input type ="text" name="name" id="fname">
            </td>
        </tr>
       
        <tr>
            <td>
                <label for="num">PHONENUMBER</label>
            </td>
            <td>
                
            <input type = "number" name="phone_number" id="num">
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
                        <label for = "types_of_complaint">TYPES OF COMPLAINT</label>
                </td>
                <td>
                        <select name="types_of_complaint" id="types_of_complaint">
                            <option value="">select types</option>
                            <option value="pipe">street pipe</option>
                            <option value="light">street light</option>
                            <option value="road">street road</option>
                    </select>
                    </td>
                </tr>
                
             <tr>
                <td> 
                        <label for ="Status">Status</label>
                </td>
                <td>
                        <select name="Status" id="Status">
                            <option value="">select types</option>
                            <option value="complited">complited</option>
                            <option value="processing">processing</option>
                            <option value="max 3days">max 3days</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td> 
                        <label for = "feedback_mass"></label>
                    </td>
                    <td>
                        <input type="text" name="feedback_mass"  id="feedback_mass">
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