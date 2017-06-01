$(function(){

	$(".btn").mouseenter(function(){
    	$(".btn").hide();
    	$(".btn-hover").show();
    });

    $(".btn-hover").mouseout(function(){
    	$(".btn").show();
    	$(".btn-hover").hide();
    });

    $("#pollBtn").click(function(){
        var event = createEvent();
        var status = event.checkPollValue();
        if(status) return;
        event.poll();
    });

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

});

function tb_remove() {
    var document = window.parent.document;
    $("#TB_imageOff",window.parent.document).unbind("click");
    $("#TB_closeWindowButton",window.parent.document).unbind("click");
    $("#TB_window",window.parent.document).fadeOut("fast",function(){$('#TB_window,#TB_overlay,#TB_HideSelect',window.parent.document).trigger("unload").unbind().remove();});
    $("#TB_load",window.parent.document).remove();
    if (typeof window.parent.document.body.style.maxHeight == "undefined") {//if IE 6
        $("body","html",window.parent.document).css({height: "auto", width: "auto"});
        $("html",window.parent.document).css("overflow","");
    }
    window.parent.document.onkeydown = "";
    window.parent.document.onkeyup = "";
    return false;
}