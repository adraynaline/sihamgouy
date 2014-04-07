  <script src="asset/jquery/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="asset/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $('.item').first().addClass('active');
  
	$('.description').slideToggle();
	$('.serie').hover(function(){
		$(this).find('.description').fadeToggle();
	});
	
	(".goto").on('click',function(event) {
		var url = $(this).prop('href');
		window.setTimeout("location=('"+url+"');");
	});
	</script>

</body>
</html>