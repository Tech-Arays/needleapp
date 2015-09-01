<!-- jQuery 2.1.4 -->
	<script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.2 JS -->
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- iCheck -->
	<script src="{{asset('plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
<!-- AdminLTE App -->
  <script src="{{asset('dist/js/app.js')}}" type="text/javascript"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
