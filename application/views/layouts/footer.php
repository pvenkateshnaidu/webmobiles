  <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2019. Web Mobilez. All Rights Reserved.</div>
          <div>Designed by the great pavan, if u want remove it.</div>
        </div>
      </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="<?= adminUrl. 'assets/' ?>lib/jquery/jquery.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/popper.js/popper.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/bootstrap/bootstrap.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/moment/moment.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/jquery-ui/jquery-ui.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/peity/jquery.peity.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/chartist/chartist.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/d3/d3.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/rickshaw/rickshaw.min.js"></script>
	  
	  
    <script src="<?= adminUrl. 'assets/' ?>lib/highlightjs/highlight.pack.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/datatables/jquery.dataTables.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>lib/datatables-responsive/dataTables.responsive.js"></script>

    <script src="<?= adminUrl. 'assets/' ?>js/bracket.js"></script>
    <script src="<?= adminUrl. 'assets/' ?>js/ResizeSensor.js"></script>
	  
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
	  
	 <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });
		  
		  
      });
    </script>
	 <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	  <script>
	 
	   
	   $("#addCollege").validate({
		rules: {
			
		  
			  college_email: {
				required: true,
				college_email: true,
				
			}, 
			priniciple_name: {
				required: true,
				
				
			},
			college_name: {
				required: true,
				
				
			},
		},
		messages: {
		   
			  college_email: { 
				 required: "Please enter your email address.",
						college_email: "Please enter a valid email address.",
					  
			},
			priniciple_name: { 
				 required: "Please enter your Priniciple Name.",
						
			},
			college_name: { 
				 required: "Please enter your College Name.",
						
			},
		},
		errorElement: "em",
	});
	</script>
  </body>
</html>
