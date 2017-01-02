# BrDates

Uma pequena biblioteca de funções para se tratar datas no formato BR, utilizando PHP.

Use "minimum-stability":"dev", no seu composer.

Verifique os comments da classe e seus métodos:

use BrDates\BrDates;

echo BrDates::DateBR('2016-11-05') . '<br>';
echo BrDates::DateBRsm('2016-12-08') . '<br>';

$intervalo = BrDates::diferencaDiasData('2016-12-08', '2016-12-12');
echo $intervalo->d . '<br>';

echo BrDates::subDays('2016-10-15', 5) . '<br>';
echo BrDates::sumDays('2016-10-15', 5) . '<br>';

echo BrDates::TempoAmigaveldaAcao(date('Y-m-d H:i:s')) . '<br>';
echo BrDates::TempoAmigaveldaAcao('2017-01-01 00:10:00') . '<br>';
