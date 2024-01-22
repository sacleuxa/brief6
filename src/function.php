<?php
    function calculAge($annee){
        $anneeNaissance = "01-01-".$annee;
        $aujourdhui = date("Y");
        $diff = date_diff(date_create($anneeNaissance), date_create($aujourdhui));
        $age = $diff->format('%y');
        return $age;
    }
?>