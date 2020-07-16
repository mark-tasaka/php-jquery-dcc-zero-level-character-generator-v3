<?php

function dieRollMethodText($choice)
{
    switch($choice)
    {
        case 1:
            return 'Ability Scores: Roll 3d6 (Old School) ';
        break;

        case 2:
            return 'Ability Scores: Roll 4d6 (drop the lowest die) ';
        break;

        case 3:
            return 'Ability Scores: Roll 2d6+6 ';
        break;

        case 4:
            return 'Ability Scores: Roll 1d5+1d6+1d7 ';
        break;

        case 5:
            return 'Ability Scores: Roll 5d6 (use the 3 highest dice) ';
        break;

        default:
        return '';

    }
}



?>