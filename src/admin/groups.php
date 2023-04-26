<?php 
    include("../../database/db_connection.php");
    include("../../includes/admin/route_protection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Science Departement</title>
    <link rel="stylesheet" href="/styles/admin.css">
    <link rel="stylesheet" href="/styles/aside.css">
    <link rel="stylesheet" href="/styles/list.css">
    <link rel="stylesheet" href="/styles/search.css">
    <link rel="stylesheet" href="/styles/buttons.css">
</head>
<body>
    <div class="container">

        <?php
            $aside_selected_link = "Groups";
            include("../../includes/admin/aside.php");
        ?>
        
        <div class="page-content">
            <div class="page-header">
                <div class="page-title">Groups</div>
            </div>
            <div class="section-wrapper">
                <div class="section-content">
                    <div class="row">
                        <button id="open-dialogue-btn" class="btn">Create new lecture</button>
                    </div>
                    <div class="list-control">
                        <div class="search">
                            <input type="text" placeholder="search..." />
                            <div class="search-icon">
                                <img src="/assets/icons/search.svg" alt="search-icon" />
                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <div class="list-header">
                            <div class="list-header-item">Group Id</div>
                            <div class="list-header-item">Group Number</div>
                            <div class="list-header-item">Speciality</div>
                            <div class="list-header-item">Responsable</div>
                            <div class="list-header-item">Total Students</div>
                        </div>
                        <div class="list-body">
                            <?php
                                $students = [0,1,2,3,4,5,6];
                                foreach($students as $student){
                                    echo '<div class="list-row">
                                            <div class="list-item">'.$student.'</div>
                                            <div class="list-item">04</div>
                                            <div class="list-item">L1 Computer Science</div>
                                            <div class="list-item">Abdelfetah Lachenani</div>
                                            <div class="list-item">24</div>
                                         </div>';
                                }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>