<?php

$host = 'localhost';
$user = 'dew3737';
$pw = 'sls0318';
$dbName = 'dew3737';

$mysqli = new mysqli($host, $user, $pw, $dbName);

//DB rmsg �˻�
$sql = "SELECT * FROM reply WHERE rmsg LIKE '%�ȳ�%'";

//rmsg �˻� ���
$result = $mysqli->query($sql);

if($result->num_rows > 0){  //num_rows : �����ͺ��̽��� ����� row�� ���� ���ϱ�
    while($row = $result->fetch_assoc()){ //fetch : �����ͺ��̽����� ����� ������ �� ���� �Լ�
                                          //fetch_assoc() : �ʵ���̳� �������� ���� alias�� ����
        echo $row['rmsg'].'';
    }
}

?>