<?php
                $connect = mysqli_connect("localhost","userkang","1","dbkang") or die("fail");
                $query ="select * from member order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
 
                session_start();
 
                if(isset($_SESSION['id'])) {
                        echo $_SESSION['id'];?>님 안녕하세요
                        <br/>
        <?php
                }
                else {
        ?>              <button onclick="location.href='./login.php'">로그인</button>
                        <br />
        <?php   }
        ?>