<?php
// session_start();
include('connect.php');
if(isset($_GET['app_id'])){
    $app_id = $_GET['app_id'];
    $this_doc_id = $_SESSION['user_role_id'];
    $check_doc_id = mysqli_query($con, "SELECT patient_id FROM appointments WHERE patient_id = '$this_doc_id' AND appointment_id = '$app_id'");
    if(mysqli_num_rows($check_doc_id) > 0){
        $check_doc_res = mysqli_fetch_array($check_doc_id);
        $other_doc_id = $check_doc_res['patient_id'];

        if($this_doc_id == $other_doc_id){
            ?>
            <script>
                history.back(-1);
            </script>
            <?php
        }
    }
}
else if(!isset($_GET['app_id'])){
    ?>
    <script>
        history.back(-1);
    </script>
    <?php
}
else if($_GET['app_id'] == ''){
    ?>
    <script>
        history.back(-1);
    </script>
    <?php
}