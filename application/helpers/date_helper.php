<?php
/**
 * Created by PhpStorm.
 * User: Didik-Mulyadi
 * Date: 24/11/2018
 * Time: 22.52
 */

if ( ! function_exists('monthFullNameIndo'))
{
    function monthFullNameIndo($bln)
    {
        switch ($bln)
        {
            case 1:
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
    }
}

if ( ! function_exists('monthFullNameEng'))
{
    function monthFullNameEng($bln)
    {
        switch ($bln)
        {
            case 1:
                return "January";
                break;
            case 2:
                return "February";
                break;
            case 3:
                return "March";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "May";
                break;
            case 6:
                return "June";
                break;
            case 7:
                return "July";
                break;
            case 8:
                return "August";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "October";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "December";
                break;
        }
    }
}

if ( ! function_exists('monthNumber'))
{
    function monthNumber($bln)
    {
        switch ($bln)
        {
            case 1:
                return "01";
                break;
            case 2:
                return "02";
                break;
            case 3:
                return "03";
                break;
            case 4:
                return "04";
                break;
            case 5:
                return "05";
                break;
            case 6:
                return "06";
                break;
            case 7:
                return "07";
                break;
            case 8:
                return "08";
                break;
            case 9:
                return "09";
                break;
            case 10:
                return "10";
                break;
            case 11:
                return "11";
                break;
            case 12:
                return "12";
                break;
        }
    }
}

if ( ! function_exists('monthShortNameIndo'))
{
    function monthShortNameIndo($bln)
    {
        switch ($bln)
        {
            case 1:
                return "Jan";
                break;
            case 2:
                return "Feb";
                break;
            case 3:
                return "Mar";
                break;
            case 4:
                return "Apr";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Jun";
                break;
            case 7:
                return "Jul";
                break;
            case 8:
                return "Ags";
                break;
            case 9:
                return "Sep";
                break;
            case 10:
                return "Okt";
                break;
            case 11:
                return "Nov";
                break;
            case 12:
                return "Des";
                break;
        }
    }
}

if ( ! function_exists('monthShortNameEng'))
{
    function monthShortNameEng($bln)
    {
        switch ($bln)
        {
            case 1:
                return "Jan";
                break;
            case 2:
                return "Feb";
                break;
            case 3:
                return "Mar";
                break;
            case 4:
                return "Apr";
                break;
            case 5:
                return "May";
                break;
            case 6:
                return "Jun";
                break;
            case 7:
                return "Jul";
                break;
            case 8:
                return "Aug";
                break;
            case 9:
                return "Sep";
                break;
            case 10:
                return "Oct";
                break;
            case 11:
                return "Nov";
                break;
            case 12:
                return "Dec";
                break;
        }
    }
}


if(!function_exists('currentDate')){
    //output short    = 25-10-1997                   //  with separator -        //format date      // IND
    //output medium   = 25 Okt 1997                 //  with separator (spasi)  //format date       // IND
    //output long     = 25 October 1997 10:10:00   //  with separator (spasi)  // format datetime   // ENG

    function currentDate($language = 'IND', $format='date', $output = "long", $separator = "-"){
        $currentArray   =   array();
        if($format == 'datetime'){
            $current    =   date('Y-m-d-H:i:s');
            $currentArray   =   explode("-",$current);
        }else{
            $current        =   date('Y-m-d');
            $currentArray   =   explode("-",$current);
        }

        $monthTemp  =   "";
        $monthNumber=   intval($currentArray[1]);
        $yearNumber =   intval($currentArray[0]);
        $dateNumber =   intval($currentArray[2]);


        if ($output == "short"){
            $monthTemp  =   monthNumber($monthNumber);
        }

        if ($language   ==  'IND'){
            if ($output == "medium"){
                $monthTemp  =   monthShortNameIndo($monthNumber);
            }elseif ($output == "long"){
                $monthTemp  =   monthFullNameIndo($monthNumber);
            }
        }else{
            if ($output == "medium"){
                $monthTemp  =   monthShortNameEng($monthNumber);
            }elseif ($output == "long"){
                $monthTemp  =   monthFullNameEng($monthNumber);
            }
        }

        $fullDate   =   $dateNumber." ".$monthTemp." ".$yearNumber;
        $fullDate   =   str_replace(" ",$separator,$fullDate);
        if ($format != "date"){
            $fullDate   =   $fullDate." ".$currentArray[3];
        }

        return $fullDate;
    }
}
