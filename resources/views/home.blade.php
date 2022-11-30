<h1>Hoc Laravel</h1>
<div>
    <form action="home" method="post">
        <div>
        <input type="text" name="username" placeholder="Nhap ten">
        <input type="hidden" name='_method' value="put">
        <input type="hidden" name='_token' value="<?php echo csrf_token(); ?>">
        </div>
        <button type="submit">Submit</button>
    </form>
    <a href="<?php echo route('admin.tintuc',['slug'=> 'code','id'=> 1]) ?>">Tin tuc</a>
</div>