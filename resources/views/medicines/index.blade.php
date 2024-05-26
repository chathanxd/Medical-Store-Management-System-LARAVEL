@include('cdn')
<h2>List Products</h2>
<a href="{{ url('medicines/create')}}" class="btn btn-primary pull-right">Add Medicine</a>
<div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicines as $medicine)
                <tr>
                    <td>{{ $medicine->id}}</td>
                    <td>{{ $medicine->name }}</td>
                    <td>{{ $medicine->quantity }}</td>
                    <td>
                        <a href="{{ route('medicines.edit', $medicine->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('medicines.delete', $medicine->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
<div>
  
</div>
