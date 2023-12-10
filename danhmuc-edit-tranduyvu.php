<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua thong tin danh muc - Tran Duy Vu</title>
</head>
<body>
    <?php
        include("ketnoi-tranduyvu.php");
        if(isset($_GET["MADM_TDV"])){
            $MADM_TDV = $_GET["MADM_TDV"];
            $sql_edit_tdv = "SELECT * FROM `danhmuc_tdv` WHERE MADM_TDV = '$MADM_TDV'";
            $result_edit_tdv = $conn_tdv->query($sql_edit_tdv);
            $row_edit_tdv = $result_edit_tdv->fetch_array();
        }else{
            header("Location: danhmuc-list-tranduyvu.php");
        }
        $sql_pd_tdv = "SELECT * FROM `sanpham_tdv` WHERE 1=1";
        $res_pd_tdv = $conn_tdv->query($sql_pd_tdv);

        $error_messenger_tdv = "";
        if(isset($_POST["btnSubmit_TDV"])){
            $MADM_TDV = $_POST["MADM_TDV"];
            $TENDM_TDV = $_POST["TENDM_TDV"];
            $TRANGTHAI_TDV = $_POST["TRANGTHAI_TDV"];

            $sql_update_tdv = "UPDATE danhmuc_tdv SET";
            $sql_update_tdv .= " MADM_TDV = '$MADM_TDV',";
            $sql_update_tdv .= " TENDM_TDV = '$TENDM_TDV',";
            $sql_update_tdv .= " TRANGTHAI_TDV = '$TRANGTHAI_TDV'";
            $sql_update_tdv .= " WHERE MADM_TDV = '$MADM_TDV'";

            if($conn_tdv->query($sql_update_tdv)){
                header("Location: danhmuc-list-tranduyvu.php");
            }else{
                $error_messenger_tdv="Loi sua du lieu " . mysqli_error($conn_tdv); 
            }
        }
    ?>
    <section>
        <h1>Sua thong tin danh muc - Tran Duy Vu</h1>
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
                        <td></td>
                        <td>
                            <input type="submit" value="Sua -Tran Duy Vu" name="btnSubmit_TDV">
                            <input type="reset" value="Lam lai -Tran Duy Vu" name="btnReset_TDV">
                        </td>
                    </tr>
                </tbody>
                
            </table>
            <div>
                <?php echo $error_messenger_tdv; ?>
            </div>
        </form>
        <a href="danhmuc-list-tranduyvu.php">Danh sach danh muc</a>
    </section>
</body>
</html>