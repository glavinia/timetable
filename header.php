<html>
<head><title>Timetable management System</title>

<script src="admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<link href="admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link href="admin/css/font-awesome.css" rel="stylesheet" type="text/css" media="screen">
<link href="admin/css/style.css" rel="stylesheet" type="text/css" media="screen">

 <link href="admin/css/font-awesome-social.css" rel="stylesheet">   
    <link href="admin/css/font-awesome-corp.css" rel="stylesheet"> 
     <link href="admin/css/font-awesome-ext.css" rel="stylesheet">
<script type="text/javascript" src="admin/js/bootstrap.js"></script>
<script type="text/javascript" src="admin/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="admin/js/bootstrap-typeahead.js"></script>


<!--- qtip --->
	<script defer src="admin/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="admin/js/qtip/jquery.qtip.min.js"></script>
<link href="admin/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css" media="screen, projection">






		<script type="text/javascript">
$(window).load(function() {


	$('#flexslider-text').flexslider({
		  animation: "false",
		  direction: "vertical",
		  animationLoop: false,
			slideshowSpeed: 2000,           //INTEGER: SET THE SPEED OF THE SLIDESHOW CYCLING, IN MILLISECONDS
			animationDuration: 500,         //INTEGER: SET THE SPEED OF ANIMATIONS, IN MILLISECONDS
			controlNav: false,               //BOOLEAN: CREATE NAVIGATION FOR PAGING CONTROL OF EACH CLIDE? NOTE: LEAVE TRUE FOR MANUALCONTROLS USAGE
			directionNav: false             //BOOLEAN: CREATE NAVIGATION FOR PREVIOUS/NEXT NAVIGATION? (TRUE/FALSE)
	}); 
$('#slider').flexslider();
});



</script>

<script language="JavaScript" type="text/javascript" src="admin/js/jTPS.js"></script>
<link rel="stylesheet" type="text/css" href="admin/css/jTPS.css">

		<style type="text/css" title="currentStyle">
			@import "admin/css/datatable/demo_page.css";
			@import "admin/css/datatable/demo_table_jui.css";
			@import "admin/css/datatable/jquery-ui-1.8.4.custom.css";
		</style>
		
	<script type="text/javascript" language="javascript" src="admin/js/dataTables/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery(document).ready(function() {
oTable = jQuery('#log').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#attendance').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#record').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#cadet_list').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#passed').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );								
								
								
				});		
		</script>



<script>

                $(document).ready(function () {
               
                        $('#demoTable').jTPS( {perPages:[15,30,45,60,'ALL'],scrollStep:1,scrollDelay:30,
                                clickCallback:function () {    
                                        // target table selector
                                        var table = '#demoTable';
                                        // store pagination + sort in cookie
                                        document.cookie = 'jTPS=sortasc:' + $(table + ' .sortableHeader').index($(table + ' .sortAsc')) + ',' +
                                                'sortdesc:' + $(table + ' .sortableHeader').index($(table + ' .sortDesc')) + ',' +
                                                'page:' + $(table + ' .pageSelector').index($(table + ' .hilightPageSelector')) + ';';
                                }
                        });

                        // reinstate sort and pagination if cookie exists
                        var cookies = document.cookie.split(';');
                        for (var ci = 0, cie = cookies.length; ci < cie; ci++) {
                                var cookie = cookies[ci].split('=');
                                if (cookie[0] == 'jTPS') {
                                        var commands = cookie[1].split(',');
                                        for (var cm = 0, cme = commands.length; cm < cme; cm++) {
                                                var command = commands[cm].split(':');
                                                if (command[0] == 'sortasc' && parseInt(command[1]) >= 0) {
                                                        $('#demoTable .sortableHeader:eq(' + parseInt(command[1]) + ')').click();
                                                } else if (command[0] == 'sortdesc' && parseInt(command[1]) >= 0) {
                                                        $('#demoTable .sortableHeader:eq(' + parseInt(command[1]) + ')').click().click();
                                                } else if (command[0] == 'page' && parseInt(command[1]) >= 0) {
                                                        $('#demoTable .pageSelector:eq(' + parseInt(command[1]) + ')').click();
                                                }
                                        }
                                }
                        }

                        // bind mouseover for each tbody row and change cell (td) hover style
                        $('#demoTable tbody tr:not(.stubCell)').bind('mouseover mouseout',
                                function (e) {
                                        // hilight the row
                                        e.type == 'mouseover' ? $(this).children('td').addClass('hilightRow') : $(this).children('td').removeClass('hilightRow');
                                }
                        );

                });


        </script>

		
</head>

