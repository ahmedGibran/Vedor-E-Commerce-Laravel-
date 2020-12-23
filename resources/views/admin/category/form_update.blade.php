@include('admin.nav')
<form style="margin: 1cm" action="{{url('/user/category',[$category['id']])}}" method="post" enctype="multipart/form-data">
    <div class="form-group" style=>
        <label for="exampleInputEmail1" >الأسم</label>
        <input type="name" name="name" class="form-control"  value="{{$category['name']}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$category['name']}}">
    </div>

    <div class="form-group" >
        <label for="exampleInputPassword1">تحميل صورة</label>
        <input type="file" name="url" class="form-control-file" id="exampleInputPassword1" >
    </div>
    <div class="form-group">

    </div>
    <button type="submit" class="btn btn-primary">تحديث</button>
    @include('admin.scripts')
</form>
