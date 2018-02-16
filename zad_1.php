<?php
function kwadratowa($tablica){

	$a = $tablica[0];
	$b = $tablica[1];
	$c = $tablica[2];

	if($a==0)
	{
		echo "Równanie nie kwadratowe.";	
	}
	else{

		$delta = $b*$b - 4*$a*$c;

		if($delta<0){
			echo "Nie ma pierwiastków rzeczywistych";
		}
		elseif($delta==0){
			$x=(-$delta)/(4*$a);
			echo "Jedna miejsce zerowe X: ".$x;
		}
		else{
			$x1 = (-$b+sqrt($delta))/(2*$a);
			$x2 = (-$b+sqrt($delta))/(2*$a);
			echo "Dwa miejsca zerowe: X1=".$x1.", X2=".$x2;

		}

	}
}

echo "Lp. 1 - a=0,b=-2,c=1";
kwadratowa([0,-2,1]);
echo('              ');

echo "Lp. 2 - a=-3,b=1,c=-5";
kwadratowa([-3,1,-5]);
echo('              ');

echo "Lp. 3 - a=1,b=-2,c=1";
kwadratowa([1,-2,1]);
echo('              ');

echo "Lp. 4 - a=2,b=-7,c=1";
kwadratowa([2,-7,1]);
echo('              ');

?>