
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


 
           
    jQuery(function() {
        jQuery('input').attr('autocomplete', 'off');
    });



	window.setTimeout(function() {
	  $(".closeit").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove(); 
	  });
	}, 10000);




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

 


/*$(document).ready(function(){
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
});*/
var _0x7bf7=["\x74\x65\x78\x74","\x6C\x65\x6E\x67\x74\x68","\x74\x72\x69\x6D","\x73\x75\x62\x73\x74\x72\x69\x6E\x67","\x68\x74\x6D\x6C","\x65\x6D\x70\x74\x79","\x20\x3C\x61\x20\x68\x72\x65\x66\x3D\x22\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74\x3A\x76\x6F\x69\x64\x28\x30\x29\x3B\x22\x20\x63\x6C\x61\x73\x73\x3D\x22\x72\x65\x61\x64\x2D\x6D\x6F\x72\x65\x22\x3E\x72\x65\x61\x64\x20\x6D\x6F\x72\x65\x2E\x2E\x2E\x3C\x2F\x61\x3E","\x61\x70\x70\x65\x6E\x64","\x3C\x73\x70\x61\x6E\x20\x63\x6C\x61\x73\x73\x3D\x22\x6D\x6F\x72\x65\x2D\x74\x65\x78\x74\x22\x3E","\x3C\x2F\x73\x70\x61\x6E\x3E","\x65\x61\x63\x68","\x2E\x73\x68\x6F\x77\x2D\x72\x65\x61\x64\x2D\x6D\x6F\x72\x65","\x75\x6E\x77\x72\x61\x70","\x63\x6F\x6E\x74\x65\x6E\x74\x73","\x2E\x6D\x6F\x72\x65\x2D\x74\x65\x78\x74","\x73\x69\x62\x6C\x69\x6E\x67\x73","\x72\x65\x6D\x6F\x76\x65","\x63\x6C\x69\x63\x6B","\x2E\x72\x65\x61\x64\x2D\x6D\x6F\x72\x65","\x72\x65\x61\x64\x79"];$(document)[_0x7bf7[19]](function(){var _0xc30dx1=100;$(_0x7bf7[11])[_0x7bf7[10]](function(){var _0xc30dx2=$(this)[_0x7bf7[0]]();if($[_0x7bf7[2]](_0xc30dx2)[_0x7bf7[1]]> _0xc30dx1){var _0xc30dx3=_0xc30dx2[_0x7bf7[3]](0,_0xc30dx1);var _0xc30dx4=_0xc30dx2[_0x7bf7[3]](_0xc30dx1,$[_0x7bf7[2]](_0xc30dx2)[_0x7bf7[1]]);$(this)[_0x7bf7[5]]()[_0x7bf7[4]](_0xc30dx3);$(this)[_0x7bf7[7]](_0x7bf7[6]);$(this)[_0x7bf7[7]](_0x7bf7[8]+ _0xc30dx4+ _0x7bf7[9])}});$(_0x7bf7[18])[_0x7bf7[17]](function(){$(this)[_0x7bf7[15]](_0x7bf7[14])[_0x7bf7[13]]()[_0x7bf7[12]]();$(this)[_0x7bf7[16]]()})})