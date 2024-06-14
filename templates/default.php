<html>
    <head>
        <style>
.rainnow {
    text-align: center
}

.rainspot,.spot {
    background-color: #e6ebf0;
    margin: auto;
    overflow: hidden;
    position: relative
}

.rainspot .icon,.spot .icon {
    background: url(images/rainspot-v2.svg) 0 0 no-repeat transparent;
    background-position: 50%;
    background-size: 107% 107%;
    filter: brightness(1.4);
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}

.rainspot .r1,.spot .r1 {
    background-color: #13eefc
}

.rainspot .r2,.spot .r2 {
    background-color: #3aaadc
}

.rainspot .r3,.spot .r3 {
    background-color: #1774c4
}

.rainspot .r9,.spot .r9 {
    background-color: #22d690
}

.spot,.spot img {
    height: 42px;
    width: 49px
}

.spot img {
    left: 0;
    min-height: 0;
    position: absolute;
    top: 0
}

.spot tr {
    background-color: #e6ebf0!important;
    display: table-row!important
}

.spot td {
    display: table-cell!important;
    height: 6px;
    width: 7px
}

.rainspot {
    border: 1px solid #ccc;
    border-radius: 10px;
    height: 0;
    padding-top: 85%;
    width: 85%
}

.rainspot {
    height:40px;
    padding: 0;
    width: 40px
}

.rainspot .spot-table {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}

.rainspot .spot-row {
    background-color: #e6ebf0!important;
    display: block!important;
    height: 14.28571429%
}

.rainspot [class^=spot-col-] {
    display: block!important;
    float: left;
    height: 100%;
    width: 14.28571429%
}

.rainspot .spot-col-2 {
    width: 28.57142857%
}

.rainspot .spot-col-3 {
    width: 42.85714286%
}

.rainspot .spot-col-4 {
    width: 57.14285714%
}

.rainspot .spot-col-5 {
    width: 71.42857143%
}

.rainspot .spot-col-6 {
    width: 85.71428571%
}

.picto,.rainspot .spot-col-7 {
    width: 100%
}

.icons-explain {
    background-color: #fff;
    padding: 50px;
    position: relative;
    width: 680px
}

@media only screen and (max-width: 980px) {
    .icons-explain {
        height:70%;
        margin: 30px;
        max-width: 900px;
        overflow-y: scroll;
        width: 90%
    }
}

@media (max-height: 999px) {
    .icons-explain {
        height:70%;
        overflow-y: scroll
    }
}

.icons-explain p {
    line-height: 1.7em
}

.icons-explain .explain-heading,.icons-explain .explain-heading-precipitations,.icons-explain .you-are-here {
    font-size: 1.2rem;
    font-weight: 700;
    padding: 2px 10px 10px 0
}

@media only screen and (max-width: 840px) {
    .icons-explain .explain-heading,.icons-explain .explain-heading-precipitations,.icons-explain .you-are-here {
        font-size:1rem
    }
}

.icons-explain .explain-heading-precipitations {
    margin-top: .8rem
}

.rainspot-explain .grid-rainspot {
    display: grid;
    gap: 20px;
    grid-template-columns: 300px auto
}

@media only screen and (max-width: 600px) {
    .rainspot-explain .grid-rainspot {
        grid-template-columns:auto
    }
}

.rainspot-explain .grid-rainspot .grid-rainspot-img {
    align-items: center;
    display: grid;
    font-size: 1.5rem;
    font-weight: 700;
    gap: .5rem;
    grid-template-areas: "nord nord nord" "west graphic east" "south south south";
    grid-template-columns: 25px 200px 25px;
    justify-items: center
}

@media only screen and (max-width: 600px) {
    .rainspot-explain .grid-rainspot .grid-rainspot-img {
        grid-template-columns:25px auto 25px
    }
}

.rainspot-explain .grid-rainspot .grid-rainspot-img .nord-direction {
    grid-area: nord
}

.rainspot-explain .grid-rainspot .grid-rainspot-img .east-direction {
    grid-area: east
}

.rainspot-explain .grid-rainspot .grid-rainspot-img .south-direction {
    grid-area: south
}

.rainspot-explain .grid-rainspot .grid-rainspot-img .west-direction {
    grid-area: west
}

