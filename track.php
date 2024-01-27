<html>
    <head>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <style>
            #a
            {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;
            }
            *
            {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            @font-face
            {
                font-family: pop;
                src: url(./Fonts/Poppins-Medium.ttf);
            }
            .main
            {
                width: 100%;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: pop;
                flex-direction: column;
            }
            .head{text-align: center;}
            .head_1
            {
                font-size: 30px;
                font-weight: 600;
                color: #333;
            }
            .head_1 span{color: tomato;}
            .head_2
            {
                font-size: 16px;
                font-weight: 600;
                color: #333;
                margin-top: 3px;
            }
            ul
            {
                display: flex;
                margin-top: 80px;
            }
            ul li
            {
                list-style: none;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            ul li .icon
            {
                font-size: 35px;
                color: brown;
                margin: 0 60px;
            }
            ul li .text
            {
                font-size: 14px;
                font-weight: 600;
                color: crimson;
                text-align: center;
            }
            ul li .progress
            {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background-color: rgba(68, 68, 68, 0.781);
                margin: 14px 0;
                display: grid;
                place-items: center;
                color: #fff;
                position: relative;
                cursor: pointer;
            }
            .progress::after
            {
                content: " ";
                position: absolute;
                width: 125px;
                height: 5px;
                background-color: rgba(68, 68, 68, 0.781);
                right: 30px;
            }
            .one::after
            {
                width: 0;
                height: 0;
            }
            ul li .progress .uil{display: none;}
            ul li .progress p{font-size: 13px;}
            ul li .active
            {
                background-color:goldenrod;
                display: grid;
                place-items: center;
            }
            li .active::after{background-color: lightgoldenrodyellow;}
            ul li .active p{display: none;}
            ul li .active .uil
            {
                font-size: 20px;
                display: flex;
            }
            @media (max-width: 980px)
            {
                ul{flex-direction: column;}
                ul li{flex-direction: row;}
                ul li .progress{margin: 0 30px;}
                .progress::after
                {
                    width: 5px;
                    height: 55px;
                    bottom: 30px;
                    left: 50%;
                    transform: translateX(-50%);
                    z-index: -1;
                }
                .one::after{height: 0;}
                ul li .icon{margin: 15px 0;}
            }
            @media (max-width:600px)
            {
                .head .head_1{font-size: 24px;}
                .head .head_2{font-size: 16px;}
            }
        </style>
    </head>
    <body>
        <div id="t1" style="display: none;">
            <table>
                <tr>
                    <td>Request Number :</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Employee Id :</td>
                    <td>123</td>
                </tr>
                <tr>
                    <td>Employee Name :</td>
                    <td>Dulan</td>
                </tr>
                <tr>
                    <td>Department :</td>
                    <td>Network And Security</td>
                </tr>
                <tr>
                    <td>Approvals :</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <th style="background-color: #f2f2f2;" id="a">Approval Description</th>
                                <th style="background-color: #f2f2f2;" id="a">Status</th>
                                <th style="background-color: #f2f2f2;" id="a">Remarks</th>
                                <th style="background-color: #f2f2f2;" id="a">Approval Officer</th>
                                <th style="background-color: #f2f2f2;" id="a">Email</th>
                                <th style="background-color: #f2f2f2;" id="a">Telephone</th>
                            </tr>
                            <tr>
                                <td id="a">Tender Selection Based On The<br>Quotation Amount And Approval</td>
                                <td id="a">Approved</td>
                                <td id="a">Company is Selected On Basis<br>Of The Companys Future Stability</td>
                                <td id="a">Mr. Naji Saravanabavan</td>
                                <td>naji@nsbm.ac.lk</td>
                                <td>+94 11 544 5000</td>    
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <div class="main">
                <ul>
                    <li>
                        <i class="icon uil uil-capture"></i>
                        <div class="progress one">
                            <p>1</p>
                            <i class="uil uil-check"></i>
                        </div>
                        <p class="text">Submitted<br>Date: 2024.01.19<br>Time: 11.00 a.m.  
                    </li>
                </ul>
            </div>
        </div>
        <table id="t2" style="display: none;">
            <tr>
                <td>Request Number :</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Employee Id :</td>
                <td>456</td>
            </tr>
            <tr>
                <td>Employee Name :</td>
                <td>Pabashi</td>
            </tr>
            <tr>
                <td>Department :</td>
                <td>Computer And Data Science</td>
            </tr>
            <tr>
                <td>Approvals :</td>
                <td>
                    <table style="border-collapse: collapse;">
                        <tr>
                            <th style="background-color: #f2f2f2;" id="a">Approval Description</th>
                            <th style="background-color: #f2f2f2;" id="a">Status</th>
                            <th style="background-color: #f2f2f2;" id="a">Remarks</th>
                            <th style="background-color: #f2f2f2;" id="a">Approval Officer</th>
                            <th style="background-color: #f2f2f2;" id="a">Email</th>
                            <th style="background-color: #f2f2f2;" id="a">Telephone</th>
                        </tr>
                        <tr>
                            <td id="a">Tender Selection Based On The<br>Quotation Amount And Approval</td>
                            <td id="a">Approved</td>
                            <td id="a">Company is Selected On Basis<br>Of The Companys Future Stability</td>
                            <td id="a">Mr. Naji Saravanabavan</td>
                            <td>naji@nsbm.ac.lk</td>
                            <td>+94 11 544 5000</td>
                            
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <script>
        function showt1()
        {
            const hiddenElement = document.getElementById("t1");
            hiddenElement.style.display ="block";
        }
        function showt2()
        {
            const hiddenElement = document.getElementById("t2");
            hiddenElement.style.display ="block";
        }
        </script>
        <?php
            if(isset($_POST['t1']))
            {
                ?>
                <script>
                    showt1();
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    showt2();
                </script>
                <?php
            }
        ?>
        <div class="main">
<ul>
    <li>
        <i class="icon uil uil-capture"></i>
        <div class="progress one">
            <p>1</p>
            <i class="uil uil-check"></i>
        </div>
        <p class="text">Submitted<br>Date: 2024.01.19<br>Time: 11.00 a.m.
        
    </li>
    <li>
        <i class="icon uil uil-map-marker"></i>
        <div class="progress two">
            <p>2</p>
            <i class="uil uil-check"></i>
        </div>
        <p class="text">Approved<br>Date: 2024.01.23<br>Time: 11.00 a.m.</p>
    </li>
</ul>
</div>
</body>
</html>