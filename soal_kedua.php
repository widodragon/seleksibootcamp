<!DOCTYPE html>
<html lang="en">
   <head>
     <title>Soal Ujian Masuk</title>
	 <style>
		li {list-style-type: none;
		font-size: 16pt;
		}
		input {
		font-size: 20pt;
		}
		input:focus, textarea:focus{
		background-color: lightyellow;
		}
		input submit {
		font-size: 12pt;
		}
		.rq {
		color: #FF0000;
		font-size: 10pt;
		}
	 </style>
   </head>
   <body>
		<p>Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:</p>
		<form action="/action_page.php">
		Password: <input type="password" name="pw" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:">
		<input type="submit">
		</form>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script> 
	 </script>
   </body>
</html>
