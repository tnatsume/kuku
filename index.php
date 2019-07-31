<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>くく</title>
    <link rel="stylesheet" href="kuku/css/style.css">
</head>
<body>
    <h2>for</h2>
    <table border="1"cellpadding="5">
        
        <tr>
            <th></th>
            <?php for($k=1;$k<10;$k++): ?>
                <th><?php echo $k?></th>
            <?php endfor ?>
        </tr>

        <?php for ($j=1;$j<10;$j++):?>
            <tr>
                <td class="fontbold"><?php echo $j ?></td>
                <?php for($i=1;$i<10;$i++):?>
                    <?php if($i*$j %2 == 0):?>
                        <td class="backgreen"><?php echo $i * $j ?></td>
                    <?php else:?>
                        <td><?php echo $i * $j ?></td>
                    <?php endif?>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>

    <h2>while</h2>
    <table border="1"cellpadding="5">
    <?php $i=1;$j=1;$k=1;?>
        <tr>
            <th></th>
            <?php while ($k<10) : ?>
                <th><?php echo $k?></th>
                <?php $k ++ ?>
            <?php endwhile ?>
        </tr>

            <?php while ($j<10):?>
            <tr>
                <td class="fontbold"><?php echo $j ?></td>
                <?php while($i<10):?>
                    <?php if($i*$j %2 == 0):?>
                        <td class="backgreen"><?php echo $i * $j ?></td>
                    <?php else:?>
                        <td><?php echo $i * $j ?></td>
                    <?php endif?>

                <?php $i +=1 ?>
                <?php endwhile ?>
            </tr>
            <?php $j +=1;$i=1?>
            <?php endwhile ?>
    </table>
    <?php $k = [1,2,3,4,5,6,7,8,9] ?>

    <?php $j = [1,2,3,4,5,6,7,8,9] ?>
    <?php $i = [1,2,3,4,5,6,7,8,9] ?>
    
    

    <h2>foreach</h2>
    <table border="1"cellpadding="5">
        <tr>
            <th></th>
            <?php foreach($k as $value) :?>
                <th><?php echo $value ?></th>
            <?php endforeach?>
        </tr>

            <?php foreach($j as $value) :?>
            <tr>
                <td class="fontbold"><?php echo $value ?></td>
                <?php foreach($i as $plus) :?>
                    <?php if($plus*$value %2 == 0):?>
                        <td class="backgreen"><?php echo $plus*$value ?></td>
                    <?php else:?>
                        <td><?php echo $plus*$value ?></td>
                    <?php endif?>
                    <?php endforeach?>
            </tr>
            <?php endforeach?>
    </table>

</body>
</html>