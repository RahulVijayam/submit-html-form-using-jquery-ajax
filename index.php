<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Submit form without reloading page</title>

            <!-- CSS Files Start Here-->
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
                    
            <!-- CSS Files End Here-->

                <link  href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Acme&family=Balsamiq+Sans&family=Bowlby+One+SC&family=Fredoka+One&family=Josefin+Sans:wght@700&family=Lobster&display=swap" rel="stylesheet">
          

            <!-- Script Files Start Here--> 
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
            <!-- Script Files Ends Here-->    
            <style>
                #registration_form
                {
                  
                    background: rgb(17, 2, 23);
                    padding:30px;
                    color: rgb(90, 7, 122);
                }
                #registration_form:hover
                {
                    box-shadow: 1px 1px 2px black, 0 0 25px rgb(90, 7, 122), 0 0 5px darkblue;
                }
              
 
            .btn-purple
            {
                border-width: 2px;
            border-style: inset ;
            border-color: #5a077a;
            color:white;
            }
            .btn-purple:hover {
                color:white;
                box-shadow: 1px 1px 2px black, 0 0 25px rgb(90, 7, 122), 0 0 5px #4f4cff;
            }
 
 
            </style>
</head>
<body  style="background:rgb(19,0,26);">

<div align="center" class="container py-5 my-5 col-5">

    <form id="registration_form" method="post"  action="javascript:void(0)">
    <h1 >Subscribe Now ! </h1>
                    <input type="text"   name="name"  placeholder="Name" > <br><br>
                    <input type="email"   name="email"  placeholder="E-mail" required="required"><br><br>
     
                    <button type="submit" id="Send_btn"  class="btn btn-purple" >Submit</button>
    
    <div id="messages"></div>
    </form> 

</div>
	
	 
	 
	<script src="app.js"></script>
</body>
</html>