<?php
/*Dungeon Crawl Classics Character Generator
designed by Mark Tasaka 2020*/

function abilityScoreModifier($abilityScore)
{
     $modifier = 0;
    
    if($abilityScore == 3)
        {
            $modifier = -3;
        }
    else if($abilityScore >=4 && $abilityScore <=5)
          {
            $modifier = -2;
        }
        else if($abilityScore >=6 && $abilityScore <=8)
              {
                $modifier = -1;
            }
    else if($abilityScore >=9 && $abilityScore <=12)
        {
            $modifier = 0;
        }
    else if($abilityScore >=13 && $abilityScore <=15)
            {
                $modifier = 1;
            }        
    else if($abilityScore >=16 && $abilityScore <=17)
                {
                    $modifier = 2;
                }            
    else if($abilityScore == 18)
    {
        $modifier = 3;
    }
    
    return $modifier;
}

/*
function addModifierSign ($modifier)
{
    $value = "";
    
    if($modifier >=0)
        {
            $value = "+" + $modifier;
        }
    else
    {
        $value = $modifier;
    }
    
    return $value;
}*/



?>