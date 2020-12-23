@include('admin.nav')
<form style="margin: 1cm" action="{{url('/user/store',[$category['id']])}}" method="post" enctype="multipart/form-data">
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >اسم المتجر</label>
        <input type="name" name="name" class="form-control"  value="{{$category['name']}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$category['name']}}">
    </div>

    <div class="form-group" >
        <label for="exampleInputPassword1">تحميل صورة</label>
        <input type="file" name="image" class="form-control-file" id="exampleInputPassword1" >
    </div>
    <div class="form-group">
        <label>اختيار أدمن </label>
        <select class="mdb-select md-form" name="user_id">
            @foreach($user as $users)
                <option value="{{$users['id']}}"  selected>{{$users['name']}}</option>
            @endforeach


        </select>
    </div>
    <button type="submit" class="btn btn-primary">تحديث بيانات المتجر</button>
    @include('admin.scripts')
</form>
