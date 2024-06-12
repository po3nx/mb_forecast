<?php
echo "<body style=\"font-family: Arial, Helvetica, sans-serif;font-size:11pt;color:#1F497D;\" >
    <table style=\"font-family: Arial, Helvetica, sans-serif;font-size:10pt;margin: 10px auto; border-collapse: collapse; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);\">
        <thead><tr><td colspan='9'><div style=\"margin: 10px auto; font-weight:bold\">Weather forcast for {$lat} {$lon}</div></td></tr>
        <tr style=\"background-color: #2C8F30; color: white; text-align: center;\">
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Time</th>
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Weather</th>
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Wind Direction</th>
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Wind Speed</th>
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Temperature</th>
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Precipitation</th>
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Precipitation Prob</th>
            <th style=\"padding: 5px; border: 1px solid #ddd;\">UV Index</th>
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Humidity</th>
        </tr></thead><tbody>";
$index = 0;
foreach($data->data_1h->time as $key => $date){
    $windDirection = $data->data_1h->winddirection[$key];
    $directions = [ 'N' => [348.75, 11.25],'NNE' => [11.25, 33.75],'NE' => [33.75, 56.25],'ENE' => [56.25, 78.75],'E' => [78.75, 101.25],'ESE' => [101.25, 123.75],'SE' => [123.75, 146.25],'SSE' => [146.25, 168.75],'S' => [168.75, 191.25],'SSW' => [191.25, 213.75],'SW' => [213.75, 236.25],'WSW' => [236.25, 258.75],'W' => [258.75, 281.25],'WNW' => [281.25, 303.75],'NW' => [303.75, 326.25],'NNW' => [326.25, 348.75] ];
    foreach ($directions as $dir => $range) {
        if (($windDirection >= $range[0] && $windDirection < $range[1]) || ($range[0] > $range[1] && ($windDirection >= $range[0] || $windDirection < $range[1]))) {
            $img = "<img src='images/windir/{$dir}.png' alt='{$dir}'>";
            break;
        }
    }
    $date = date('H:i', strtotime($date));
    if ($index>=24){
        exit;
    }
    $style = ($index % 2 ==0 )?'style="background-color: #f9f9f9; text-align: center;"':'style="background-color: #f1f1f1; text-align: center;"';
    echo "<tr>
            <td {$style}>{$date}</td>
            <td {$style}><img src='images/png/".substr("00".$data->data_1h->pictocode[$key],-2).($data->data_1h->isdaylight[$key]=='1'?"_day":"_night").".png' width='40' alt='{$data->data_1h->pictocode[$key]}'></td>
            <td {$style}>{$img}</td>
            <td {$style}>{$data->data_1h->windspeed[$key]}</td>
            <td {$style}>{$data->data_1h->temperature[$key]} °C</td>
            <td {$style}>{$data->data_1h->precipitation[$key]}</td>
            <td {$style}>{$data->data_1h->precipitation_probability[$key]} %</td>
            <td {$style}>{$data->data_1h->uvindex[$key]}</td>
            <td {$style}>{$data->data_1h->relativehumidity[$key]}</td>
        </tr>";
    $index++;
}
echo "</tbody></table></body>";
?>
