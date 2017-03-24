        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <! Teather -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/app.js"></script>

        <script src="js/sweetalert.min.js"></script>

        <script>
        	
        	@if (notify()->ready())
        		swal({
        			title: "{!! notify()->message() !!}",
        			type: "{{ notify()->type() }}",

        			@if (notify()->option('timer'))
        				timer: {{ notify()->option('timer') }}
        			@endif

        		});
        	@endif

        </script>