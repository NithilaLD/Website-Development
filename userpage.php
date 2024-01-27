<html>
    <head>
    	<title>Requests</title>
        <style>
            body
			{
            	font-family: Arial, sans-serif;
            	margin: 20px;
        	}
        	table
			{
            	width: 100%;
            	border-collapse: collapse;
            	margin-top: 20px;
			    font-size: large;
      		}
        	th,td
			{
            	padding: 8px;
            	text-align: center;
        	}
        	th{background-color: #f2f2f2;}
        	body center button
			{
    			width: 40%;
    			height: 10%;
    			font-size: large;
			}
			.b
			{
            	padding: 10px 15px;
            	border: none;
            	border-radius: 4px;
				background-color:aquamarine;
        	}
			.b:hover{background-color:crimson;}
        </style>
    </head>
	<body>    
    	<center>
			<h1>Welcome!</h1><br><br><br>
        	<button style="background-color:linen" onclick="track()">Track Requests</button>
        	<button Style="background-color:lightblue" onclick="show()">Request History</button>
    	</center><br><br><br>
        <?php
        $conn=new mysqli("localhost","root","","userrequest");
        if ($conn->connect_error){die("Connection failed:".$conn->connect_error);}
        $sql="SELECT request.requestnumber,user.employee_id,user.ename,user.department,request.submitteddate,request.status FROM user INNER JOIN request ON user.employee_id=request.employee_id;";
        $result=$conn->query($sql);
		if (!$result){die("Query failed:".$conn->error);}
        ?>
    	<div id="show" style="display: none;">
			<h1><center>My Requests</center></h1>
        	<table style="background-color:lightblue;" border="2">
            	<tr>
                	<th>Request Number</th>
                	<th>Employee Id</th>
                	<th>Employee Name</th>
                	<th>Department</th>
                	<th>Date Submitted</th>
                	<th>Status</th>
            	</tr>
                <?php
                    if($result->num_rows>0)
                    {				
						$row=$result->fetch_all(MYSQLI_ASSOC);
						for ($specificRowIndex=0;$specificRowIndex<sizeof($row);$specificRowIndex++)
						{
							$specificRowData = $row[$specificRowIndex];
							echo "<tr>";
							echo "<td>".$specificRowData["requestnumber"]."</td>";
							echo "<td>".$specificRowData["employee_id"]."</td>";
							echo "<td>".$specificRowData["ename"]."</td>";
							echo "<td>".$specificRowData["department"]."</td>";
							echo "<td>".$specificRowData["submitteddate"]."</td>";
							echo "<td>".$specificRowData["status"]."</td>";
							echo "</tr>";
						}
                    }
                ?>
        	</table>
    	</div>
		<div id="track" style="display: none;">
			<h1><center>Pending Requests</center></h1>
    		<table border="2" style="background-color: linen;">
            	<tr>
                	<th>Request Number</th>
                	<th>Date Submitted</th>
                	<th colspan="2">Status</th>
            	</tr>
				<?php
				if($result->num_rows>0)
				{
					for ($specificRowIndex=0;$specificRowIndex<sizeof($row);$specificRowIndex++)
					{
						$specificRowData = $row[$specificRowIndex];
						if($specificRowData["status"]!="Completed")
						{
							echo "<tr>";
							echo "<td>".$specificRowData["requestnumber"]."</td>";
							echo "<td>".$specificRowData["submitteddate"].'</td>.
								  <form method="post" action="http://localhost/track.php" style="margin-bottom:0;">';
							echo "<td>".$specificRowData["status"].'
								  <input type="hidden"name="s'.($specificRowIndex+1).'" value="'.($specificRowIndex+1).'"></td>';
							echo '<td width="100">
								<input type="hidden" name="t'.($specificRowIndex+1).'" value="'.($specificRowIndex+1).'">&ensp;&ensp;
								<button type="submit" class="b">Track</button>
								</td></form>';
							echo "</tr>";
						}
					}
				}
				?>
    		</table>
		</div>
        <script>
            function show()
            {
            	const hiddenElement = document.getElementById("show");
            	hiddenElement.style.display ="block";
				const shownElement = document.getElementById("track");
            	shownElement.style.display ="none";
            }
            function track()
            {
				const hiddenElement = document.getElementById("track");
            	hiddenElement.style.display ="block";
				const shownElement = document.getElementById("show");
            	shownElement.style.display ="none";
            }
        </script>
    </body>
</html>