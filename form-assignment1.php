<html>
    <head>
        <title>Form Data on Table</title>
    </head>
    <body>
        <form method="POST" action="form assignment.php">
            Name*<input type="text" name="name" placeholder="First Name" required/><br>
            E-mail*<input type="email" name="mail" placeholder="Mail@example.com"required/><br>
            Contact No.*<input type="contact" name="contact" placeholder="Phone Number" required/><br>
            City*<Select name="city" required>
                <option value="1"> Dehradun</option>
                <option value="2"> Delhi</option>
                <option value="3"> Chandigarh</option>
                <option value="4"> Mumbai</option>
                <option value="5"> Kolkata</option>
                <option value="6"> Other</option>
                </Select><br>
            Course*<input type="text" name="course" required/><br>
            Interest<input type="radio"  name="I1"/>Sport
                <input type="radio"  name="I2"/>Program
                <input type="radio" name="I3"/>Reading
                <input type="radio" name="I4"/>Dance
                <input type="radio" name="I5"/>Singing<br>
            <button class="submit" type="submit" name="submit" value="submit">SUBMIT</button></td></tr>
        </form>

        <?php 
        if(isset($_POST['submit'])){
            $nm= $_POST['name'];
            $ml= $_POST['mail'];
            $ct= $_POST['contact'];
            $cty= $_POST['city'];
            $crse= $_POST['course'];
            echo" ";
            echo "<table border='1px'>
            <thead>
            <tr>
                <td>Name</td>
                <td>Email ID</td>
                <td>Contant No.</td>
                <td>City</td>
                <td>Course</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>$nm</td>
                <td>$ml</td>
                <td>$ct</td>
                <td>$cty</td>
                <td>$crse</td>
            </tr>
            </tbody>
        </table> ";
        }
        else{
            echo "No input";
        }
        ?>
    </body>
</html>
