<?php    $connect = mysqli_connect("localhost","userkang","1","dbkang") or die("fail");
                $id = $_GET['id'];
                $number = $_GET['number'];
                $query = "select title, content, date, id from board where number=$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
 
                $title = $rows['title'];
                $content = $rows['content'];
                $usrid = $rows['id'];
 
                session_start();
 
 
                $URL = "./index.php";
?> 
<body>

        <form method = "get" action = "modify_action.php">
        <table  style="padding-top:50px" text-align = center width=700 text-border=0 cellpadding=2 >
                <tr>
                <td height=20 text-align= center text-bgcolor=#ccc><text-font color=white> 글수정</text-font></td>
                </tr>
                <tr>
                <td text-bgcolor=white>
                <table class = "table2">
                <tr>
                        <td>작성자</td>
                        <td><input type="hidden" name="id" value="<?=$_SESSION['userid']?>"><?=$_SESSION['userid']?></td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type = text name = title size=60 value="<?=$title?>"></td>
                        </tr>
 
                        <tr>
                        <td>내용</td>
                        <td><textarea name = content cols=85 rows=15><?=$content?></textarea></td>
                        </tr>
 
                        </table>
 
                        <text-center>
                        <input type="hidden" name="number" value="<?=$number?>">
                        <input type = "submit" value="작성">
                        </text-center>
                </td>
                </tr>
        </table>
</body>