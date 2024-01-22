<?php
    include("header.php");
    include("pdo.php");
    

// Affichage (SELECT) :
$result = $pdo->query("SELECT * FROM `favori` ORDER BY `favori`.`date_creation` DESC");
$favoris = $result->fetchAll(PDO::FETCH_ASSOC); 
?>
<html>
    <section>
        <table class="m-10 border-solid border-2 border-black">
            <tr class= "border-solid border-2 border-black">    
                <th class = "border-separate border border-slate-500"> ID Favori</th>
                <th class = "border-separate border border-slate-500"> Label</th>
                <th class = "border-separate border border-slate-500"> Date Added</th>
                <th class = "border-separate border border-slate-500"> Link</th>
                <th class = "border-separate border border-slate-500"> Update</th>
                <th class = "border-separate border border-slate-500"> Delete</th>
            </tr>

            <?php
                foreach($favoris as $favori){
            ?>
            <tr>
                <td class = "border-t-[3px] border-slate-500"> <?=$favori['id_favori']; ?></td>
                <td class = "border-t-[3px] border-slate-500"> <?php echo $favori['libelle']; ?></td>
                <td class = "border-t-[3px] border-slate-500"> <?php echo $favori['date_creation']; ?></td>
                <td class = "border-t-[3px] border-slate-500"> <?php echo $favori['url']; ?></td>
                <td class = "border-t-[3px] border-slate-500"> Edit</td>
                <td class = "border-t-[3px] border-slate-500"> <p class= "rounded-xl border-red"> Delete</p></td>
            </tr>
            <?php
                }
            ?>

        </table>
    </section>
        
</body>
</html>