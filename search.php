<?php 
    $conn = mysqli_connect("localhost", "root", "", "search");
    if(isset($_POST['query'])){
        $val = $_POST['query'];
        $output = "<ul class='list_res'>";
        $dataSearch = mysqli_query($conn, "SELECT * FROM infor_search WHERE name LIKE '%$val%'");
        if(mysqli_num_rows($dataSearch) > 0){
            while($row = mysqli_fetch_assoc($dataSearch)){
                $output .= "<li>".$row['name']."</li>";
            }
        }
        else{
            $output .= "<li>No result</li>";
        }
        $output .= "</ul>";

        echo $output;
    }
?>