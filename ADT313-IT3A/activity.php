<h1>hands-on2-3A</h1>
<?php
$studentId = 0;
   $table = array(

    "header"=>array(
        "studentId",
        "firstname",
        "middlename",
        "lastname",
        "section",
        "course",
        "yearLevel"

    ),

    "body"=>[
        array(
       "firstname"=> "Mark James",
        "middlename"=> "Jacinto",
        "lastname"=> "Rogelio",
        "section"=> "3A",
       "course"=>"BSIT",
        "yearLevel"=> "3"

        ),
        array(
            "firstname"=> "Firstname",
            "middlename"=> "middlename",
            "lastname"=> "Lastname",
            "section"=> "Section",
            "course"=>"Course",
            "yearLevel"=> "YearLevel"
    
        ),

        array(
            "firstname"=> "Firstname",
            "middlename"=> "middlename",
            "lastname"=> "Lastname",
            "section"=> "Section",
            "course"=>"Course",
            "yearLevel"=> "YearLevel"
    
        ),

        array(
            "firstname"=> "Firstname",
            "middlename"=> "middlename",
            "lastname"=> "Lastname",
            "section"=> "Section",
            "course"=>"Course",
            "yearLevel"=> "YearLevel"
    
        ),

        array(
            "firstname"=> "Firstname",
            "middlename"=> "middlename",
            "lastname"=> "Lastname",
            "section"=> "Section",
            "course"=>"Course",
            "yearLevel"=> "YearLevel"
    
        ),

        array(
            "firstname"=> "Firstname",
            "middlename"=> "middlename",
            "lastname"=> "Lastname",
            "section"=> "Section",
            "course"=>"Course",
            "yearLevel"=> "YearLevel"
    
        ),
        array(
            "firstname"=> "Firstname",
            "middlename"=> "middlename",
            "lastname"=> "Lastname",
            "section"=> "Section",
            "course"=>"Course",
            "yearLevel"=> "YearLevel"
    
        ),
        array(
            "firstname"=> "Firstname",
            "middlename"=> "middlename",
            "lastname"=> "Lastname",
            "section"=> "Section",
            "course"=>"Course",
            "yearLevel"=> "YearLevel"
    
        ),
        array(
            "firstname"=> "Firstname",
            "middlename"=> "middlename",
            "lastname"=> "Lastname",
            "section"=> "Section",
            "course"=>"Course",
            "yearLevel"=> "YearLevel"
    
        ),
        array(
            "firstname"=> "Firstname",
            "middlename"=> "middlename",
            "lastname"=> "Lastname",
            "section"=> "Section",
            "course"=>"Course",
            "yearLevel"=> "YearLevel"
    
        ),
        array(
        "firstname"=> "firstname",
            "middlename"=> "middlename",
            "lastname"=> "lastname",
            "section"=> "section",
        "course"=>"course",
            "yearLevel"=> "YearLevel"
        ),
        array(
            "firstname"=> "firstname",
                "middlename"=> "middlename",
                "lastname"=> "lastname",
                "section"=> "section",
            "course"=>"course",
                "yearLevel"=> "YearLevel"
        ),
        array(
            "firstname"=> "firstname",
                "middlename"=> "middlename",
                "lastname"=> "lastname",
                "section"=> "section",
            "course"=>"course",
                "yearLevel"=> "YearLevel"
            )
    ]
        );

    $studentId = 0;

    echo "<table border = '5'>";
    echo "<tr>";

    foreach($table["header"] as $header){
        echo "<th>$header</th>";
    }
    echo "</tr>";

        foreach($table["body"] as $row){
            echo "<tr>";
            echo "<td>".($studentId + 1)."</td>";
            $studentId++;
            foreach ($table["header"] as $header){
                if ($header !== "studentId"){
                    $x = str_replace(' ', '', $header);
                    echo "<td>{$row[$x]}</td>";
                }
            }

        echo "</tr>";
    };

?>         

        