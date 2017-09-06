<table border="1" width="100%">

            <?php
//            $z=0;

            for($k = 0; $k <9; $k=$k+4) {
                echo '<tr>';
                for ($j = 2+$k; $j < 6+$k; $j++) {

                    if ($j % 2 == 0){
                        echo '<td bgcolor="#9acd32">';
                    }else{
                        echo '<td bgcolor="yellow">';
                    }

                    for ($i = 1; $i <= 9; $i++) {
                        $r = $j * $i;
                        echo "$j x {$i} = {$r}<br>";
                    }
                    echo '</td>';
                }
                echo '</tr>';
//                $z=$z+4;
            }
            ?>
