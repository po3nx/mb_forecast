<?php
echo "<h1>Weather forcast for {$lat} {$lon}</h1>
    <table style='border:1px solid #000;'>
        <tr><th>Date</th>
        <td>Weather</td>
        <th>Wind Direction</th>
        <th>Wind Speed</th>
        <th>Temperature</th>
        <th>Precipitation</th>
        <th>Precipitation Prob</th>
        <th>UV Index</th>
        <th>Humidity</th>
    </tr>";

foreach($data->data_1h->time as $key => $date){
    switch (true){
        case ($data->data_1h->winddirection[$key]>=348.75 || $data->data_1h->winddirection[$key]<11.25):
            $img = "<img src='images/windir/N.png' alt='N'>";
            break;
        case ( $data->data_1h->winddirection[$key]<33.75):
            $img = "<img src='images/windir/NNE.png' alt='NNE'>";
            break;
        case ( $data->data_1h->winddirection[$key]<56.25):
            $img = "<img src='images/windir/NE.png' alt='NE'>";
            break;
        case ( $data->data_1h->winddirection[$key]<78.75):
            $img = "<img src='images/windir/ENE.png' alt='ENE'>";
            break;
        case ( $data->data_1h->winddirection[$key]<101.25):
            $img = "<img src='images/windir/E.png' alt='E'>";
            break;
        case ( $data->data_1h->winddirection[$key]<123.75):
            $img = "<img src='images/windir/ESE.png' alt='ESE'>";
            break;
        case ( $data->data_1h->winddirection[$key]<146.25):
            $img = "<img src='images/windir/SE.png' alt='SE'>";
            break;
        case ( $data->data_1h->winddirection[$key]<168.75):
            $img = "<img src='images/windir/SSE.png' alt='SSE'>";
            break;
        case ( $data->data_1h->winddirection[$key]<191.25):
            $img = "<img src='images/windir/S.png' alt='S'>";
            break;
        case ( $data->data_1h->winddirection[$key]<213.75):
            $img = "<img src='images/windir/SSW.png' alt='SSW'>";
            break;
        case ( $data->data_1h->winddirection[$key]<236.25):
            $img = "<img src='images/windir/SW.png' alt='SW'>";
            break;
        case ( $data->data_1h->winddirection[$key]<258.75):
            $img = "<img src='images/windir/WSW.png' alt='WSW'>";
            break;
        case ( $data->data_1h->winddirection[$key]<281.25):
            $img = "<img src='images/windir/W.png' alt='W'>";
            break;
        case ( $data->data_1h->winddirection[$key]< 303.75):
            $img = "<img src='images/windir/WNW.png' alt='WNW'>";
            break;
        case ( $data->data_1h->winddirection[$key]< 326.25):
            $img = "<img src='images/windir/NW.png' alt='NW'>";
            break;
        case ( $data->data_1h->winddirection[$key]< 348.75):
            $img = "<img src='images/windir/NNW.png' alt='NNW'>";
            break;
    }
    echo "<tr>
            <td>{$date }</td>
            <td><img src='images/png/".substr("00".$data->data_1h->pictocode[$key],-2).($data->data_1h->isdaylight[$key]=='1'?"_day":"_night").".png' width='40' alt='{$data->data_1h->pictocode[$key]}'></td>
            <td>{$img}</td>
            <td>{$data->data_1h->windspeed[$key]}</td>
            <td>{$data->data_1h->temperature[$key]} °C</td>
            <td>{$data->data_1h->precipitation[$key]}</td>
            <td>{$data->data_1h->precipitation_probability[$key]} %</td>
            <td>{$data->data_1h->uvindex[$key]}</td>
            <td>{$data->data_1h->relativehumidity[$key]}</td>
        </tr>";

}
echo "</table>";
