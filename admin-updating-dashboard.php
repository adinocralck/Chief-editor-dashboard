<?php

if (isset($_POST['publish'])) {

$serverName = "localhost";
$userName = "hanorjcg";
$password = "uwanyirigira josepha";
$dbName = "hanorjcg_hanorwanda";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
	

	$category = mysqli_real_escape_string($conn, $_POST['category']);
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$slug = mysqli_real_escape_string($conn, $_POST['slug']);
	$post_date = date('M-d-Y');
	$header = mysqli_real_escape_string($conn, $_POST['header']); 
	$img1 = mysqli_real_escape_string($conn, $_FILES['img1']['name']);
	$paragraph1 = mysqli_real_escape_string($conn, $_POST['paragraph1']);
	$img2 = mysqli_real_escape_string($conn, $_FILES['img2']['name']);
	$paragraph2 = mysqli_real_escape_string($conn, $_POST['paragraph2']);
	$img3 = mysqli_real_escape_string($conn, $_FILES['img3']['name']);
	$paragraph3 = mysqli_real_escape_string($conn, $_POST['paragraph3']);
	$img4 = mysqli_real_escape_string($conn, $_FILES['img4']['name']);
	$paragraph4 = mysqli_real_escape_string($conn, $_POST['paragraph4']);
    $caption1 = mysqli_real_escape_string($conn, $_POST['caption1']);
    $caption2 = mysqli_real_escape_string($conn, $_POST['caption2']);
    $caption3 = mysqli_real_escape_string($conn, $_POST['caption3']);
    $caption4 = mysqli_real_escape_string($conn, $_POST['caption4']);

	$img5 = mysqli_real_escape_string($conn, $_FILES['img5']['name']);
	$caption5 = mysqli_real_escape_string($conn, $_POST['caption5']);

	$img6 = mysqli_real_escape_string($conn, $_FILES['img6']['name']);
	$caption6 = mysqli_real_escape_string($conn, $_POST['caption6']);

	$img7 = mysqli_real_escape_string($conn, $_FILES['img7']['name']);
	$caption7 = mysqli_real_escape_string($conn, $_POST['caption7']);

	$img8 = mysqli_real_escape_string($conn, $_FILES['img8']['name']);
	$caption8 = mysqli_real_escape_string($conn, $_POST['caption8']);

	$img9 = mysqli_real_escape_string($conn, $_FILES['img9']['name']);
	$caption9 = mysqli_real_escape_string($conn, $_POST['caption9']);

	$img10 = mysqli_real_escape_string($conn, $_FILES['img10']['name']);
	$caption10 = mysqli_real_escape_string($conn, $_POST['caption10']);

	$img11 = mysqli_real_escape_string($conn, $_FILES['img11']['name']);
	$caption11 = mysqli_real_escape_string($conn, $_POST['caption11']);

	$img12 = mysqli_real_escape_string($conn, $_FILES['img12']['name']);
	$caption12 = mysqli_real_escape_string($conn, $_POST['caption12']);

	$img13 = mysqli_real_escape_string($conn, $_FILES['img13']['name']);
	$caption13 = mysqli_real_escape_string($conn, $_POST['caption13']);

	$img14 = mysqli_real_escape_string($conn, $_FILES['img14']['name']);
	$caption14 = mysqli_real_escape_string($conn, $_POST['caption14']);

	$img15 = mysqli_real_escape_string($conn, $_FILES['img15']['name']);
	$caption15 = mysqli_real_escape_string($conn, $_POST['caption15']);

	$img16 = mysqli_real_escape_string($conn, $_FILES['img16']['name']);
	$caption16 = mysqli_real_escape_string($conn, $_POST['caption16']);

	$img17 = mysqli_real_escape_string($conn, $_FILES['img17']['name']);
	$caption17 = mysqli_real_escape_string($conn, $_POST['caption17']);

	$img18 = mysqli_real_escape_string($conn, $_FILES['img18']['name']);
	$caption18 = mysqli_real_escape_string($conn, $_POST['caption18']);

	$img19 = mysqli_real_escape_string($conn, $_FILES['img19']['name']);
	$caption19 = mysqli_real_escape_string($conn, $_POST['caption19']);

	$img20 = mysqli_real_escape_string($conn, $_FILES['img20']['name']);
	$caption20 = mysqli_real_escape_string($conn, $_POST['caption20']);
	$author = mysqli_real_escape_string($conn, $_POST['author']);
    $destination = "img/post_images/";

    

	$ql = mysqli_query($conn, "INSERT INTO  articles (category, title, slug, post_date, header, img1, paragraph1, img2, paragraph2, img3, paragraph3, img4, paragraph4, author, img5,	img6,	img7,	img8,	img9,	img10,	img11,	img12,	img13,	img14,	img15,	img16,	img17,	img18,	img19,	img20,	capt1,	capt2,	capt3,	capt4,	capt5,	capt6,	capt7,	capt8,capt9, capt10, capt11, capt12, capt13, capt14, capt15, capt16, capt17, capt18, capt19, capt20)
VALUES ('$category', '$title', '$slug', '$post_date', '$header', '$img1', '$paragraph1', '$img2', '$paragraph2', '$img3', '$paragraph3', '$img4', '$paragraph4', '$author', '$img5',	'$img6',	'$img7', '$img8', '$img9', '$img10', '$img11', '$img12', '$img13',	'$img14', '$img15', '$img16', '$img17', '$img18',	'$img19', '$img20', '$caption1', '$caption2', '$caption3', '$caption4',	'$caption5', '$caption6', '$caption7', '$caption8', '$caption9', '$caption10', '$caption11', '$caption12', '$caption13', '$caption14', '$caption15', '$caption16', '$caption17', '$caption18', '$caption19', '$caption20' )");




move_uploaded_file($_FILES['img1']["tmp_name"], $destination.$_FILES['img1']["name"]);

  move_uploaded_file($_FILES['img2']["tmp_name"], $destination.$_FILES['img2']["name"]);

  move_uploaded_file($_FILES['img3']["tmp_name"], $destination.$_FILES['img3']["name"]);

  move_uploaded_file($_FILES['img4']["tmp_name"], $destination.$_FILES['img4']["name"]);

  move_uploaded_file($_FILES['img5']["tmp_name"], $destination.$_FILES['img5']["name"]);

  move_uploaded_file($_FILES['img6']["tmp_name"], $destination.$_FILES['img6']["name"]);

  move_uploaded_file($_FILES['img7']["tmp_name"], $destination.$_FILES['img7']["name"]);

  move_uploaded_file($_FILES['img8']["tmp_name"], $destination.$_FILES['img8']["name"]);

  move_uploaded_file($_FILES['img9']["tmp_name"], $destination.$_FILES['img9']["name"]);

  move_uploaded_file($_FILES['img10']["tmp_name"], $destination.$_FILES['img10']["name"]);

  move_uploaded_file($_FILES['img11']["tmp_name"], $destination.$_FILES['img11']["name"]);

  move_uploaded_file($_FILES['img12']["tmp_name"], $destination.$_FILES['img12']["name"]);

  move_uploaded_file($_FILES['img13']["tmp_name"], $destination.$_FILES['img13']["name"]);

  move_uploaded_file($_FILES['img14']["tmp_name"], $destination.$_FILES['img14']["name"]);

  move_uploaded_file($_FILES['img15']["tmp_name"], $destination.$_FILES['img15']["name"]);

  move_uploaded_file($_FILES['img16']["tmp_name"], $destination.$_FILES['img16']["name"]);

  move_uploaded_file($_FILES['img17']["tmp_name"], $destination.$_FILES['img17']["name"]);

  move_uploaded_file($_FILES['img18']["tmp_name"], $destination.$_FILES['img18']["name"]);

  move_uploaded_file($_FILES['img19']["tmp_name"], $destination.$_FILES['img19']["name"]);

  move_uploaded_file($_FILES['img20']["tmp_name"], $destination.$_FILES['img20']["name"]);
  	
header('Location: hanorwanda-admin-updating-dashboard.php?Post Published Sucessfully!!');

}
?>