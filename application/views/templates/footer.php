<!--javascript online-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>
<!--js upload-->
<script>
	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	});
</script>
<footer class="footer py-3 mt-3 rounded">
	<span class="text-muted"><a href="<?= base_url('howto'); ?>" class="" style="text-decoration: none;">HOWTO</a> &bull; <a href="<?= base_url('team'); ?>" class="" style="text-decoration: none;">TEAM</a></span>
	<br>
	<span class="text-muted">&COPY; 2021 <a href="<?= base_url(); ?>" style="text-decoration: none;"><?php echo lacak . sampah . com; ?></a></span>
</footer>
</body>

</html>