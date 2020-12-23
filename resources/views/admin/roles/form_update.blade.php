@include('admin.nav')
<form style="margin: 1cm" action="{{url('/user/role',[$role['id']])}}" method="post" enctype="multipart/form-data">
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >الاسم</label>
        <input type="name" name="role" class="form-control"  value="{{$role['role']}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$role['role']}}">
    </div>

    <button type="submit" class="btn btn-primary">تحديث</button>

    </div>
    @include('admin.scripts')
</form>
