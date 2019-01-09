<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style media="screen">
     @font-face {
      font-family: atlantis the lost city;
      src: url('Atlantis the lost City.ttf') format("truetypefile");
    }
    @font-face {
        font-family: bakery;
        src: url('bakery.otf') format("opentypefont");
    }
    @font-face {
      font-family: intriquescript_personaluse;
      src: url('IntriqueScript_PersonalUse.ttf');
    }
    @font-face {
      font-family: Chasing Embers;
      src: url('Chasing Embers.ttf') format("truetypefile");
    }
        *{
            margin: 0;
            padding: 0;
        }
        body{
        margin: 0px;
        padding: 0px;
        background: linear-gradient(to right, rgba(0, 90, 167, 0.8), rgba(255, 253, 228, 0.8)),url(1000.jpg);
        background-size: cover;
        display: block;
        justify-content: center;
        align-items: center;
        position: absolute;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        }
        .login{
        width: 430px;
        height: 530px;
        background: #000;
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        border: 12px double #fff;
        border-radius: 12px;
        opacity: 0.8;
        padding: -2px;
        margin-top: 25px;
        }
        p{
        font-family: atlantis the lost city;
        font-size: 50px;
        color: white;
        text-align: center;
        margin-bottom: 35px;
        text-shadow: 3px 3px 9px  #cc0000;
        margin-top: 200px;
        }
    </style>
</head>
<body>
    <form>
        <div class="login">
        <?php  
            $user=$_POST['username'];
            $pass=$_POST['password'];

             if($user == "firda" && $pass == "123"){
                echo "<p>Login Berhasil</p>";
             }
            else{
                echo "<p>Login Gagal</p>";
            }   
            ?>
            </div>
    </form>

</body>
</html>

