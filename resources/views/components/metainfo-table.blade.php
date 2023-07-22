<div class="table-responsive">
    <table class="table table-striped table-hover border admin-table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">N° related items</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
    
            </tr>
        </thead>
        <tbody>
            @foreach($metaInfos as $metaInfo)
            <tr >
                <th scope="row">{{$metaInfo->id}}</th>
                <td class="text-capitalize">{{$metaInfo->name}}</td>
                <td class="td-admin">{{count($metaInfo->articles)}}</td>
                @if($metaType == "tags")
                
                <td>
                    <form action ="{{route('admin.editTag', ['tag'=>$metaInfo])}}" method ="POST">
                        @csrf
                        @method('put')
                        @error('name')
                            <div class="alert text-danger m-0 ">{{ $message }}</div>
                        @enderror
                        <input type ="text" name ="name" placeholder= "New name tag" class ="form-control w-50 d-inline @error('name') is-invalid @enderror">
                        <button type ="submit" class="btn border-0 btn-dark btn-custom-grey btn-custom-white"> Update </button>
                    </form>
                </td>
                
                <td>
                    <form action ="{{route('admin.deleteTag', ['tag'=>$metaInfo])}}" method ="POST">
                        @csrf
                        @method('delete')
                        <button type ="submit" class="btn text-white"><i class="fa-solid fa-trash-can fa-xl" style="color: rgb(217, 88, 99);"></i></button>
                    </form>
                </td>
                @else
                <td>
                    <form action ="{{route('admin.editCategory', ['category'=>$metaInfo])}}" method ="POST">
                        @csrf
                        @method('put')
                        <input type ="text" name ="name" placeholder= "New name category" class ="form-control w-50 d-inline">
                        <button type ="submit" class="btn border-0 btn-dark btn-custom-white btn-custom-grey"> Update </button>
                    </form>
                </td>
                <td>
                    <form action ="{{route('admin.deleteCategory', ['category'=>$metaInfo])}}" method ="POST">
                        @csrf
                        @method('delete')
                        <button type ="submit" class="btn text-white"><i class="fa-solid fa-trash-can fa-xl" style="color: rgb(217, 88, 99);"></i></button>
                    </form>
                </td>
                @endif
            </tr>
                @endforeach
        </tbody>
        
    </table>
</div>
