<!DOCTYPE html>
<html lang="ko">
<head>
<title></title>
<meta charset="utf-8">
<script type="text/javascript" src="chat.js"></script>
<link rel="stylesheet" type="text/css" href="chat.css" />
</head>
<body>
<h3>간단한 대화 코딩2</h3>
<dl id="list"></dl> <!-- dl(Definition List)용어정의 선언 -->
<form onsubmit="showChat(); return false;"> <!-- onsubmit은 form이 action으로 데이터를 보내기 전에 발생하는 이벤트를 지정 -->
	<input name="msg" id="msg" type="text" />
	<input name="btn" id="btn" type="submit" value="입력" />
</form>
</body>
</html>