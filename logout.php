<?php
 
        session_start();
        $result = session_destroy();
 
        if($result) {
?>
        <script>
                alert("로그아웃 되었습니다.");
        </script>
    <div id="write_btn">
      <a href="./index.php"><button>main</button></a>
      <a href="./login.php"><button>로그인</button></a>
    </div>
<?php   }
?>