<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../design/css/style.css">
        <title>
           DASBOARD
        </title>
    </head>
    <body style="background-color: #E5E5E5;">


        <div class="navbar-samping">
            <ul>
                <li><a href="dasboard.html"><img src="../design/images/home.png" align="center"></a></li>
                <li><a href="mycourse.html"><img src="../design/images/Vector.png"  align="center"></a></li>
                <li><a href="dasboard-2.html"><img src="../design/images/Vector(1).png" align="center" style="width: 51px;"></a></li>
            </ul>
        </div>



        <!---buat navbar atas------------------------------------------>
        <div class="navbar-atas">
            <a style="padding-right: 300px; font-weight: 500;">  Hi xxxx<!---diisi nama akun--></a>
            <div class="box">
                <input type="text"><button type="submit">cari</button>
            </div>
            <div class ="info">
                 <a href="#"><img src="../design/images/notif.png"></a>
                <a href="#"><img src="../design/images/setting.png"></a>

            </div>

        </div>
        <style type="text/css">
            .container{
                width: 100%;
                height: 85%;
                display: flex;
                flex-wrap: wrap;
            }
            .dashboard{
                width: 70%;
                height: 100%;
            }
            .schedule{
                width: 30%;
                height: 100%;
                background-color: green;
            }
            .list-courses{
                margin-top: 5px;
                padding: 10px 10px 15px 10px;
                width: 100%;
                height: 35%;
                overflow-y: hidden;
                overflow-x: auto;
                display: flex;
            }
            .course{
                height: 100%;
                min-width: 50%;
                background-color: gray;
                margin-right: 10px;
                border-radius: 2px;
            }
        </style>

        <div class="main">
            <div class="container">
                <div class="dashboard">
                    <h1>Dashboard</h1>
                    <h3>Your Unfinished Course</h3>
                    <div class="list-courses">
                        <?php
                            $i = 1;
                            while($i <= 5){
                        ?>
                            <div class="course">

                            </div>

                        <?php
                                $i++;
                            }
                        ?>
                    </div>
                </div>
                <div class="schedule">

                </div>
            </div>

        </div>

    </body>
</html>
