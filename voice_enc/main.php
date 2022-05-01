<?php 
session_start();

if(isset($_SESSION['id'])){


}else{
	echo "<script>
	alert('you are trying something immpossible');
	window.location='./index.php';
	</script>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
	<link rel="stylesheet" href="./p_tag.css">

</head>

<body style="background-color: #1f2029;z-index: -1;">


	<!-- <a href="https://front.codes/" class="logo" target="_blank">
		<img src="https://assets.codepen.io/1462889/fcy.png" alt="">
	</a> -->								
	<div style="display: flex; flex-direction: row; justify-content: end; text-align: center;">
											<a href="./logout.php" class="btn mt-4" style="color: beige; height: 50px; width: 70px; font-size: 10px;font-weight: bold;">Log Out</a>
											</div>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3" style="color: beige;"><span>Encryption </span><span>Dycryption</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front" style="height: 80vh; margin-bottom: 30px;">
									<div class="center-wrap">
										<div class="section text-center ">
											<!-- <h4 class="mb-4 pb-3" style="color: beige;">Log In</h4> -->
											<!-- <div class="form-group">
												<input type="file" name="file" class="form-style" placeholder="Attachment" autocomplete="off" accept=".txt">
												<i class="input-icon uil uil-file"></i>
											</div> -->
											<div class="form-group mt-2 ">
												<!-- <input type="text" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off"> -->
												<textarea name="m_t_e" style="height: 140px;" id="m_t_e" cols="30" rows="10" class="form-style " autocomplete="off"></textarea>
											
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button class="btn mt-4" id='encrypt_btn' style="color: beige;" onclick="encrypt()" >Encrypt</button>
											<!-- <button  class="btn btn-primary" type="button">Speak</button> -->
											<a  id="start-btn" class="btn mt-4" style="color: beige;">Speak</a>
											<p id="instructions"style="color: beige;">Press The Button</p>
											<!-- <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p> -->
										</div>
										<div class="form-group mt-2 ">
											<div class="flex flex-row justify-content-end w-100 mb-2"> 
												<!-- <button class="btn btn-sm bg-dark rounded-lg text-white font-weight-bold">Copy</button></div> -->
												<!-- <div style="width: 75%;"></div> -->
												<div style="width: 185%;">
												<button class="btn mt-1 mb-1" id='copy_encrypted_msg' style="color: beige; height: 30px; width: 50px; font-size: 10px;" onclick="myFunction1()" id="myFunction1" title="hello">Copy</button>
											</div>
											</div>
											<p class="form-style p_tag " id="Encrypted_msg"  style="color:beige; height: 200px;"></p>
											</div>
									</div>
								</div>
								<div class="card-back" style="height: 80vh;">
									<div class="center-wrap">
										<div class="section text-center">
											<!-- <h4 class="mb-4 pb-3" style="color: beige;">Sign Up</h4> -->
											<!-- <div class="form-group">
												<input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div> -->
											<!-- <div class="form-group mt-2">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div> -->
											<div class="form-group mt-2 ">
												<!-- <input type="text" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off"> -->
												<textarea name="m_t_d" style="height: 140px;" id="m_t_d" cols="30" rows="10" class="form-style " autocomplete="off"></textarea>
											
												<i class="input-icon uil uil-unlock-alt"></i>
											</div>
											<a  class="btn mt-4" style="color: beige;" onclick="decrypt()">Decrypt</a>
										</div>
										<div class="form-group mt-2 ">
											<div class="flex flex-row justify-content-end w-100 mb-2"> 
												<!-- <button class="btn btn-sm bg-dark rounded-lg text-white font-weight-bold">Copy</button></div> -->
												<!-- <div style="width: 75%;"></div> -->
												<div style="width: 185%;">
												<button class="btn mt-1 mb-1" id='copy_encrypted_msg' style="color: beige; height: 30px; width: 50px; font-size: 10px;" onclick="myFunction2()" >Copy</button>
											</div>
											</div>
											<p class="form-style p_tag " id="Decrypted_msg"  style="color: beige; height: 200px; "></p>
											</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <script src="./encryption_16bit.js"></script> -->
	
	<script src="./index.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
        var SpeechRecognition = window.webkitSpeechRecognition;
        var recognition = new SpeechRecognition();
        var Textbox = $("#m_t_e");
        var instructions = $("#instructions");
        var Content = "";
        recognition.continuous = true;
        recognition.onresult = function (event) {
            var current = event.resultIndex;
            var transcript = event.results[current][0].transcript;
            Content += transcript;
            Textbox.val(Content);
        };
        recognition.onstart = function () {
            instructions.text("Voice recognition is ON.");
        };
        recognition.onspeechend = function () {
            instructions.text("No activity.");
        };
        recognition.onerror = function (event) {
            if (event.error == "no-speech") {
                instructions.text("Try again.");
            }
        };
        $("#start-btn").on("click", function (e) {
            if (Content.length) {
                Content += " ";
            }
            recognition.start();
        });
        Textbox.on("input", function () {
            Content = $(this).val();
        });
    </script>
</body>

</html>

