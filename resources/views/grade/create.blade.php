<h1>Thêm lớp</h1>
<form action="{{ route('grade.store')}}"  method="post">
    @csrf
    Tên <input type="text" name="name" required><br>
    <button>them</button>
</form>
