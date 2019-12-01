<!-- @yield('header')
  @yield('navbar') -->
<form action="/edit/<?php echo $product->id; ?>" method="POST" class="form-horizontal">
<?php echo Form::token(); ?>
  <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" name="name" value="<?php echo $product->name ?>">
    </div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">update</button>
  </div>
</form>
<!-- @yield('footer') -->
