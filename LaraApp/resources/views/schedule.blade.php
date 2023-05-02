<div>
    <h1 style="color: blue; text-align: center; display: flex; justify-content: center; align-items: center; height: 100vh;">My Schedule Page</h1>
    @foreach ($data['course'] as $index => $result)
    <table>
        <tr>
            <th>Course</th>
            <th>Credit</th>
            <th>Start Time</th>
            <th>Duration</th>
        </tr>
        <tr>
            <td>{{ $result['code'] }}</td>
            <td>{{ $result['credit'] }}</td>
            <td>{{ $result['start_time'] }}</td>
            <td>{{ $result['end_time'] }}</td>
        </tr>
    </table>
    @endforeach
</div>