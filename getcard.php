<?php

	require("configure/bulletinboard.php");
	require("library/bulletinboard.php");

	$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);


	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	     // The request is using the POST method


	 		$id = intval($_REQUEST['id']);
	 		$sql = "SELECT * FROM card WHERE cardid=".$id;
	 		$result = mysqli_query($conn, $sql);
	 		$row = mysqli_fetch_assoc($result);
	 		extract($row);

		 	echo "잘하는 것:	".htmlspecialchars($row['begood'])."<br/>";
		 	echo "배우고 싶은것: ".htmlspecialchars($row['wannagood'])."<br/>";
		 	echo "요일:	".strip_tags($row['day'], '<a><h1><h2><h3><h4><h5><ul><ol><li>')."<br/>";
		 	echo "시간대:	".strip_tags($row['time'], '<a><h1><h2><h3><h4><h5><ul><ol><li>')."<br/>";
		 	echo "홈페이지 주소:	".strip_tags($row['homepage'], '<a><h1><h2><h3><h4><h5><ul><ol><li>')."<br/>";
		 	echo "교류 지역:	".strip_tags($row['region'], '<a><h1><h2><h3><h4><h5><ul><ol><li>')."<br/>";
		 	echo "하고 싶은 말:	".strip_tags($row['memo'], '<a><h1><h2><h3><h4><h5><ul><ol><li>')."<br/>";
		 	echo "카드 생성일:	".strip_tags($row['created'], '<a><h1><h2><h3><h4><h5><ul><ol><li>'."<br/>");


	} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
			$begood = intval($_REQUEST['Search']);
			$sql = "SELECT * FROM card WHERE begood=".$begood;
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);

			extract($row);

			echo "잘하는 것:	".htmlspecialchars($row['begood'])."<br/>";
			echo "배우고 싶은것: ".htmlspecialchars($row['wannagood'])."<br/>";
			echo "요일:	".strip_tags($row['day'], '<a><h1><h2><h3><h4><h5><ul><ol><li>')."<br/>";
			echo "시간대:	".strip_tags($row['time'], '<a><h1><h2><h3><h4><h5><ul><ol><li>')."<br/>";
			echo "홈페이지 주소:	".strip_tags($row['homepage'], '<a><h1><h2><h3><h4><h5><ul><ol><li>')."<br/>";
			echo "교류 지역:	".strip_tags($row['region'], '<a><h1><h2><h3><h4><h5><ul><ol><li>')."<br/>";
			echo "하고 싶은 말:	".strip_tags($row['memo'], '<a><h1><h2><h3><h4><h5><ul><ol><li>')."<br/>";
			echo "카드 생성일:	".strip_tags($row['created'], '<a><h1><h2><h3><h4><h5><ul><ol><li>'."<br/>");

	}

	?>
