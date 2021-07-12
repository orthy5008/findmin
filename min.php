<?php
$array1 = [1, 2, 3, 4, 5];
function findmin (array $inputuser): int
{
    $mini = $inputuser [0];
    foreach ($inputuser as $number){
        if ($number < $mini)
        $mini = $number;
    }
    return $mini;
    }
print (findmin ($array1));
?>
