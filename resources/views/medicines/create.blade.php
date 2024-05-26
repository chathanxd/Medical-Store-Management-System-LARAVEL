@include('cdn')
<a href="{{ url('medicines/index')}}" class="btn btn-primary pull-right">List Medicines</a>
<form action="{{ route('create') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" name="name" class="form-control" id="name" placeholder="name" required>
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="quantity" name="quantity" class="form-control" id="quantity" placeholder="quantity" required>
    </div>
    <div class="mb-3">
        <div class="d-grid">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>