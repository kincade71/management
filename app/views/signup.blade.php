@section('content')
<div class="container">
    <div class="row vertical-offset-100">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Please sign in</h3>
        </div>
          <div class="panel-body">
            <form accept-charset="UTF-8" role="form">
                    <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="E-mail" name="email" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
              </div>
              <div class="checkbox">
                  <label>
                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                  </label>
                </div>
              <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
            </fieldset>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('footer')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bower_resources/jquery/dist/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="bower_resources/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->
<script type="text/javascript">
$(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'),
        .5,
        { css:
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
        });
  });
});
</script>
@stop
