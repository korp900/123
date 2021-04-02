<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Position</title>
        <style type="text/css">
            
            hr{
                width: 100%;
                color: black;
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .red{
            width: 100px;
            height: 100px; 
            border: 2px solid RED;
            margin-left: 100PX;
            }
            
            .blue{
                width: 100px;
                height: 100px; 
                border: 2px solid blue;
                margin-left: 300PX;
                margin-top: 30px;  
            }
            
            .green{
                width: 100px;
                height: 100px; 
                border: 2px solid green;
                margin-left: 500PX;
                margin-top: 30px;  
            }

            .rad_in_green{
                width: 500px;
                height: 500px; 
                border: 2px solid green;
            }

            .rad1{
                width: 100px;
                height: 100px; 
                border: 2px solid red;
                position: relative;
                left: 100px;
                top: 100px;
            }

            .row{
                width: 100%;
                height: 120px;
            }

            .kubred{
            width: 100px;
            height: 100px; 
            border: 2px solid RED;
            float: left;
            }

            .kubblue{
            width: 100px;
            height: 100px; 
            border: 2px solid blue;
            position: absolute;
            left: 150px;
            float: left;
            }

            .kubgreen{
            width: 100px;
            height: 100px; 
            border: 2px solid green;
            position: absolute;
            left: 300px;
            }

            .face{
                width: 600px;
                height: 600px;
                background: green;
                border-radius: 50%;
                position: relative;
            }

            .eyeleft{
                width: 100px;
                height: 100px;
                background: white;
                border-radius: 50%;
                position: absolute;
                left: 150px;
                top: 100px;
            }

            .eyeright{
                width: 100px;
                height: 100px;
                background: white;
                border-radius: 50%;
                position: absolute;
                left: 350px;
                top: 100px;
            }

            .nose{
                width: 100px;
                height: 100px;
                background: white;
                position: absolute;
                left: 250px;
                top: 250px;
            }

            .mouth{
                width: 250px;
                height: 30px;
                background: white;
                position: absolute;
                left: 170px;
                top: 420px;
            }

            .oneinone{
                width: 100%;
                height: 220px;
                position: relative;
            }

            .in1{
                width: 100px;
                height: 100px; 
                border: 2px solid RED;
            }

            .in2{
                width: 100px;
                height: 100px; 
                border: 2px solid blue;
                position: absolute;
                left: 60px;
                top: 60px;
            }

            .in3{
                width: 100px;
                height: 100px; 
                border: 2px solid green;
                position: absolute;
                left: 120px;
                top: 120px;
            }

            .rectangle{
                width: 600px;
                height: 400px;
                background: green;
                position: relative;
            }

            .kubin1{
                width: 100px;
                height: 100px;
                background: white;
                position: absolute;
                left: 50px;
                top: 50px;
            }

            .kubin2{
                width: 100px;
                height: 100px;
                background: white;
                position: absolute;
                left: 450px;
                top: 250px;
            }

            .colorin{
                width: 100%;
                height: 240px;
                position: relative;
            }

            .colorin1{
                width: 100px;
                height: 100px; 
                background: red;
            }

            .colorin2{
                width: 100px;
                height: 100px; 
                background: blue;
                position: absolute;
                left: 60px;
                top: 60px;
            }

            .colorin3{
                width: 100px;
                height: 100px; 
                background: green;
                position: absolute;
                left: 120px;
                top: 120px;
            }

        </style>
    </head>
    <body>
        
        <div class="red"></div>
        <div class="blue"></div>
        <div class="green"></div>
        <hr>
        <div class="rad_in_green">
            <div class="rad1"></div>
        </div>
        <hr>
        <div class="row">
            <div class="kubred"></div>
            <div class="kubblue"></div>
            <div class="kubgreen"></div>    
        </div>
        <hr>
        <div class="face">
            <div class="eyeleft"></div>
            <div class="eyeright"></div>
            <div class="nose"></div>
            <div class="mouth"></div>
         </div>
         <hr>
         <div class="oneinone">
             <div class="in1"></div>
             <div class="in2"></div>
             <div class="in3"></div>
         </div>
         <hr>
         <div class="rectangle">
            <div class="kubin1"></div>
            <div class="kubin2"></div>
        </div>
        <hr>
        <div class="colorin">
            <div class="colorin1"></div>
            <div class="colorin2"></div>
            <div class="colorin3"></div>
        </div>

    </body>
</html>