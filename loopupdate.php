<?php
$days = 'Wednesday';
$info = match($days){
    'Monday'=> 'We are open on Monday',
    'Tuesday'=> 'We are open on Tuesday',
    'Wednesday'=> 'We are open on Wednesday' ,
    'Thursday' => 'We are open on Thursday',
    'Friday' => 'We are open on Friday',

    default => 'We are open',
};
switch ($days){
    case 'Saturday':
        $info = 'We are closed on weekends (Sat - Sun)';
        break;
    case 'Sunday':
        $info = 'We are closed on weekends (Sat - Sun)';
        break;
    default:
        $info = 'We are open';
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Variables</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('includes/header.php'); ?>
    <h2><?= $days ?></h2>
    <p>Status: <?= $info ?></p>
    <h2>Are you looking for something('Yes or 'No')?</h2>
        <p>
            <?php
            $choice = "Yes";

            if ($choice = "Yes"){
                echo "proceed";
            }
                
            
            ?>
        </p>
    <h2>What are you looking for (Cough Medecines, Cold Medecines, Allergy Medecine?)</h2>
    <p>
        <?php
            $coughMeds = "Mycracof (Php 50)";
            $coldsMeds = "Decolgen (Php 55)";
            $allergyMeds = "Allerta (Php 55)";
            $needs = "Cough Meds";

            if ($needs = "Cough Meds"){
                echo "Here are the cough meds: $coughMeds";
            }
            elseif ($needs = "Cold Meds"){
                echo "Here are the cough meds $coldsMeds";
            }
            elseif ($needs = "Allergy Meds"){
                echo "Here are the cough meds $allergyMeds";
            }

            else{
                echo "We dont have that kind of Meds";
            }
            


        ?>
    </p>
    <h2>Price Total</h2>
    <p>
        <?php
        $mycracof = 50;
        $decolgen = 55;
        $allerta = 55;
        $counter = 1;
        $packs = 5;

        while ($counter <=$packs){
            echo $counter;
            echo ' Mycracof cost Php ';
            echo $mycracof * $counter;
            echo '<br>';
            $counter++;
        }

        ?>
    </p>
</body>


<?php include('includes/footer.php'); ?>
</html>

