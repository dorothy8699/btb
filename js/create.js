
$(document).ready(function(){
    contentInputFlg = false;
    optionsInputFlg = false;
    $("#createBtn").click(function(){
    	var event = createEvent();
        var status = event.checkCreateValue();
        if(status) return;
        $("#createForm").submit();
    });

    $.datepicker.formatDate( "yy-mm-dd", new Date( 2007, 1 - 1, 26 ) );

    $("#end").datepicker({
    	showMonthAfterYear: true,
    	yearSuffix: '年',
    	weekHeader: 'CH',
    	dayNamesMin: [ "日", "一", "二", "三", "四", "五", "六" ],
    	minDate: new Date(),
    	monthNames: [ "1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月" ],
    	dateFormat: "yy-mm-dd",
    });


    $("#cmt1").click(function(){
    	layer.msg('<div id="comment1" class="tal"><div class="ft15">例1:团队建设策划方案</div><div class="ft15">例2:班级活动意见收集</div><div class="ft15">例3:户外活动策划方案</div><div class="ft15">例4:员工聚餐活动策划方案</div></div>');
    });
    
    $("#cmt2").click(function(){
    	layer.msg('<div id="comment2" class="tal">例:2016-06-06</div>');
    });

    $("#cmt3").click(function(){
    	layer.msg('<div id="comment3" class="tal"><div class="ft15">例:</div><div class="ft15">参加人员:全部门人员</div><div class="ft15">人均预算:300元</div><div class="ft15">活动目的:加强凝聚力与团队协作能力</div></div>');
    });

    $("#cmt4").click(function(){
    	layer.msg('<div id="comment4" class="tal"><div class="ft15">例1:</div><div class="ft15">2016年6月6日19:00开始</div><div class="ft15">2016年6月7日19:00开始</div><div class="ft15 pdt5">例2:</div><div class="ft15">去烧烤</div><div class="ft15">去登山</div><div class="ft15">去K歌</div></div>');
    });

    $("#title").focus(function(){
        $(".title-ul").show();
    });

    $(".title-ul ul li").click(function(){
        $(".title-ul ul li").removeClass('color-bg-gray');
        $("#title").val($.trim($(this).html()));
        $(this).addClass('color-bg-gray');
        $(".title-ul").hide();
    });

    $("#content").bind('input propertychange', function() {
        if($(this).val().length > 0){
            contentInputFlg = true;
            $(this).removeClass('color-gray');
        }else{
            contentInputFlg = false;
        }
    });

    $("#options").bind('input propertychange', function() {
        if($(this).val().length > 0){
            optionsInputFlg = true;
            $(this).removeClass('color-gray');
        }else{
            optionsInputFlg = false;
        }
    });

    var egContent = '组织人：\n活动内容：\n活动目的：\n人均预算：\n注意事项：';
    var egOptions = '例：\n去聚餐\n去登山\n去烧烤\n－－－或者－－－\n例：\n2016年6月6日～\n2016年6月7日～';
    $("#content").val(egContent);
    $("#options").val(egOptions);

    $("#content").focus(function() {
        if ($(this).val() != egContent) return;
        $(this).val('');        
    });

    $("#content").blur(function() {
        if ($(this).val() != '') return;
        $(this).val(egContent);
        $(this).addClass('color-gray');
    });

    $("#options").focus(function() {
        if ($(this).val() != egOptions) return;
        $(this).val('');        
    });

    $("#options").blur(function() {
        if ($(this).val() != '') return;
        $(this).val(egOptions);
        $(this).addClass('color-gray');
    });

});


