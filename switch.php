<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Máy tính điện tử</title>
	<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
		$n1 			= "";
		$n2 			= "";
		$calculate 		= "";
		$result 		= "";
		$flag			= "";
		if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["calculate"])) {
			$flag = true;
			$n1 		= $_POST["number1"];
			$n2 		= $_POST["number2"];
			$calculate	= $_POST["calculate"];
		
			if(is_numeric($n1) && (is_numeric($n2))) {
				switch ($calculate) {
					case '+':
						$result = $n1 + $n2;
						break;
					case '-':
						$result = $n1 - $n2;
						break;
					case '*':
					case 'x':
						$result = $n1 * $n2;
						break;
					case '/':
						$result = $n1 / $n2;
						break;
					case '%':
					case ':':
						$result = $n1 % $n2;
						break;

					default:
						$result = $n1 + $n2;
						$calculate = "+";
						break;
				}
			} else {
				$flag = false;
				$result = "Không thực hiện được";
			}
		}
?>
	<div class="content">
		<h1>Máy tính</h1>
		<form action="#" method="post" name="main-form">
			<div class="row">
				<span>Số thứ nhất</span>
				<input type="text" name="number1" value="<?php echo $n1;?>"/>
			</div>
			<div class="row">
				<span>Phép toán</span>
				<input type="text" name="calculate" value="<?php echo $calculate;?>"/>
			</div>
			<div class="row">
				<span>Số thứ hai</span>
				<input type="text" name="number2" value="<?php echo $n2;?>"/>
			</div>
			<div class="row">
				<input type="submit" value="Xem kết quả" name="submit">
			</div>
			<div class="row">
				<p>
					<?php
						if($flag == true) {
							echo "Kết quả: " . $n1 . " " . $calculate . " " . $n2 . " = " . $result;
						} else {
							echo $result;
						}
					?>
				</p>
			</div>
		</form>
	</div>
</body>
</html>