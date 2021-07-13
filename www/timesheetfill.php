<?php
$db_host = "localhost";
$db_name = "timesheet";
$db_user = "Surya";
$db_pass = "z)5tik0NW_]E@-P2";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $sql = "INSERT INTO test1 (Employee_ID, Project_ID, Monday, Tuesday, Wednesday, Thursday, Friday)
            VALUES ('" . $_POST['Employee_ID'] . "','"
                       . $_POST['Project_ID'] . "','"
                       . $_POST['Monday'] ."','"
                       . $_POST['Tuesday'] ."','"
                       . $_POST['Wednesday'] ."','"
                       . $_POST['Thursday'] ."','"
                       . $_POST['Friday'] ."')";

    $results = mysqli_query($conn, $sql);

    if ($results === false) {

        echo mysqli_error($conn);

    } else {

        $id = mysqli_insert_id($conn);
        echo "Inserted record with ID: $id";

    }

}

?>


<h2>Timesheet</h2>

<form method="post">

    <div>
        <label for="Employee_ID">Enter Employee_ID</label>
        <input name="Employee_ID" id="Employee_ID" placeholder="Employee_ID">
    </div>

    <div>
        <label for="Project_ID">Enter Project_ID</label>
        <input name="Project_ID" id="Project_ID" placeholder="Project_ID">
    </div>

    <div>
        <label for="Monday">Monday</label>
        <input name="Monday" id="Monday">
    </div>

    <div>
        <label for="Tuesday">Tuesday</label>
        <input name="Tuesday" id="Tuesday">
    </div>

    <div>
        <label for="Wednesday">Wednesday</label>
        <input name="Wednesday" id="Wednesday">
    </div>

    <div>
        <label for="Thursday">Thursday</label>
        <input name="Thursday" id="Thursday">
    </div>

    <div>
        <label for="Friday">Friday</label>
        <input name="Friday" id="Friday">
    </div>

    <button>Add</button>

</form>

<?php require 'includes/footer.php'; ?>
