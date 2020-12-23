@include('admin.nav');
<div class="section-body">

    <div class="col">
        <div class="col-12 ">
            <div class="card">

    <h2 class="section-title">جدول المستخدمين
        <a  href="{{url('/user/add')}}"><button type="button" class="btn btn-success">اضافة مستخدم</button></a>

    </h2>



            </div></div></div>
        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                    <th>#</th>
                                    <th>الأسم</th>
                                    <th>الأيميل</th>
                                  <!--  <th>Role</th>-->
                                    <th>تحديث</th>
                                    <th>حذف</th>
                                </tr>
                                @foreach($user as $key=> $users)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$users['first_name']}}</td>
                                        <td>{{$users['email']}}</td>

                                    <!--    /*foreach($users->roles as $role)
                                            <td></td>

                                        endforeach*/
-->
                                        <td>  <a href="/update/user/{{$users['id']}}">
                                                <button type="button" class="btn btn-success">تحديث</button>
                                            </a> </td>
                                        <td><a href="/user/table/delete/{{$users['id']}}" class="btn btn-secondary">حذف</a></td>

                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div></div>


</div>
@include('admin.scripts');
