$(function(){
	$(".btn").mouseenter(function(){
    	$(".btn").hide();
    	$(".btn-hover").show();
    });

    $(".btn-hover").mouseout(function(){
    	$(".btn").show();
    	$(".btn-hover").hide();
    });

    $(".yesBtn").click(function(){
        $(this).attr("src","image/clickedyes.svg");
        var noBtn = $(this).parent().find('.noBtn');
        noBtn.attr("src","image/no.svg");
    });

    $(".noBtn").click(function(){
        $(this).attr("src","image/clickedno.svg");
        var yesBtn = $(this).parent().find('.yesBtn');
        yesBtn.attr("src","image/yes.svg");
    });

    $(".yesBtn").mouseenter(function(){
    	if($(this).attr("src")=="image/clickedyes.svg") return;
        $(this).attr("src","image/hoveryes.svg");
    });

    $(".noBtn").mouseenter(function(){
    	if($(this).attr("src")=="image/clickedno.svg") return;
        $(this).attr("src","image/hoverno.svg");
    });

    $(".yesBtn").mouseout(function(){
    	if($(this).attr("src")=="image/clickedyes.svg") return;
        $(this).attr("src","image/yes.svg");
    });

    $(".noBtn").mouseout(function(){
    	if($(this).attr("src")=="image/clickedno.svg") return;
        $(this).attr("src","image/no.svg");
    });

    $("#listBtn").click(function(){ openBox();});

        $(".yesBtn").click(function(){
        $(this).attr("src","image/clickedyes.svg");
        $(this).next('.radioyes').attr("checked","checked");
        var noBtn = $(this).closest('td').find('.noBtn');
        noBtn.attr("src","image/no.svg");
        noBtn.next('.radiono').removeAttr("checked");
    });

    $(".noBtn").click(function(){
        $(this).attr("src","image/clickedno.svg");
        $(this).next('.radiono').attr("checked","checked");
        var yesBtn = $(this).closest('td').find('.yesBtn');
        yesBtn.attr("src","image/yes.svg");
        yesBtn.next('.radioyes').removeAttr("checked");
    });

    $(".yesBtn").mouseenter(function(){
        if($(this).attr("src")=="image/clickedyes.svg") return;
        $(this).attr("src","image/hoveryes.svg");
    });

    $(".noBtn").mouseenter(function(){
        if($(this).attr("src")=="image/clickedno.svg") return;
        $(this).attr("src","image/hoverno.svg");
    });

    $(".yesBtn").mouseout(function(){
        if($(this).attr("src")=="image/clickedyes.svg") return;
        $(this).attr("src","image/yes.svg");
    });

    $(".noBtn").mouseout(function(){
        if($(this).attr("src")=="image/clickedno.svg") return;
        $(this).attr("src","image/no.svg");
    });

    $("#pollBtn").click(function(){ 
        var event = createEvent();
        var status = event.checkPollValue();
        if(status) return;
        event.poll();
    });

});

function openBox(){
    var eid = $("#eventid").val(); 
    if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) {
        $("#pollForm").show();
        $("#listBtn").hide();
    }else{
        var w = 900,h = 500;
        var w65 = 0.65, h9 = 0.90;
        var w95 = 0.95;
        if (window.innerWidth)
            w = window.innerWidth;
        else if ((document.body) && (document.body.clientWidth))
            w = document.body.clientWidth;
        if (window.innerHeight)
            h = window.innerHeight;
        else if ((document.body) && (document.body.clientHeight))
            h = document.body.clientHeight;
        
        w = w < 500? w * w95 + 'px' : w * w65 + 'px';
        h = h * h9 + 'px';
        
        var url = "box?id=" + eid;
        var index=layer.open({
                type: 2,
                title: '请投票选择',
                shadeClose: true,
                shade: 0.8,
                area: [w, h],
                content: url
            }); 
        layer.iframeAuto(index); 
    }
}