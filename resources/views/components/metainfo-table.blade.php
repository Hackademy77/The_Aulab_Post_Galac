<div class="table-responsive">
    <table class="table table-striped table-hover border">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name tag</th>
                <th scope="col">N° related items</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
    
            </tr>
        </thead>
        <tbody>
            @foreach($metaInfos as $metaInfo)
            <tr>
                <th scope="row">{{$metaInfo->id}}</th>
                <td>{{$metaInfo->name}}</td>
                <td>{{count($metaInfo->articles)}}</td>
                @if($metaType == "tags")
                
                <td>
                    <form action ="{{route('admin.editTag', ['tag'=>$metaInfo])}}" method ="POST">
                        @csrf
                        @method('put')
                        @error('name')
                            <div class="alert text-danger m-0 ">{{ $message }}</div>
                        @enderror
                        <input type ="text" name ="name" placeholder= "New name tag" class ="form-control w-50 d-inline @error('name') is-invalid @enderror">
                        <button type ="submit" class="btn btn-dark text-white"> Update </button>
                    </form>
                </td>
                
                <td>
                    <form action ="{{route('admin.deleteTag', ['tag'=>$metaInfo])}}" method ="POST">
                        @csrf
                        @method('delete')
                        <button type ="submit" class="btn btn-dark text-white"> Delete </button>
                    </form>
                </td>
                @else
                <td>
                    <form action ="{{route('admin.editCategory', ['category'=>$metaInfo])}}" method ="POST">
                        @csrf
                        @method('put')
                        <input type ="text" name ="name" placeholder= "New name category" class ="form-control w-50 d-inline">
                        <button type ="submit" class="btn btn-dark text-white"> Update </button>
                    </form>
                </td>
                <td>
                    <form action ="{{route('admin.deleteCategory', ['category'=>$metaInfo])}}" method ="POST">
                        @csrf
                        @method('delete')
                        <button type ="submit" class="btn btn-dark text-white"> Delete </button>
                    </form>
                </td>
                @endif
            </tr>
                @endforeach
        </tbody>
        
    </table>
</div>
