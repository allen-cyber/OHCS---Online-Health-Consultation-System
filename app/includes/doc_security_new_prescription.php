<?php
// session_start();
include('connect.php');
    
if(!isset($_GET['app_id'])){
    ?>
    <script>
        history.back(-1);
    </script>
    <?php
}
else if(!isset($_GET['pat_id'])){
    ?>
    <script>
        history.back(-1);
    </script>
    <?php
}
else if(!isset($_GET['pres_id'])){
    ?>
    <script>
        history.back(-1);
    </script>
    <?php
}