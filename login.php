
<?php
session_start();

// Unset the session data
unset($_SESSION['auth']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEIAP | Login</title>
    <link rel="shortcut icon" href="./images/FavLogo.png">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://cdn.tailwindcss.com">
    </script>
</head>

<body>
    <!-- component -->
    <div class=" min-[1020px]:h-screen flex  flex min-[320px]:flex-col-reverse min-[1020px]:flex-row center">
        <div class="flex min-[1020px]:w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center">
            <div>
                <h1 class="text-white font-bold text-4xl font-sans">FEIAP 2023 Myanmar</h1>
                <p class="text-white mt-1">31st FEIAP General Assembly & 7th Special Distingished Lectures</p>
                <p class="text-white italic mt-1">11-13 September,2023,Nay Pyi Taw,Myanmar</p>
                <a href="./" type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 text-center rounded-2xl font-bold mb-2">Go To
                    Home</a>
            </div>
        </div>
        <div class="flex min-[1020px]:w-1/2 justify-center items-center bg-white">
            <form class="bg-white" id="loginform">
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Admin!</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="email" name="email" id="email" value="<?php echo $email ?? ""; ?>" placeholder="Email Address" />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="password" name="password" id="password" placeholder="Password" />
                </div>
                <div class="flex items-center h-10">
                    <h3 class="text-red-900" id="error">
                    </h3>
                </div>
                <input type="submit" value="Login" name="submit" class="block w-full cursor-pointer bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">
            </form>
        </div>
    </div>

</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(document).ready(function(){
        $("#loginform").on('submit',function (e){
           e.preventDefault();
           const email = $("#email").val();
           const password = $("#password").val();
            if(email == "" || password == ""){
            $("#error").html("Enter email and password").fadeIn().delay(1000).fadeOut();
    }else{
        $.ajax({
                url:"post.php",
                type:"POST",
                data:{
                    email,
                    password
                }    
                ,
                success:function(data){
                     if(data === "1"){
                        window.location.href = 'feiap2023admin.php';
                     }else{
                        if(data === "usernotfound"){     
                            $("#error").html("User Not Found!").fadeIn().delay(1000).fadeOut();
                        }else{
                            $("#error").html("Password is incorrect!").fadeIn().delay(1000).fadeOut();
                        }
                     }
                }
            })

            }
        })
    })
</script>