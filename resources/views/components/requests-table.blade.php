<div class="table-responsive">
    <table class="table table-striped table-hover border ">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roleRequests as $user )
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @switch($role)
                    
                        @case('administrator')
                            <a href="{{route('admin.setAdmin',compact('user'))}}" class="btn border-0 btn-dark btn-custom-white btn-custom-grey">Activate</a>
                            @break
                        @case('reviewer')
                            <a href="{{route('admin.setRevisor',compact('user'))}}" class="btn border-0 btn-dark btn-custom-white btn-custom-grey">Activate</a>
                            @break
                        @case('editor')
                            <a href="{{route('admin.setWriter',compact('user'))}}" class="btn border-0 btn-dark btn-custom-white btn-custom-grey">Activate</a>
                            @break
                              
                    @endswitch
                </td>    
            </tr>
    
            @endforeach
        </tbody>
    </table>  
</div>
