<?php
include "../Inquiry/connectionInquiries.php";

if(isset($_POST["submit"]))
{
    mysqli_query($conn1,"insert into inquiries values(NULL,'$_POST[name]','$_POST[email]','$_POST[message]')");
    ?>
    <script type="text/javascript">
        alert("Inquiry has been successfully submitted");
        window.location.href=window.location.href;
    </script>


    <?php
}


include '../Inquiry/Inquiry.html';

?>