.rainspot-explain .grid-rainspot .grid-rainspot-img img {
    background-color: #fff;
    grid-area: graphic;
    width: 100%
}

@media only screen and (max-width: 600px) {
    .rainspot-explain .grid-rainspot .grid-rainspot-text {
        margin:1rem 0;
        text-align: center
    }
}

.rainspot-explain .grid-rainspot .grid-rainspot-text .you-are-here {
    display: flex;
    font-size: 1.5rem
}

.rainspot-explain .grid-rainspot .grid-rainspot-text .you-are-here img {
    margin-right: 20px
}

@media only screen and (max-width: 600px) {
    .rainspot-explain .grid-rainspot .grid-rainspot-text .you-are-here {
        justify-content:center
    }
}

.rainspot-explain .grid-rainspot .grid-rainspot-text img {
    transform: translateY(-5px);
    width: 13px
}

.rainspot-explain .grid-rainspot .grid-rainspot-text .precipitation-intensity-explain {
    display: flex;
    padding: 10px 0
}

.rainspot-explain .grid-rainspot .grid-rainspot-text .precipitation-intensity-explain svg {
    margin-right: 1rem
}

.rainspot-explain .grid-rainspot .grid-rainspot-text .precipitation-intensity-explain svg rect {
    stroke: #000;
    stroke-width: 1
}

.rainspot-explain .grid-rainspot .grid-rainspot-text .precipitation-intensity-explain .drizzle {
    fill: #54bd8b
}

.rainspot-explain .grid-rainspot .grid-rainspot-text .precipitation-intensity-explain .light-rain {
    fill: #66cbe2
}

.rainspot-explain .grid-rainspot .grid-rainspot-text .precipitation-intensity-explain .medium-rain {
    fill: #34aadb
}

.rainspot-explain .grid-rainspot .grid-rainspot-text .precipitation-intensity-explain .heavy-rain {
    fill: #2575ba
}

</style>
</head>
<?php
function generateRainspotTable($data) {
    $size = 7;
    $matrix = array_fill(0, $size, array_fill(0, $size, 0));
    $index = 0;
    for ($row = $size - 1; $row >= 0; $row--) {
        for ($col = 0; $col<$size; $col++) {
            $matrix[$row][$col] = $data[$index];
            $index++;
        }
    }
    $html = '<div class="rainspot"><div class="spot-table">';
    for ($row = 0; $row < $size; $row++) {
        $html .= '<div class="spot-row">';
        $col = 0;
        while ($col < $size) {
            $value = $matrix[$row][$col];
            $colSpan = 1;
            while ($col + $colSpan < $size && $matrix[$row][$col + $colSpan] == $value) {
                $colSpan++;
            }

            $html .= '<div class="spot-col-' . $colSpan . ' r' . $value . '"></div>';
            $col += $colSpan;
        }
        $html .= '</div>';
    }
    $html .= '</div><div class="icon"></div></div>';

    return $html;
}
echo "<body style=\"font-family: Arial, Helvetica, sans-serif;font-size:11pt;color:#1F497D;\" >
    <table style=\"font-family: Arial, Helvetica, sans-serif;font-size:10pt;margin: 10px auto; border-collapse: collapse; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);\">
        <thead><tr><td colspan='9'><div style=\"margin: 10px auto; font-weight:bold\">Weather forcast for {$lat} {$lon}</div></td></tr>
        <tr style=\"background-color: #2C8F30; color: white; text-align: center;\">
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Time</th>
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Weather</th>
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Wind Direction</th>
            <th style=\"padding: 5px; border: 1px solid #ddd;\">Rain Spot</th>
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
    $style = ($index % 2 ==0 )?'style="background-color: #f9f9f9; text-align: center;"':'style="background-color: #f1f1f1; text-align: center;"';
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
    $rainspot = generateRainspotTable($data->data_1h->rainspot[$key]);
    echo "<tr>
            <td {$style}>{$date}</td>
            <td {$style}><img src='images/png/".substr("00".$data->data_1h->pictocode[$key],-2).($data->data_1h->isdaylight[$key]=='1'?"_day":"_night").".png' width='40' alt='{$data->data_1h->pictocode[$key]}'></td>
            <td {$style}>{$img}</td>
            <td {$style}>{$rainspot}</td>
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
