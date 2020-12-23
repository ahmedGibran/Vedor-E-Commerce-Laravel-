@include('admin.nav');
<div class="section-body">

    <div class="col">
        <div class="col-12 ">
            <div class="card">

    <h2 class="section-title">User</h2>

    <a  href="{{url('/user/add')}}"><button type="button" class="btn btn-success">Add User</button></a>


            </div></div></div>
        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table  class="table table-bordered table-responsive-lg">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                  <!--  <th>Role</th>-->
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                @foreach($category as $key=> $categories)
                                    <tr >
                                        <td>{{++$key}}</td>
                                        <td>{{$categories['name']}}</td>
                                        <td >
                                            <img src="{{$categories->url}}" alt="image" class="img-thumbnail card-img">


                                        </td>

                                    <!--    /*foreach($users->roles as $role)
                                            <td></td>

                                        endforeach*/
-->
                                        <td>  <a href="/update/user/{{$categories['id']}}">
                                                <button type="button" class="btn btn-success">UPdate</button>
                                            </a> </td>
                                        <td><a href="/user/table/delete/{{$categories['id']}}" class="btn btn-secondary">Delete</a></td>

                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div></div>


</div>
@include('admin.scripts');
