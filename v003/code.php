<?php
    $is_newarray = [];
    for ($i = 0; $i < sizeof($is_array); $i++)
        array_push($is_newarray, []);
    for ($i = 0; $i < sizeof($is_array); $i++):
        for ($j = 0; $j < sizeof($is_array[$i]); $j++):
            $is_index = str_replace($is_original, $is_replace, $is_array[$i][$j]);
            if (stripos($is_index, $is_deleted)): else:
                array_push($is_newarray[$i], $is_index);
            endif;
        endfor;
    endfor;
    if (empty($is_newarray)): else:
        echo '<table>';
            echo '<tbody>';
                for ($i = 0; $i < sizeof($is_newarray); $i++):
                    if (empty($is_newarray[$i])): else:
                        echo '<tr>';
                            echo '<td>';
                                for ($j = 0; $j < sizeof($is_newarray[$i]); $j++):
                                    echo $is_newarray[$i][$j];
                                    echo $j < sizeof($is_newarray[$i]) - 1 ? '|' : '';
                                endfor;
                            echo '</td>';
                        echo '</tr>';
                    endif;
                endfor;
            echo '</tbody>';
        echo '</table>';
    endif;
?>