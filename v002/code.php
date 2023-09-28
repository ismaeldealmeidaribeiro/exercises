<?php

    $is_newarray = [];
    
    $is_cleararray = [];

    if (empty($is_array)): else:
        for ($i = 0; $i < sizeof($is_array); $i++):
            if (empty($is_array[$i])): else:
                array_push($is_cleararray, $is_array[$i]);
                array_push($is_newarray, []);
            endif;
        endfor;
    endif;

    $is_regex = '/' . implode('|', array_map('preg_quote', $is_deleted)) . '/i';

    for ($i = 0; $i < sizeof($is_cleararray); $i++):
        for ($j = 0; $j < sizeof($is_cleararray[$i]); $j++):
            !empty($is_cleararray[$i][$j]) && !preg_match($is_regex, $is_cleararray[$i][$j]) ? array_push($is_newarray[$i], $is_cleararray[$i][$j]) : null;
        endfor;
    endfor;

    for ($i = 0; $i < sizeof($is_newarray); $i++):
        for ($j = 0; $j < sizeof($is_newarray[$i]); $j++):
            for ($k = 0; $k < sizeof($is_replace); $k++):
                $is_newarray[$i][$j] = !empty($is_replace[$k]['original']) && !empty($is_replace[$k]['replace']) ? str_replace($is_replace[$k]['original'], $is_replace[$k]['replace'], $is_newarray[$i][$j]) : $is_newarray[$i][$j];
            endfor;
        endfor;
    endfor;

    $is_endarray = $is_newarray;

    if (empty($is_endarray)): else:
        echo '<table>';
            echo '<tbody>';
                for ($i = 0; $i < sizeof($is_endarray); $i++):
                    if (empty($is_endarray[$i])):
                        echo '<tr>';
                            echo '<td></td>';
                        echo '</tr>';
                    else:
                        echo '<tr>';
                            echo '<td>';
                                for ($j = 0; $j < sizeof($is_endarray[$i]); $j++):
                                    echo $is_endarray[$i][$j];
                                    echo $j < sizeof($is_endarray[$i]) - 1 ? '|' : '';
                                endfor;
                            echo '</td>';
                        echo '</tr>';
                    endif;
                endfor;
            echo '</tbody>';
        echo '</table>';
    endif;
    
?>