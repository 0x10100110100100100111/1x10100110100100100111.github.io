<div class="container footer" style="margin-top:20px;">
	<br />
	<footer class="text-center">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Copyright &copy; Abdul Azis - Test K24. <?= date('Y'); ?></span>
			</div>
		</div>
	</footer>
</div>

<script src="<?php echo $url ?>assets/js/jquery.js"></script>
<script src="<?php echo $url ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $url ?>assets/bootstrap/js/moment.js"></script>
<script src="<?php echo $url ?>assets/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
	$(function() {
		$('#datetimepicker').datetimepicker({
			format: 'YYYY-MM-DD',
		});
		$('#datetimepicker2').datetimepicker({
			format: 'YYYY-MM-DD',
		});
	});
</script>
</body>

</html>