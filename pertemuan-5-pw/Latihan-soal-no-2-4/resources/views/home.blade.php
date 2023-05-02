<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PW-IBIK</title>
    <link rel="stylesheet" href="{{ url('./assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('./assets/bootstrap-icons/font/bootstrap-icons.css') }}">
</head>
<body class="bg-body-tertiary">
    <table class="border border-black mb-5">
        <thead class="border border-black text-center bg-secondary">
            <tr>
                <th class="border border-black px-5">Course</th>
                <th class="border border-black px-5">Type</th>
                <th class="border border-black px-5">Rate</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $result)
            <tr>
                <td class="border border-black">{{ $result['course'] }}</td>
                <td class="border border-black">{{ $result['type'] }}</td>
                <td class="border border-black">{{ $result['rate'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <table class="border border-black">
        <thead class="border border-black text-center bg-secondary">
            <tr>
                <th class="border border-black px-5">Course</th>
                <th class="border border-black px-5">Type</th>
                <th class="border border-black px-5">Rate</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($unique as $uni => $uniRes)
            <tr>
                @if ($uniRes['course'] == "Matematika")
                    <td rowspan="5" class="border border-black">{{ $uniRes['course'] }}</td>
                @endif
            </tr>
        @endforeach

        @foreach ($data as $index => $result)
            <tr>
                @if ($result['course'] != "Matematika")
                    <td class="border border-black">{{ $result['course'] }}</td>
                @endif
                    <td class="border border-black">{{ $result['type'] }}</td>
                    <td class="border border-black text-center">
                        @for ($i = 0; $i < 5-$result['rate']; $i++)
                        <span>
                            <i class="bi bi-star"></i>
                        </span>
                        @endfor

                        @for ($i = 0; $i < $result['rate']; $i++)
                        <span>
                            <i class="bi bi-star-fill"></i>
                        </span>
                        @endfor
                    </td>
            </tr>
        @endforeach
        </tbody>
    </table>
<script src="{{ url('./assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>