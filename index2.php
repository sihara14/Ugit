<?php
	require_once("/var/www/html/dbconfig.php");
?>

<!doctype html>
<head>
<meta charset="UTF-8">
    <div id="write_btn">
      <a href="www.owo.com/webmail"><button>다람쥐</button></a>
    </div>
    <tr>
        <td width = "50" text-align="center">로그인 되었습니다.</td>
        <td width = "50" text-align="center">행복하세요.</td>
    </tr>
        <div id="write_btn">
        <a href="./write2.php"><button>글쓰기</button></a>
        <a href="./logout.php"><button>로그아웃</button></a>
        </div>
    
<title>게시판</title>
<head>

	<meta charset="utf-8" />

	<title>자유게시판</title>

	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
  
<div id="board_area"> 
  <h1>자유게시판</h1>
  <?php
      echo"<img src='photo1.png'/>";
  ?>
  <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
    <table class="list-table">
      <thead>
          <tr>
                <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
          </tr>
    </thead>
    <tbody>
					<?php
						$sql = 'select * from board order by number desc';
						$result = $db->query($sql);
						while($row = $result->fetch_assoc())
						{
							$datetime = explode(' ', $row['date']);
							$date = $datetime[0];
							$time = $datetime[1];
							if($date == Date('Y-m-d'))
								$row['date'] = $time;
							else
								$row['date'] = $date;
					?>
				<tr>
					<td class="number"><?php echo $row['number']?></td>
                    <td class="title">
					 <a href="./view.php?bno=<?php echo $row['number']?>"><?php echo $row['title']?></a>
                    </td>
					<td class="author"><?php echo $row['id']?></td>
					<td class="date"><?php echo $row['date']?></td>
					<td class="hit"><?php echo $row['hit']?></td>
				</tr>
					<?php
						}
					?>
			</tbody>
        <?php
            ?>
        <?php ?>
    </table>
    <div id="write_btn">
      <a href="./write2.php"><button>글쓰기</button></a>
      <a href="./logout.php"><button>로그아웃</button></a>
    </div>
  </div>
</body>
</html>