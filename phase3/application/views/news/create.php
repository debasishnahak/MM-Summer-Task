<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
input[type=text], input[type=password] {
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.cancelbtn {
    width: 100px;
    background-color: #f44336;
	height:50px;
	margin-top:10px;
	border:0;
	font-size: 20px;
	color: Azure;
}
.login {
	 width: 100px;
    background-color: darkorange;
	height:50px;
	margin-top:5px;
	border:0;
	font-size: 20px;
	color: Azure;
}

.login-image {
    text-align: center;
}

</style>
<body>



<div class="container">
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
	<label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>
    <button type="submit" class="login"><strong>Login</strong></button>
</form>
</div>
</body>