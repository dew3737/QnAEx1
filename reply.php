<?php

$host = 'localhost';
$user = 'dew3737';
$pw = 'sls0318';
$dbName = 'dew3737';

$mysqli = new mysqli($host, $user, $pw, $dbName);

//DB rmsg 검색
$sql = "SELECT * FROM reply WHERE rmsg LIKE '%안녕%'";

//rmsg 검색 결과
$result = $mysqli->query($sql);

if($result->num_rows > 0){  //num_rows : 데이터베이스에 저장된 row의 개수 구하기
    while($row = $result->fetch_assoc()){ //fetch : 데이터베이스에서 결과를 가져올 때 쓰는 함수
                                          //fetch_assoc() : 필드명이나 쿼리문에 사용된 alias로 참조
        echo $row['rmsg'].'';
    }
}

?>