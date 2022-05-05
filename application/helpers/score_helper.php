<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: Notif Helper
 * AUTHOR		: Indra Basuki
 * Date			: 1 Juli 2020 0
 */
    function score_listening($benar){
        switch ($benar) {
            case 0:
                $benar = 24;
                break;
            case 1:
                $benar = 25;
                break;
            case 2:
                $benar = 26;
                break;
            case 3:
                $benar = 27;
                break;
            case 4:
                $benar = 28;
                break;
            case 5:
                $benar = 29;
                break;
            case 6:
                $benar = 30;
                break;
            case 7:
                $benar = 31;
                break;
            case 8:
                $benar = 32;
                break;
            case 9:
                $benar = 32;
                break;
            case 10:
                $benar = 33;
                break;
            case 11:
                $benar = 35;
                break;
            case 12:
                $benar = 37;
                break;
            case 13:
                $benar = 38;
                break;
            case 14:    
                $benar = 39;
                break;
            case 15:
                $benar = 41;
                break;
            case 16:
                $benar = 41;
                break;
            case 17:
                $benar = 42;
                break;
            case 18:
                $benar = 43;
                break;
            case 19:
                $benar = 44;
                break;
            case 20:
                $benar = 45;
                break;
            case 21:
                $benar = 45;
                break;
            case 22:
                $benar = 46;
                break;
            case 23:
                $benar = 47;
                break;
            case 24:
                $benar = 47;
                break;
            case 25:
                $benar = 48;
                break;
            case 26:
                $benar = 48;
                break;
            case 27:
                $benar = 49;
                break;
            case 28:
                $benar = 49;
                break;
            case 29:
                $benar = 50;
                break;
            case 30:    
                $benar = 51;
                break;
            case 31:
                $benar = 51;
                break;
            case 32:
                $benar = 52;
                break;
            case 33:
                $benar = 52;
                break;
            case 34:
                $benar = 53;
                break;
            case 35:
                $benar = 54;
                break;
            case 36:
                $benar = 54;
                break;
            case 37:
                $benar = 55;
                break;
            case 38:
                $benar = 56;
                break;
            case 39:
                $benar = 57;
                break;
            case 40:
                $benar = 57;
                break;
            case 41:
                $benar = 58;
                break;
            case 42:
                $benar = 59;
                break;
            case 43:
                $benar = 60;
                break;
            case 44:
                $benar = 61;
                break;
            case 45:
                $benar = 62;
                break;
            case 46:    
                $benar = 63;
                break;
            case 47:
                $benar = 65;
                break;
            case 48:
                $benar = 66;
                break;
            case 49:
                $benar = 67;
                break;
            case 50:
                $benar = 68;
                break;        
        }
        return $benar;
    }
     function score_written($benar){
        switch ($benar) {
            case 0:
                $benar = 20;
                break;
            case 1:
                $benar = 20;
                break;
            case 2:
                $benar = 21;
                break;
            case 3:
                $benar = 22;
                break;
            case 4:
                $benar = 23;
                break;
            case 5:
                $benar = 25;
                break;
            case 6:
                $benar = 26;
                break;
            case 7:
                $benar = 27;
                break;
            case 8:
                $benar = 29;
                break;
            case 9:
                $benar = 31;
                break;
            case 10:
                $benar = 33;
                break;
            case 11:
                $benar = 35;
                break;
            case 12:
                $benar = 36;
                break;
            case 13:
                $benar = 37;
                break;
            case 14:    
                $benar = 38;
                break;
            case 15:
                $benar = 40;
                break;
            case 16:
                $benar = 40;
                break;
            case 17:
                $benar = 41;
                break;
            case 18:
                $benar = 42;
                break;
            case 19:
                $benar = 43;
                break;
            case 20:
                $benar = 44;
                break;
            case 21:
                $benar = 45;
                break;
            case 22:
                $benar = 46;
                break;
            case 23:
                $benar = 47;
                break;
            case 24:
                $benar = 48;
                break;
            case 25:
                $benar = 49;
                break;
            case 26:
                $benar = 50;
                break;
            case 27:
                $benar = 51;
                break;
            case 28:
                $benar = 52;
                break;
            case 29:
                $benar = 53;
                break;
            case 30:    
                $benar = 54;
                break;
            case 31:
                $benar = 55;
                break;
            case 32:
                $benar = 56;
                break;
            case 33:
                $benar = 57;
                break;
            case 34:
                $benar = 58;
                break;
            case 35:
                $benar = 60;
                break;
            case 36:
                $benar = 61;
                break;
            case 37:
                $benar = 63;
                break;
            case 38:
                $benar = 65;
                break;
            case 39:
                $benar = 67;
                break;
            case 40:
                $benar = 68;
                break;
        }  
        return $benar; 
    }
     function score_reading($benar){
        switch ($benar) {
            case 0:
                $benar = 21;
                break;
            case 1:
                $benar = 22;
                break;
            case 2:
                $benar = 23;
                break;
            case 3:
                $benar = 23;
                break;
            case 4:
                $benar = 24;
                break;
            case 5:
                $benar = 25;
                break;
            case 6:
                $benar = 26;
                break;
            case 7:
                $benar = 27;
                break;
            case 8:
                $benar = 28;
                break;
            case 9:
                $benar = 28;
                break;
            case 10:
                $benar = 29;
                break;
            case 11:
                $benar = 30;
                break;
            case 12:
                $benar = 31;
                break;
            case 13:
                $benar = 32;
                break;
            case 14:    
                $benar = 34;
                break;
            case 15:
                $benar = 35;
                break;
            case 16:
                $benar = 36;
                break;
            case 17:
                $benar = 37;
                break;
            case 18:
                $benar = 38;
                break;
            case 19:
                $benar = 39;
                break;
            case 20:
                $benar = 40;
                break;
            case 21:
                $benar = 41;
                break;
            case 22:
                $benar = 42;
                break;
            case 23:
                $benar = 43;
                break;
            case 24:
                $benar = 43;
                break;
            case 25:
                $benar = 44;
                break;
            case 26:
                $benar = 45;
                break;
            case 27:
                $benar = 46;
                break;
            case 28:
                $benar = 46;
                break;
            case 29:
                $benar = 47;
                break;
            case 30:    
                $benar = 48;
                break;
            case 31:
                $benar = 48;
                break;
            case 32:
                $benar = 49;
                break;
            case 33:
                $benar = 50;
                break;
            case 34:
                $benar = 51;
                break;
            case 35:
                $benar = 52;
                break;
            case 36:
                $benar = 52;
                break;
            case 37:
                $benar = 53;
                break;
            case 38:
                $benar = 54;
                break;
            case 39:
                $benar = 54;
                break;
            case 40:
                $benar = 55;
                break;
            case 41:
                $benar = 56;
                break;
            case 42:
                $benar = 57;
                break;
            case 43:
                $benar = 58;
                break;
            case 44:
                $benar = 59;
                break;
            case 45:
                $benar = 60;
                break;
            case 46:    
                $benar = 61;
                break;
            case 47:
                $benar = 63;
                break;
            case 48:
                $benar = 65;
                break;
            case 49:
                $benar = 66;
                break;
            case 50:
                $benar = 67;
                break;    
        } 
        return $benar;   
     }


     