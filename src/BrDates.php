<?php
/**
 * By @mriso_dev.
 * Date: 02/01/17
 * Time: 17:04
 */

namespace BrDates;


class BrDates
{
    /**
     * Formata a data do banco em formato Brasileiro, ignorando a hora
     * @param $date ( datetime )
     * @return bool|date
     */
    public static function DateBR( $date ) {
        if($date != '') {
            return date("d/m/Y", strtotime($date));
        }
        return false;
    }

    /**
     * Formata a data do banco em formato Brasileiro, ignorando a hora
     * porém ignora zero a esquerda no dia
     * @param $date ( datetime )
     * @return bool|date
     */
    public static function DateBRsm( $date ) {
        if($date != '') {
            return date("j/m/Y", strtotime($date));
        }
        return false;
    }

    /**
     * Retorna a Data da ocorrência, se for menos de 1 dia mostra o horário
     * @param $date
     * @return bool|string
     */
    public static function TempoAmigaveldaAcao( $date ) {
        if($date != '') {
            $current_date = date("d/m/Y");
            $informed_date =  date("d/m/Y", strtotime($date));

            if($current_date == $informed_date){
                return date("H:i", strtotime($date));
            }else{
                return date("d/m/Y H:i:s", strtotime($date));
            }

        }
        return false;
    }

    /**
     * Formata a data em Formato MySQL
     * @param $date
     * @return array|bool|string
     */
    public static function unDateBR ( $date ) {
        if($date != '') {
            $date = explode("/", $date);
            $date = $date[2] . '-' . $date[1] . '-' . $date[0];
            return $date;
        }
        return false;
    }

    /**
     * Formata a data em formato MySQL, quando a Data é BR + Tempo
     * @param $BRdatetime
     * @return bool|string
     */
    public static function unDateTimeBR ( $BRdatetime ) {
        if($BRdatetime != '') {
            $datearr = explode(' ', $BRdatetime);

            $date = explode("/", $datearr[0]);
            $date = $date[2] . '-' . $date[1] . '-' . $date[0];
            return $date.' '.$datearr[1];
        }
        return false;
    }

    /**
     * Soma dias a uma data
     * @param $originDate Data Timestamp inicial
     * @param $days Dias a serem acrescentados
     * @return bool|string
     */
    public static function sumDays($originDate, $days){
        return date('Y-m-d', strtotime("+".$days." days",strtotime($originDate)));
    }

    /**
     * Subtrai dias a uma data
     * @param $originDate Data Timestamp inicial
     * @param $days Dias a serem acrescentados
     * @return bool|string
     */
    public static function subDays($originDate, $days){
        return date('Y-m-d', strtotime("-".$days." days",strtotime($originDate)));
    }

    /**
     * Diferença de dias entre uma data
     * @param $data1
     * @param $data2
     * @return bool|\DateInterval
     */
    public static function diferencaDiasData($data1, $data2) {
        $data1 = new \DateTime( $data1 );
        $data2 = new \DateTime( $data2 );

        $intervalo = $data1->diff( $data2 );

        return $intervalo;
    }
}