<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script>
        $(document).ready(function(){
            var date_input=$('input[name="dateFrom"]');
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        	date_input.datepicker({
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
		$(document).ready(function(){
            var date_input=$('input[name="dateEnd"]');
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        	date_input.datepicker({
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
        $(document).ready(function(){
            var date_input=$('input[name="dateDonate"]');
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        	date_input.datepicker({
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
        $(document).ready(function(){
            var date_input=$('input[name="dateEdit"]');
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        	date_input.datepicker({
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>
    <style type = "text/css"> 
        body {
            background-image: url(https://img.freepik.com/free-vector/blue-abstract-acrylic-brush-stroke-textured-background_53876-86373.jpg?size=626&ext=jpg);
            background-size: cover;
        }
    </style>
    </head>
    <body>
        <div style = "position: absolute; left: 50px; right: 50px;">
            <br>
            <form action ="http://localhost:8080/Desktop/code/php/web/add.php" method = "post"> 
            <b>Họ và tên: <b><input type="text" name = "name" size = "30" value="" class="form-control"> <br>
            <b>Nhập số  quà muốn donate: <b><input type = "text" name = "gift" size = "30" value = "" class="form-control"> <br>
            <label class="control-label" for="dateDonate"><b>Date:<b></label>
			<input class="form-control" id="dateDonate" name="dateDonate" placeholder="YYYY/MM/DD" type="text"><br> 
            <p><input class="btn btn-primary" type="submit" value="Submit" name = "submit"></p>
            </form>
            <br>
            <h3><b>Danh sách các bạn đã donate: </b></h3><br>
            <?php
                require_once('mysql.php');
                if ($_GET['id'] != 0) {
                    $idEdit = $_GET['id'];
                    echo '<div style = "position: absolute; left: 1300px; right: 0px;" class = "fresh-table full-color-red">
                    <table id="fresh-table" class="table table-striped" cellpadding = "1" cellspacing = "1">  
                    <thead class="thead-dark">
                    <tr>
                        <td align = "left"><b><h3>Edit</h3></b></td>
                    </tr></thead>
                    <tbody>;
                    <tr><td><form action="edit.php?id='. $_GET['id'] . '" method="post">' .
                        '<b>Họ và tên: <b><input type="text" name = "name" size = "30" value="" class="form-control"> <br>
                        <b>Nhập số  quà muốn donate: <b><input type = "text" name = "gift" size = "30" value = "" class="form-control"> <br>
                        <label class="control-label" for="dateEdit"><b>Date:<b></label>
                        <input class="form-control" id="dateEdit" name="dateEdit" placeholder="YYYY/MM/DD" type="text"><br>' .
                        '<input type="hidden" name="id" value='. $_GET['id'] . '>' .
                        '<input style = "background-color: #0489B1; color: #FFFF00" class="btn btn-primary" type="submit" value="Update" name = "submit">' . 
                    '</form></tbody></tr></table>;
                    </div>';
                } else {
                    $idEdit = 0;
                    echo '<div style = "position: absolute; left: 1300px; right: 0px;" class = "fresh-table full-color-red">
                    <table id="fresh-table" class="table table-striped" cellpadding = "1" cellspacing = "1">  
                    <thead class="thead-dark">
                    <tr>
                        <td align = "left"><b><h3>Filter</h3></b></td>
                    </tr></thead>
                    <tbody>;
                    <tr><td><form method="post">
                    <label class="control-label" for="dateFrom"><b>From date:<b></label>
                    <input class="form-control" id="dateFrom" name="dateFrom" placeholder="YYYY/MM/DD" type="text"><br> 
                    <label class="control-label" for="dateEnd"><b>To date:<b></label>
                    <input class="form-control" id="dateEnd" name="dateEnd" placeholder="YYYY/MM/DD" type="text"><br> 
                    <input style = "background-color: #0489B1; color: #FFFF00" class="btn btn-primary" type="submit" name="but_search" value="Search">
                    </form></tbody></tr></table>;
                    </div>';
                }
            ?>
            <div style = "position: absolute; left: 0px; right : 550px" class = "fresh-table full-color-blue">
                <?php
                require_once('mysql.php');
				$query = "SELECT name, gift, date, donator_id FROM donator1 WHERE 1 ";

				// Date filter
				if(isset($_POST['but_search'])){
					$dateFrom = $_POST['dateFrom'];
					$dateEnd = $_POST['dateEnd'];
					//echo $dateFrom . ' ' . $dateEnd; 
					if(!empty($dateFrom) && !empty($dateEnd)){
						$query .= " and date
									 between '".$dateFrom."' and '".$dateEnd."' ";
					}
				}

				// Sort
				$query .= " ORDER BY date DESC, donator_id DESC";
                $response = @mysqli_query($dbc, $query);
                
                if ($response) {
                    echo '<table id="fresh-table" class="table table-striped" width = 1500 cellpadding = "1" cellspacing = "1">' .  
                    '<thead class="thead-dark">
                    <tr>
                        <td align = "left"><b>Name</b></td>
                        <td align = "left"><b>Gift</b></td>
                        <td align = "left"><b>Date</b></td>
                        <td align = "left"><b>Edit</b></td>
                        <td align = "left"><b>Delete</b></td>
                    </tr></thead>';
                    echo '<tbody>';
                    while ($row = mysqli_fetch_array($response)) {
                        echo '<tr>
                        <td align = "left" width = 20%>' .$row['name'] . '</td>' .
                        '<td align = "left" width = 20%>' .$row['gift'] . '</td>' .
                        '<td align = "left" width = 20%>' .$row['date'] . '</td>' .
                        '<td width = 20%>
							<form action="donate.php?edit='. $row['donator_id']. '" method="get">'.
                            '<button class ="bbtn btn-link" type="submit" name="id" value='. $row['donator_id'] . '><i class="fa fa-edit" style="font-size:25px;color:#FF0033"></i></button>' .
                            '</form>' .
                        '</td>' . 
                        '<td width = 20%>
							<form action="delete.php?id='. $row['donator_id']. '" method="post">' .
                            '<button class ="bbtn btn-link" type="submit" name="id" value='. $row['donator_id'] . '><i class="fa fa-remove" style="font-size:25px;color:#FF0033"></i>' .
                            '</form>' . 
                        '</td>' .
                        '</tr>';
                    }
                    echo '</tbody></table>';
                } else {
                    echo "Couldn't issue database query";
                    echo mysqli_error($dbc);
                }

                mysqli_close($dbc);

                ?>
            </div>
        </div>
    </body>
</html>