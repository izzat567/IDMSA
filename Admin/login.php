<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <style>
    /* POPPINS FONT */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

*{
    font-family: 'Poppins', sans-serif;
}
.wrapper{
    background: orange;
    padding: 0 20px 0 20px;
}
.main{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.side-image{
    background-image: url("images/2.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    border-radius: 10px 0 0 10px;
    position: relative;
}
.row{
  width:  900px;
  height:550px;
  border-radius: 10px;
  background: #fff;
  padding: 0px;
  box-shadow: 5px 5px 10px 1px rgba(0,0,0,0.2);
}
.text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.text p{
    color: black;
    font-size: 30px; 
}
i{
    font-weight: 800;
    font-size: 15px;
}
.right{
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}
.input-box{
  width: 330px;
  box-sizing: border-box;
}
img{
    width: 100%;
    height: 90%;
    position: absolute;
    top: 30px;
    left: 30px;
}
.input-box header{
    font-weight: 700;
    text-align: center;
    margin-bottom: 45px;
}
.input-field{
    display: flex;
    flex-direction: column;
    position: relative;
    padding: 0 10px 0 10px;
}
.input{
    height: 45px;
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    outline: none;
    margin-bottom: 20px;
    color: #40414a;
}
.input-box .input-field label{
    position: absolute;
    top: 10px;
    left: 10px;
    pointer-events: none;
    transition: .5s;
}
.input-field input:focus ~ label
   {
    top: -10px;
    font-size: 13px;
  }
  .input-field input:valid ~ label
  {
   top: -10px;
   font-size: 13px;
   color: #ff8800;
 }
 .input-field .input:focus, .input-field .input:valid{
    border-bottom: 1px solid #ff8800;
 }
 .submit{
    border: none;
    outline: none;
    height: 45px;
    background: #ff6f00;
    color: #fff;
    border-radius: 5px;
    transition: .4s;
 }
 .submit:hover{
    background: rgba(255, 217, 0, 0.937);
    color: #fff;
 }
 .signin{
    text-align: center;
    font-size: small;
    margin-top: 25px;
}
span a{
    text-decoration: none;
    font-weight: 700;
    color: #000;
    transition: .5s;
}
span a:hover{
    text-decoration: underline;
    color: #000;
}
    </style>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">     
                <!-------------      image     ------------->
                
                <img src="img/login.jpg" alt="">
                <div class="text">
                    <b><p>Selamat Datang Ke Admin IDMSA <i>- IDMSA</i></p></b>
                </div>
                
            </div>

            <div class="col-md-6 right">
                <div class="input-box"> 
                   <header>Login Admin IDMSA</header>
                   <form action="./backend/loginpro.php" method="POST">
                   <div class="input-field">
                        <input type="text" class="input" id="nama_pengguna" name="nama_pengguna" required autocomplete="off">
                        <label for="nama_pengguna">Nama Pengguna</label> 
                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" id="password" name="password" required>
                        <label for="pass">Kata Laluan</label>
                    </div> 
                   <div class="input-field">
                        
                        <input type="submit" name="submit" class="submit" value="Login">
                   </div> 
                   
                   </form>
                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>