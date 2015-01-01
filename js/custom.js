function pbtpost2(e) {}

$(document).ready(function() {
    $("#com-tab2 .widget3").hide();
    $("#com-tab2 .widget3:first").show();
    $(".com-tab2-menu ul li:first").addClass("selected");
    $(".com-tab2-menu ul li").click(function() {
        $(".com-tab2-menu ul li").removeClass("selected");
        $(this).addClass("selected");
        $("#com-tab2 .widget3").hide();
        $("#com-tab2 .widget3").eq($(".com-tab2-menu ul li").index(this)).fadeToggle(1e3);
        return false
    })
});
$(document).ready(function() {
    $("#com-tab .widget3").hide();
    $("#com-tab .widget3:first").show();
    $(".com-tab-menu ul li:first").addClass("selected");
    $(".com-tab-menu ul li").click(function() {
        $(".com-tab-menu ul li").removeClass("selected");
        $(this).addClass("selected");
        $("#com-tab .widget3").hide();
        $("#com-tab .widget3").eq($(".com-tab-menu ul li").index(this)).fadeToggle(1e3);
        return false
    })
});
$(document).ready(function() {
    $("#top-tab .widget2").hide();
    $("#top-tab .widget2:first").show();
    $(".top-tab-widget-menu ul li:first").addClass("selected");
    $(".top-tab-widget-menu ul li").click(function() {
        $(".top-tab-widget-menu ul li").removeClass("selected");
        $(this).addClass("selected");
        $("#top-tab .widget2").hide();
        $("#top-tab .widget2").eq($(".top-tab-widget-menu ul li").index(this)).fadeToggle(1e3);
        return false
    })
});
$(document).ready(function() {
    $("#top-tabv2 .widget3").hide();
    $("#top-tabv2 .widget3:first").show();
    $(".top-tab-widget-menuv2 ul li:first").addClass("selected");
    $(".top-tab-widget-menuv2 ul li").click(function() {
        $(".top-tab-widget-menuv2 ul li").removeClass("selected");
        $(this).addClass("selected");
        $("#top-tabv2 .widget3").hide();
        $("#top-tabv2 .widget3").eq($(".top-tab-widget-menuv2 ul li").index(this)).slideDown()(300)
    })
})
