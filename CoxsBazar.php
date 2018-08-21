<!DOCTYPE html>
<html>

<head>
    <title>Cox's Bazar</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: skyblue;
        }

        li {
            float: center;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 40px 20px;
            text-decoration: none;
            font-family: "Arial";
            font-size: 20px;
        }

        li a:hover {
            background-color: #4A71AB;
        }

        h1 {
            color: skyblue;
            text-align: center;
            font-family: "Arial";
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
        }
        .card2 {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
            top: -415px;
            left: 606px;
            position: relative;
        }

        .top-left {
            position: absolute;
            top: 30px;
            left: 16px;
            color: brown;
            font-size: 40px;
            font-family: "Helvetica";
            font-weight: bold;
        }

        .container {
            padding: 0 10px;
            width: 70%;

        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .row {
            box-sizing: border-box;
            width: 70%;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        @media (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

    </style>

</head>

<body>
    <div>
        <ul>

            <li><a href="#coxbazar.php">Cox's Bazar Hotel Gallery</a></li>


        </ul>

    </div>

    <div>
        <h1>
            THERE ARE SOME HOTELS WE CAN SUGGEST<br>


        </h1>

    </div>
    <br>
    <br>
    <div class="column">
        <div class="card">
            <img src="hotel1.jpg" alt="Long Beach Hotel Cox's Bazar" style="width:100%">
            <div class="container">
                <h2>Long Beach Hotel Cox's Bazar</h2>
                <p class="title">Address: Road No. 14, Kalatoli, Hotel/Motel Zone, Cox's Bazar 4700</p>
                <p>Phone: 01755-660051</p>

            </div>
        </div>
        <div class="card2">
            <img src="hotel2.jpg" alt="Hotel Coral Reef Cox's Bazar" style="width:100%">
            <div class="container">
                <h2>Hotel Coral Reef Cox's Bazar</h2>
                <p class="title">Address: Plot # 47, Block # B, Kalatali, Coxs' bazar 4700</p>
                <p>Phone: 0341-64469</p>

            </div>
        </div>
        
    </div>


    <div>

        <input type="button" value="Go Back" style="position:relative; left:860px; padding:10px;top:-200px" onclick="javascript: window.location.href='project1.php'"><br><br><br>

    </div>
</body>
