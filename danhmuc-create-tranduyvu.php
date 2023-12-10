<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them moi thong tin danh muc - Tran Duy Vu</title>
</head>
<body>
    <?php
        include("ketnoi-tranduyvu.php");
        $sql_pd_tdv = "SELECT * FROM `sanpham_tdv` WHERE 1=1";
        $res_pd_tdv = $conn_tdv->query($sql_pd_tdv);

        $error_messenger_tdv = "";
        if(isset($_POST["btnSubmit_TDV"])){

            $MADM_TDV = $_POST["MADM_TDV"];
            $TENDM_TDV = $_POST["TENDM_TDV"];
            $TRANGTHAI_TDV = $_POST["TRANGTHAI_TDV"];

            $sql_insert_tdv = "INSERT INTO `danhmuc_tdv` (`MADM_TDV`, `TENDM_TDV`, `TRANGTHAI_TDV`)";
            $sql_insert_tdv .=" VALUES ('$MADM_TDV', '$TENDM_TDV', '$TRANGTHAI_TDV')";

            if($conn_tdv->query($sql_insert_tdv)){
                header("Location: danhmuc-list-tranduyvu.php");
            }else{
                $error_messenger_tdv="Loi them moi " . mysqli_error($conn_tdv); 
            }
        }
    ?>
    <section>
        <h1>Them moi thong tin danh muc - Tran Duy Vu</h1>
        <form name="frm_tdv" method="post" action="">
            <table border="1" width="100%" cellspacing="0" cellpadding="5">
                <tbody>
                    <tr>
                        <td>Ma</td>
                        <td>
                            <input type="text" name="MADM_TDV" id="MADM_TDV">
                        </td>
                    </tr>
                    <tr>
                        <td>Ten</td>
                        <td>
                            <input type="text" name="TENDM_TDV" id="TENDM_TDV">
                        </td>
                    </tr>
                    <tr>
                        <td>Trang thai</td>
                        <td>
                            <select name="TRANGTHAI_TDV">
                                <option value="1">Hoat dong</option>
                                <option value="0">Khong hoat dong</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>San pham</td>
                        <td>
                            <!-- // doc du lieu tu bang san pham -->
                            <select name="SANPHAM_TDV" id="SANPHAM_TDV">
                                <?php
                                    while($row = $res_pd_tdv->fetch_array()):
                                ?>
                                    <option value="<?php echo $row["TENSP_TDV"]?>">
                                        <?php echo $row["TENSP_TDV"]?>
                                    </option>
                                    <?php
                                        endwhile;
                                    ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Them -Tran Duy Vu" name="btnSubmit_TDV">
                            <input type="reset" value="Lam lai -Tran Duy Vu" name="btnReset_TDV">
                        </td>
                    </tr>
                </tbody>
                
            </table>
            <div>
                <?php echo $error_messenger_tdv; ?>
            </div>
        </form>
        <a href="danhmuc-list-tranduyvu.php">Danh sach san pham</a>
    </section>
</body>
</html>