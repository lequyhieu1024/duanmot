<?php
    function search(){
        $search_input = $_POST['search_input']; 
        $sql ="SELECT * FROM khoa_hoc WHERE ten_khoa_hoc LIKE '%$search_input%'";
        $result = pdo_query($sql);
        return $result;
    }
?>