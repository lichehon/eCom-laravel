<x-header/>
<h1>Hello Users</h1>
{{-- 

@foreach ($users as $user)
    <h3>{{ $user }}</h3>
@endforeach

@csrf
<script>
    var data = @json($users);
    console.warn(data[2]);
</script> --}}

<table>
    <tr>
        <td>ID</td>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Email</td>
    </tr>
    <tr>
        <td>ID</td>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Email</td>
    </tr> 
        
    {{-- @foreach ($collection as $item)
        <td>{{ $item['user_id'] }}</td>
        <td>{{ $item['user_firstname'] }}</td>
        <td>{{ $item['user_lastname'] }}</td>
        <td>{{ $item['user_email'] }}</td>
    @endforeach --}}
</table>