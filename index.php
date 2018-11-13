<?php
	$q = [
			["a" => "a","b" => "b"," " => " "],
			["a" => "a"],
			["a" => "a","b" => "b"," " => " "],
			["a" => "a"],
			["a" => "a","b" => "b"," " => " "]
		];
	if (isset($_POST['string'])) {
		$string  = $_POST['string'];
		$split_string = str_split($string);
		$current_state = -1;
		$final_state = 4;
		$string_length = sizeof($split_string);
		$matched_string = array();
		$alert = '';
		foreach ($split_string as $i => $val) {
			$current_state == $final_state ? $current_state = 0 : $current_state++;
			if (!isset($q[$current_state][$split_string[$i]])) {
				$matched_string[] = 0;
				$alert = 'String Rejected';
				break;
			}else{
				$matched_string[] = 1;
			}
		}
		if (!in_array(0, $matched_string)) {
			$alert = 'String Accepted';
		}
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Simple PHP DFA Machine</title>
 </head>
 <body>
 	<form action="" method="POST" role="form">
 		<div class="form-group">
 			<label for="">String : </label>
 			<input type="text" class="form-control" id="" placeholder="" name="string">
 		</div>
 		<br>
 		<button type="submit" class="btn btn-primary">Submit</button>
 	</form>
 </body>
 </html>
 <script type="text/javascript" charset="utf-8" async defer>
 	if ("<?= $alert ?>" != '') {
 		alert("<?= $alert ?>");
 	}
 </script>