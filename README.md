# BrDates

Uma pequena biblioteca de funções para se tratar datas no formato BR, utilizando PHP.

Use "minimum-stability":"dev", no seu composer.

Verifique os comments da classe e seus métodos:

use BrDates\BrDates;

echo BrDates::DateBR('2016-11-05');

echo BrDates::DateBRsm('2016-12-08');

$intervalo = BrDates::diferencaDiasData('2016-12-08', '2016-12-12');

echo $intervalo->d;

echo BrDates::subDays('2016-10-15', 5);

echo BrDates::sumDays('2016-10-15', 5);

echo BrDates::TempoAmigaveldaAcao(date('Y-m-d H:i:s'));

echo BrDates::TempoAmigaveldaAcao('2017-01-01 00:10:00');
