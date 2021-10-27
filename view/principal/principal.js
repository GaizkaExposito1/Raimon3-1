/*--------------------------------------------------------------------------- */
$(document).ready(function(){
$('#myCarousel').carousel();
    
  
$("#prevBtn").click(function(){
    $("#myCarousel").carousel("prev");
});

$("#nextBtn").click(function(){
    $("#myCarousel").carousel("next");
});

/*------------------------------------------------------------------------- */

$('#select').on('change', function() {
    var selectVal = $("#select option:selected").val();
      location.href = 'index.php?section=mensajesCurso&id='+selectVal;
    });
});