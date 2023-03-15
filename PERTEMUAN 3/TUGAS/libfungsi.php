<?php


	function kelulusan(){
		if($total_nilai >= 55) {
            echo "<td>LULUS</td>";

        }else {
            echo "<td>Tidak LULUS</td>";
        }
		
	}
	
	function grade(){
		if(winRate>=100){
			return 'A';
			elseif (winRate>=84){
			return 'B';	
			elseif (winRate>=69){
			return 'c';	
			elseif (winRate>=55){
			return 'D';	
			elseif (winRate>=35){
			return 'E';	
			}
		}
	  
	}
	
	function predikat(){
		switch($total_nilai){
            case ($total_nilai >= 0 && $total_nilai <= 35):
                echo "<td> Sangat Kurang </td>";
                break;
            case ($total_nilai >= 36 && $total_nilai <= 55):
                echo "<td> Kurang </td>";
                break;
            case ($total_nilai >= 56 && $total_nilai <= 69):
                echo "<td> Cukup </td>";
                break;
            case ($total_nilai >= 70 && $total_nilai <= 84):
                echo "<td> Memuaskan </td>";
                break;
            case ($total_nilai >= 85) :
                echo "<td> Sangat Puas </td>";
                break;
            default:
                echo "<td> Tidak Ada </td>";
                break;
        }
	}
?>