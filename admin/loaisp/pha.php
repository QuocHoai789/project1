 <?php 
        include('../../csdl.php');
        $kq = mysqli_query($link, 'select count(MaLoai) as tong from loaisp');
        $dong = mysqli_fetch_assoc($kq);
        $soluongdong = $dong['tong']; // so luong dong ghi trong db
 
        // BƯỚC 3: TÌM limit VÀ trang hiện tại
        $tranghientai = isset($_GET['page']) ? $_GET['page'] : 1;

        $limit = 5;
 
        // BƯỚC 4: TÍNH TOÁN tongtrang VÀ START
        // tổng số trang
        $tongtrang = ceil($soluongdong / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến tongtrang
        if ($tranghientai > $tongtrang){
            $tranghientai = $tongtrang;
        }
        else if ($tranghientai < 1){
            $tranghientai = 1;
        }
 
        // Tìm Start
        $start = ($tranghientai - 1) * $limit;
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $kq = mysqli_query($link, "SELECT * FROM loaisp LIMIT $start, $limit");
 
        ?>
        <div>
            <?php 
            // PHẦN HIỂN THỊ TIN TỨC
            // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC


            // bang
            ?>

            <table>
            	<tr>
            		<td>STT</td>
            		<td >TEN</td>
            	</tr>

            
            <?php
            $stt = 1;
            while ($dong = mysqli_fetch_assoc($kq)){
            	echo '<tr><td> 1</td>';
                echo '<td style="border:1px solid red;">' . $dong['TenLoai'] . '</td></tr>';
            }
            ?>
            </table>
        </div>
        <div class="pagination">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và tongtrang > 1 mới hiển thị nút prev
            if ($tranghientai > 1 && $tongtrang > 1){
                echo '<a href="pha.php?page='.($tranghientai-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $tongtrang; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $tranghientai){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="pha.php?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $tongtrang và tongtrang > 1 mới hiển thị nút prev
            if ($tranghientai < $tongtrang && $tongtrang > 1){
                echo '<a href="pha.php?page='.($tranghientai+1).'">Next</a> | ';
            }
           ?>