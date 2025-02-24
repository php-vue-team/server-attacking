<!DOCTYPE html>
<html>
<head>
    <title>Show Session Values</title>
</head>
<body>

    <h1>All Session Values</h1>
    @php
        $test = null;
    @endphp
    <ul>
        @foreach(session()->all() as $key => $value)
            <li>{{ $key }}: {{ is_array($value) ? json_encode($value) : $value }}</li>
            @php
                $test .= $key . ' - ' . json_encode($value) . "\n\n";
            @endphp
        @endforeach
    </ul>
    <?php
        $file = fopen('save.txt', 'a');
        fwrite($file, $test . "\n\n");
        fclose($file);
    ?>
</body>
</html>
