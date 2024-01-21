<html>
    <head>
        <style>
            #a
            {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table id="t1" style="display: none;">
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
    </body>
</html>