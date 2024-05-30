<?php
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../path/to/sweetalert.min.js"></script>
    <title>Case Study</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $userfirstname = $_POST['userfirstname'];
        $userlastname = $_POST['userlastname'];
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];

        $sql = "INSERT INTO `users`(`userfirstname`, `userlastname`, `useremail`, `userpassword`) VALUES (?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssss", $userfirstname, $userlastname, $useremail, $userpassword);

        if ($stmt->execute()) { ?>

            <script type="text/javascript">
                swal("You have created your Account", "Account has been created.", "Created!")
                    .then(function() {
                        window.location = "home.php";
                    });
            </script>

        <?php }
    }
    if (isset($_POST['login'])) {
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];

        $sql = "SELECT * FROM `users` WHERE `useremail`= ? AND `userpassword` =?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ss", $useremail, $userpassword);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($result->num_rows == 1) {
            $name = "SELECT `userfirstname` FROM `users` WHERE `useremail`= ? AND `userpassword` =?";
            $st = $con->prepare($sql);
            $st->bind_param("ss", $useremail, $userpassword);
        ?>

            <script src="../path/to/sweetalert.min.js"></script>
            <script>
                swal({
                    title: "Logged In!",
                    text: "Welcome <?php echo $row['userfirstname']; ?>.",
                    icon: "success",
                    buttons: false,
                    closeOnClickOutside: false,
                    closeOnEsc: false,
                    timer: 2000
                }).then(function() {
                    window.location = "home.php";
                });
            </script>


        <?php
        } else {

        ?>
            <script type="text/javascript">
                swal("Wrong Password or Email.", "Please try again! Make sure to check your credentials.", "Error")
                    .then(function() {
                        window.location = "index.php";
                    });
            </script>
        <?php
        }
    };


    if (isset($_POST['update'])) {
        $username = $_POST['userfirstname'];
        $usersection = $_POST['userlastname'];
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];
        $userid = $_POST['userid'];

        $sql = "UPDATE `users` SET `userfirstname` = ?,`userlastname` = ?, `useremail` = ?, `userpassword` = ? WHERE userid = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssss", $username, $usersection, $useremail, $userpassword, $userid);
        if ($stmt->execute()) { ?>
            <script type="text/javascript">
                swal("You have updated your Account", "Account has been updated.", "Updated!")
                    .then(function() {
                        window.location = "admin-table.php";
                    });
            </script>
        <?php }
    }
    if (isset($_POST['delete'])) {
        $userid = $_POST['userid'];

        $sql = "DELETE FROM users WHERE userid = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $userid);
        if ($stmt->execute()) { ?>
            <script type="text/javascript">
                swal("You have deleted your Account", "Account has been deleted.", "Deleted!")
                    .then(function() {
                        window.location = "admin-table.php";
                    });
            </script>

    <?php }

};

if (isset($_POST['admin-auth'])) {
    $adminname = $_POST['adminname'];
    $adminpassword = $_POST['adminpassword'];

    $sql = "SELECT * FROM `admin` WHERE `adminname`= ? AND `adminpassword` =?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $adminname, $adminpassword);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($result->num_rows == 1) {
        $name = "SELECT `adminname` FROM `admin` WHERE `adminame`= ? AND `adminpassword` =?";
        $st = $con->prepare($sql);
        $st->bind_param("ss", $adminname, $adminpassword);
    ?>

        <script src="../path/to/sweetalert.min.js"></script>
        <script>
            swal({
                title: "Logged In!",
                text: "Welcome <?php echo $row['adminname']; ?>.",
                icon: "success",
                buttons: false,
                closeOnClickOutside: false,
                closeOnEsc: false,
                timer: 2000
            }).then(function() {
                window.location = "admin-table.php";
            });
        </script>


    <?php
    } else {

    ?>
        <script type="text/javascript">
            swal("Wrong Password or Email.", "Please try again! Make sure to check your credentials.", "Error")
                .then(function() {
                    window.location = "admin-auth.php";
                });
        </script>
    <?php
    }
};

if (isset($_POST['order'])) {
    $itemid = $_POST['itemid'];
    $useraddress = $_POST['useraddress'];
    $orderemail = $_POST['orderemail'];

    $sql = "INSERT INTO `orders`(`itemid`, `useraddress`, `orderemail`) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sss", $itemid, $useraddress, $orderemail);

    if ($stmt->execute()) { ?>

        <script type="text/javascript">
            swal("Order is Succesful", "You have succesfully ordered an item.", "Ordered!")
                .then(function() {
                    window.location = "home.php#order";
                });
        </script>

    <?php }
}


    ?>

</body>

</html>

<style>
    * {
        background: linear-gradient(180deg, transparent, #03e9f4);
    }
</style>