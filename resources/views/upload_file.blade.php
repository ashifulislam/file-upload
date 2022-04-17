
<body>
<form name="add_product"  method="post" action="{{route('store.file')}}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-4 col-md-offset-4">
        <div class="form-group">
            <h1>Add File</h1>
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
        </div>
       
       
        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" name="file" class="form-control-file" id="image">
        </div>
      
            <div class="alert alert-danger"> {{ Session::get('choose_file') }}</div>
        <button type="submit" class="btn btn-primary">Upload</button>
        @if(session()->has('Success'))
    <div class="alert alert-success">
        {{ session()->get('Success') }}
    </div>
@endif
    </div>
</form>
</body>
