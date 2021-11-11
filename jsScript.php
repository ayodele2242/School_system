<script>
$(document).ready(function(){ 
setInterval(function(){ getUsers(); }, 1000);

function getUsers()
{
  $.ajax({
    url: 'myupdate.php',
    type: 'post',
    beforeSend: function(){
					$("#error").fadeOut();
					$(".btn-submit").html('<img src="../img/processing.gif" width="30" /> &nbsp; processing ...');
					},
    success: function(data) {
      $('.htmlelement').html(data);
    }
  });
}
});
</script>

        <script type="text/javascript">
            $(window).load(function() {
                $(".loader").fadeOut("slow");
            });
            </script>

            <script type="text/javascript" language="javascript">
    jQuery(function() {
        jQuery('input').attr('autocomplete', 'off');
    });
</script>

<script>
	window.setTimeout(function() {
	  $(".closeit").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove(); 
	  });
	}, 10000);
</script>

<script>

$(document).ready(function(){
    $('#myCarousel').carousel({
        pause: true,
        interval: false
    });

});
$('#myCarousel').on('slid', '', function() {
    var $this = $(this);

    $this.find('.carousel-control').show();

    if($('.carousel-inner .item:first').hasClass('active')) {
        $this.find('.left.carousel-control').hide();
    } else if($('.carousel-inner .item:last').hasClass('active')) {
        $this.find('.right.carousel-control').hide();
    }

});
</script>
<script>
   $(document).ready(function(){
    $('#inDetails').on('show.bs.modal', function (e) {
        var cid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'readmore.php', //Here you will fetch records 
            data :  'rowid='+ cid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});

</script> 

<script type="text/javascript">
$(document).ready(function(){
    var maxLength = 100;
    $(".show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }
    });
    $(".read-more").click(function(){
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
    });
});
</script>