<?php

define("DB_HOST","Localhost");
define("DB_NAME","test");
define("DB_USER","root");
define("DB_PASS","");

function dbconnect(){
    $db=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno() > 0) { // Corrected line
        die("Connection fail: " . mysqli_connect_error());
    }else{
        return $db;
    }
}
function errdubbger($data){
    echo"<pre>".print_r($data,true)."</pre>";
}
$qry="SELECT 
            ur.name AS User_Name, 
            ur.id AS User_id,
            COUNT(tuto.id) AS Total_Tutorial
            -- ,{
            --     CASE WHEN
            --         COUNT(tuto.id)<=30
            --     THEN
            --         'AMATURE'
            --     ELSE
            --         'GENIUS'
            --     END
            --     AS Teacher_type
            -- }
            tv.static_view AS Total_Static_View,
            tv.unique_view AS Total_Unique_View
        FROM
            users2 AS ur
        JOIN
            tutorials AS tuto
        ON
            ur.id=tuto.created_by
        WHERE
            ur.creator=1
        GROUP BY
            tuto.id
            
     ";
     $result=mysqli_query(dbconnect(),$qry);
    errdubbger($result);

    // foreach($result as $values){
    //     errdubbger($values);
    // }
