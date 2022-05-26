<?php
include "../Inquiry/connectionInquiries.php";

if(isset($_POST["submit"]))
{
    $password = md5($_POST['password']);
    mysqli_query($conn1,"insert into inquiries values(NULL,'$_POST[name]','$_POST[email]','$_POST[message]')");
    ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
}


include '../Inquiry/Inquiry.html';

?>