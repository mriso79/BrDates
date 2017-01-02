# BrDates

Uma pequena biblioteca de funções para se tratar datas no formato BR, utilizando PHP.

Verifique os comments da classe e seus métodos:

    Formata a data do banco em formato Brasileiro, ignorando a hora
    public static function DateBR( $date ) 
    
    Formata a data do banco em formato Brasileiro, ignorando a hora
    porém ignora zero a esquerda no dia
    public static function DateBRsm( $date ) 
    
    Retorna a Data da ocorrência, se for menos de 1 dia mostra o horário
    public static function TempoAmigaveldaAcao( $date ) 
    
    Formata a data em Formato MySQL
    public static function unDateBR ( $date )
    
    Formata a data em formato MySQL, quando a Data é BR + Tempo
    public static function unDateTimeBR ( $BRdatetime ) 
    
    Soma dias a uma data
    public static function sumDays($originDate, $days)
    
    Subtrai dias a uma data
    public static function subDays($originDate, $days)
    
    Diferença de dias entre uma data
    public static function diferencaDiasData($data1, $data2)
