<!DOCTYPE html>
<html lang="en">
   <head>
     <title>Soal Ujian Masuk</title>
   </head>
   <body>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script> 
	function toJSONString(a,b,c,d,e,f) {
		var dataString={ 
			//typedata string 
			"name"  		:  a, 
			//typedata string 
			"address"  		:  b, 
			//typedata array 
			"hobbies"		:  c,
			//typedata boolean
			"is_married"	:  d,
			//typedata object with key
			"school"		:  e,
			//typedata array of object
			"skill"			:  f
		}
		var string= JSON.stringify( dataString );
		return JSON.parse(string);
	}
	var name  		=  "Wido Hidayatullah";
		//typedata string 
	var address  	=  "sidoharjo banaran boyolali"; 
		//typedata array 
	var hobbies		=  ["membaca anime","menggambar kartun","travelling","bulu tangkis"];
		//typedata boolean
	var is_married	=  false;
		//typedata object with key
	var school		=  {"highSchool":"SMA 3 Boyolali","university":"Surya University"};
		//typedata array of object
	var skill		=  new Array("membuat website", "membuat game", "presentasi");
	var json = toJSONString(name, address,hobbies,is_married,school,skill);
	console.log(json);
	 </script>
   </body>
</html>
