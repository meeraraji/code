       <?php
    //
    //$id = filter_input(INPUT_POST,'doctorid');
       $con=mysqli_connect("localhost","root","","edpp") or die('error');
      $id = filter_input(INPUT_POST,'docid');
       
    $query1 = "SELECT * FROM tbl_doc_reg WHERE doc_id = '$id'";
    $result1 =  mysqli_query ($con,$query1);
    while ($row = mysqli_fetch_array($result1)) {
        $enabled = $row ["enabled"];
    }
    if ($enabled == 'enabled') {
        $enabled = 'disabled';
    } else {
        $enabled = 'enabled';
    }
    echo $enabled;
        $query2 = "UPDATE tbl_doc_reg SET enabled = '$enabled'
                    WHERE doc_id = '$id'";              
        mysqli_query ($query2);
    
    ?>
    <table>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Statues</td>
        </tr>
    <?php
    // Loop through the table and display all records in tabular format
    $con=mysqli_connect("localhost","root","","edpp") or die('error');
    $query = "SELECT * FROM tbl_doc_reg";
    $result2 = mysqli_query ($query);
    $count = mysqli_num_rows($result2); // Count table rows
    while ($row = mysqli_fetch_array($result2))
    {
        $id = $row["id"];
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $email = $row ["email"];
        $password = $row ["password"];
        $enabled = $row ["enabled"];
    ?>
    <tr>
        <td>><?php echo $id; ?></td>
        <td><?php echo $firstname; ?></td>
        <td><?php echo $lastname; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $password; ?></td>
    </tr>
    <?php // Close our while loop
    }
    ?>
    </table>
    </form>