<script>
 var barChartData = {
   labels : ["Jan","Feb","March","April","May","June","July"],
   datasets : [
     {
       fillColor : "rgba(233, 78, 2, 0.9)",
       strokeColor : "rgba(233, 78, 2, 0.9)",
       highlightFill: "#e94e02",
       highlightStroke: "#e94e02",
       data : [65,59,90,81,56,55,40]
     },
     {
       fillColor : "rgba(79, 82, 186, 0.9)",
       strokeColor : "rgba(79, 82, 186, 0.9)",
       highlightFill: "#4F52BA",
       highlightStroke: "#4F52BA",
       data : [40,70,55,20,45,70,60]
     }
   ]

 };
 var lineChartData = {
   labels : ["Jan","Feb","March","April","May","June","July"],
   datasets : [
     {
       fillColor : "rgba(242, 179, 63, 1)",
       strokeColor : "#F2B33F",
       pointColor : "rgba(242, 179, 63, 1)",
       pointStrokeColor : "#fff",
       data : [70,60,72,61,75,59,80]

     },
     {
       fillColor : "rgba(97, 100, 193, 1)",
       strokeColor : "#6164C1",
       pointColor : "rgba(97, 100, 193,1)",
       pointStrokeColor : "#9358ac",
       data : [50,65,51,67,52,64,50]

     }
   ]

 };
 var pieData = [
     {
       value: 90,
       color:"rgba(233, 78, 2, 1)",
       label: "Product 1"
     },
     {
       value : 50,
       color : "rgba(242, 179, 63, 1)",
       label: "Product 2"
     },
     {
       value : 60,
       color : "rgba(88, 88, 88,1)",
       label: "Product 3"
     },
     {
       value : 40,
       color : "rgba(79, 82, 186, 1)",
       label: "Product 4"
     }

   ];

new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

</script>

<!--map js-->
<link href="css/jqvmap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.vmap.js"></script>
<script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="js/jquery.vmap.world.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery('#vmap').vectorMap({
      map: 'world_en',
      backgroundColor: '#fff',
      color: '#696565',
      hoverOpacity: 0.8,
      selectedColor: '#696565',
      enableZoom: true,
      showTooltip: true,
      values: sample_data,
      scaleColors: ['#585858', '#696565'],
      normalizeFunction: 'polynomial'
    });
  });
</script>
<!-- //map js -->

<!-- Classie -->
  <script src="js/classie.js"></script>
  <script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
      showLeftPush = document.getElementById( 'showLeftPush' ),
      body = document.body;

    showLeftPush.onclick = function() {
      classie.toggle( this, 'active' );
      classie.toggle( body, 'cbp-spmenu-push-toright' );
      classie.toggle( menuLeft, 'cbp-spmenu-open' );
      disableOther( 'showLeftPush' );
    };


    function disableOther( button ) {
      if( button !== 'showLeftPush' ) {
        classie.toggle( showLeftPush, 'disabled' );
      }
    }
  </script>
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
 <script src="js/bootstrap.js"> </script>
