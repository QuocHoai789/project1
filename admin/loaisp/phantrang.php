 <?php 
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
        // $conn = mysqli_connect('localhost', 'root', 'vertrigo', '');
 $conn = @mysqli_connect("localhost", "root", "") or die("Không thể kết nối !!!");
	mysqli_select_db($conn, "doan_web") or die("DB không tồn tại !!!");
	mysqli_query($conn,"set names'utf8'");
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(MaLoai) as total from loaisp');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total']; // so luong dong ghi trong db
 
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        $limit = 5;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $result = mysqli_query($conn, "SELECT * FROM loaisp LIMIT $start, $limit");
 
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
            while ($row = mysqli_fetch_assoc($result)){
            	echo '<tr><td> 1</td>';
                echo '<td style="border:1px solid red;">' . $row['TenLoai'] . '</td></tr>';
            }
            ?>
            </table>
        </div>
        <div class="pagination">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="phantrang.php?page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="phantrang.php?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="phantrang.php?page='.($current_page+1).'">Next</a> | ';
            }
           ?>