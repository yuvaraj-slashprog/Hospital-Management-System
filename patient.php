/* Hospital-Management-System
Here I create HMS using PHP and MySQL
this html page for patient */


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Patients</title>
        <style type="text/css">
            table.patient {
                width: 100%;
            }
            
            table.patient thead {
                background-color: #eee;
                text-align: left;
            }
            
            table.patient thead th {
                border: solid 1px #fff;
                padding: 3px;
            }
            
            table.patient tbody td {
                border: solid 1px #eee;
                padding: 3px;
            }
            
            a, a:hover, a:active, a:visited {
                color: blue;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div>
        <table class="patient" border="0" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>Full_Name</a></th>
                    <th>Adress</a></th>
                    <th>Phone</a></th>
                    <th>Age</a></th>
                    <th>Gender</a></th>
                    <th>Occupation</a></th>
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach ($patient as $patients): ?>
                <tr>
                    <td><?php print htmlentities($patients->full_name); ?></a></td>
                    <td><?php print htmlentities($patients->address); ?></td>
                    <td><?php print htmlentities($patients->phone); ?></td>
                    <td><?php print htmlentities($patients->age); ?></td>
                    <td><?php print htmlentities($patients->gender); ?></td>
                    <td><?php print htmlentities($patients->occupation); ?></td>
                   
                </tr>
            <?php endforeach; ?>
  
            </tbody>
        </table>
       
    </body>
</html>

