
<?php
    $studentGrades = [
        "Faisal" => [
            "OOP" => 95,
            "DataCom" => 89,
            "DataBase" => 90,
        ],

        "Prince" => [
            "OOP" => 92,
            "DataCom" => 93,
            "DataBase" => 85,
        ],

        "Sabbir" => [
            "OOP" => 97,
            "DataCom" => 89,
            "DataBase" => 93,
        ],
    ];

    function calculateAverageGrade($studentGrades){

        foreach($studentGrades as $studentName => $grades){
            $totalGrade = 0;
            foreach($grades as $grade){
                $totalGrade += $grade;                
            }

    $avgGrade = $totalGrade / count($grades);
    
    echo "$studentName's average grade is = $avgGrade.<br>";

            }
        }

        
    

    calculateAverageGrade($studentGrades);

?> 

