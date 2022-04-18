
<body>
    Hello 
    <div>
        <img src="https://brandlyimagedev-resized.s3.ap-southeast-1.amazonaws.com/large_prince.jpg" alt="image is not found"/>
        <form method="post" action="{{route('delete.file')}}">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>

        </form>
    </div>
</body>
