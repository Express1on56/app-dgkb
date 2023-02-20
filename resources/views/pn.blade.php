<!DOCTYPE html>
<html>
<head>
    <title>Всё из таблицы PN</title>
</head>
<body>
    <h1>Всё из таблицы PN</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>FAM</th>
                <th>IM</th>
                <th>OT</th>
                <th>BIRTH_DATE</th>
                <th>SEX</th>
                <th>SMO</th>
                <th>ENP</th>
                <th>MEDORG</th>
                <th>NOMPOD</th>
                <th>NOMUCH</th>
                <th>FAP</th>
                <th>START</th>
                <th>TMP</th>
                <th>ADRESS</th>
                <th>AGE</th>
                <th>KAT_AGE</th>
                <th>AGE22</th>
                <th>mesdr</th>
                <!-- add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->FAM }}</td>
                <td>{{ $row->IM }}</td>
                <td>{{ $row->OT }}</td>
                <td>{{ $row->BIRTH_DATE }}</td>
                <td>{{ $row->SEX }}</td>
                <td>{{ $row->SMO }}</td>
                <td>{{ $row->ENP }}</td>
                <td>{{ $row->MEDORG }}</td>
                <td>{{ $row->NOMPOD }}</td>
                <td>{{ $row->NOMUCH }}</td>
                <td>{{ $row->FAP }}</td>
                <td>{{ $row->START }}</td>
                <td>{{ $row->TMP }}</td>
                <td>{{ $row->ADRESS }}</td>
                <td>{{ $row->AGE }}</td>
                <td>{{ $row->KAT_AGE }}</td>
                <td>{{ $row->AGE22 }}</td>
                <td>{{ $row->mesdr }}</td>
                <!-- add more columns as needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
