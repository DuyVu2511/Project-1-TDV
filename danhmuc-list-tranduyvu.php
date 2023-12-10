<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH DANH MUC - TRẦN DUY VŨ</title>
</head>
<body>
    <?php 
        include("ketnoi-tranduyvu.php");
        $sql_tdv = "SELECT * FROM `danhmuc_tdv` WHERE 1=1 ";
        $result_tdv = $conn_tdv->query($sql_tdv);

    ?>
    <section>
        <h1>DANH SÁCH DANH MỤC - TRẦN DUY VŨ</h1>
        <hr/>
        <table width="100%" border="1px">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã danh mục</th>
                    <th>Tên</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($result_tdv->num_rows>0){
                        $stt=0;
                        while($row_tdv=$result_tdv->fetch_array()):
                            $stt++;
                ?>
                    <tr>
                        <td><?php echo $stt; ?></td>
                        <td><?php echo $row_tdv["MADM_TDV"]; ?></td>
                        <td><?php echo $row_tdv["TENDM_TDV"]; ?></td>
                        <td><?php echo $row_tdv["TRANGTHAI_TDV"]; ?></td>
                        <td>
                            <a href="danhmuc-edit-tranduyvu.php?MADM_TDV=<?php echo $row_tdv["MADM_TDV"];?>">
                                Sửa
                            </a>
                            |
                            <a href="danhmuc-delete-tranduyvu.php?MADM_TDV=<?php echo $row_tdv["MADM_TDV"];?>"
                                onclick="if(confirm('Bạn có muốn xóa không')){return true;}else{return false;}">
                                Xóa
                            </a>
                        </td>
                    </tr>
                <?php 
                        endwhile;
                    }else{
                ?>
                    <tr>
                        <td colspan="9">Chưa có dữ liệu</td>
                    </tr>
                <?php
                    };
                ?>
            </tbody>
        </table>
    </section>

</body>
</html>