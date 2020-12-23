@include('admin.nav');

<div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">الصلاحيات
                        <a  href="{{url('/role/add')}}"><button type="button" class="btn btn-success">اضافة صلاحية</button></a>

                    </div>
                    <div class="card-body">
                            <div class="row">
                                @foreach($role as $roles)

                                <div class="col-md-3">
                                        <div class="alert alert-primary"role="alert">

                                            <p>{{$roles->role}}</p>
                                            <a href="/update/role/{{$roles['id']}}">
                                                <button type="button" class="btn btn-success">تحديث</button>
                                            </a>
                                            <a href="/role/table/delete/{{$roles['id']}}" class="btn btn-secondary">حذف</a>

                                        </div>
                                </div>


                                @endforeach
                            </div>
                        {{$role->links()}}

                    </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.scripts')
