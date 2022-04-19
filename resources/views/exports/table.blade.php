<table>
    <thead>
    <tr>
        <th>tovar_id</th>
        <th>product</th>
        <th>mark</th>
        <th>size</th>
        <th>gost</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tables as $table)
        <tr>
            <td>{{ $table->tovar_id }}</td>
            <td>{{ $table->product }}</td>
            <td>{{ $table->mark }}</td>
            <td>{{ $table->size }}</td>
            <td>{{ $table->gost }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
