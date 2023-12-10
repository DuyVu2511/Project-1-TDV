<?php 
        include("ketnoi-tranduyvu.php");
        $sql_tdv = "SELECT * FROM `danhmuc_tdv` WHERE 1=1 ";
        $result_tdv = $conn_tdv->query($sql_tdv);

    ?>
<?php 
        //  xử lý với chức năng xóa
        if(isset($_GET["MADM_TDV"])){
            // thực hiện xóa sản phẩm theo proid_tdv
            $MADM_TDV = $_GET["MADM_TDV"];
            // tạo truy vấn xóa
            $sql_delete_tdv = "DELETE FROM DANHMUC_TDV WHERE MADM_TDV='$MADM_TDV'";
            // Thực thi truy vấn
            if($conn_tdv->query($sql_delete_tdv)){
                header("Location:danhmuc-list-tranduyvu.php");
            }else{
                echo "<script> alert('lỗi xóa'); </script>";
            }
        }
    ?>