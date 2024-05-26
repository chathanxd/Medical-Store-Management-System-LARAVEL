@include('cdn')
<form action="{{ url('medicines/'.$medicine->id.'/edit')}}" method="post">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $medicine->name}}">
    </div>
    <div class="mb-3">
        <label>Quantity</label>
        <textarea name="quantity" class="form-control">{{ $medicine->quantity }}</textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
