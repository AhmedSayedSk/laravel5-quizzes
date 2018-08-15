var a = $("<div></div>").addClass("app-settings").append($("<div></div>").addClass("app-settings-button").html('<span class="icon-magic-wand"></span>')),
    e = $("<div></div>").addClass("app-settings-themes-header").append("<span>"+window.theme_header+"</span>"),
    t = $("<div></div>").addClass("app-settings-themes-navigation").append("<span>"+window.theme_navigation+"</span>"),
    o = $("<div></div>").addClass("app-settings-themes-footer").append("<span>"+window.theme_footer+"</span>"),
    n = new Array;
n.header = n.navigation = n.footer = new Array, n.header = ["app-header-design-default", "app-header-design-dark", "app-header-design-lightblue", "app-header-design-orange", "app-header-design-blue"], n.navigation = ["app-navigation-style-default", "app-navigation-style-light", "app-navigation-style-lightblue", "app-navigation-style-purple", "app-navigation-style-blue"], n.footer = ["app-footer-default", "app-footer-dark", "app-footer-light", "app-footer-purple", "app-footer-blue"];
var hclass = $(".app-header").attr('class');
for (r = 0; r < n.header.length; r++) {
    i = "";
	if( hclass.indexOf(n.header[r]) >= 0){
		i = " active";
	}
    e.append($("<div></div>").addClass(n.header[r] + i))
}
var navigation_class = $(".app-navigation").attr('class');
for (r = 0; r < n.navigation.length; r++) {
    i = "";
	if( navigation_class.indexOf(n.navigation[r]) >= 0){
		i = " active";
	}
    t.append($("<div></div>").addClass(n.navigation[r] + i))
}
var footer_class = $(".app-footer").attr('class');
for (var r = 0; r < n.footer.length; r++) {    
    i = "";
	if( footer_class.indexOf(n.footer[r]) >= 0){
		i = " active";
	}
    o.append($("<div></div>").addClass(n.footer[r] + i))
}
a.append(e), a.append(t), a.append(o), a.append('<button type="button" class="theme_to_default btn btn-danger btn-sm">'+window.theme_to_default+'</button>'), $("body").append(a), $("body").on("click", ".app-settings-themes-header > div", function() {
    for (var a = 0; a < n.header.length; a++) $(".app-header").removeClass(n.header[a]);
        $.get(window.change_theme+'/header/'+$(this).attr("class").replace('app-header-design-',''));
    $(".app-header").addClass($(this).attr("class")), $(".app-settings-themes-header > div").removeClass("active"), $(this).addClass("active")
}), $("body").on("click", ".app-settings-themes-navigation > div", function() {
    for (var a = 0; a < n.navigation.length; a++) $(".app-navigation").removeClass(n.navigation[a]);
    $.get(window.change_theme+'/navigation/'+$(this).attr("class").replace('app-navigation-style-',''));
    $(".app-navigation").addClass($(this).attr("class")), $(".app-settings-themes-navigation > div").removeClass("active"), $(this).addClass("active")
}), $("body").on("click", ".app-settings-themes-footer > div", function() {
    for (var a = 0; a < n.footer.length; a++) $(".app-footer").removeClass(n.footer[a]);
    $.get(window.change_theme+'/footer/'+$(this).attr("class").replace('app-footer-',''));
    $(".app-footer").addClass($(this).attr("class")), $(".app-settings-themes-footer > div").removeClass("active"), $(this).addClass("active")
}), $("body").on("click", ".app-settings-button", function() {
    $(".app-settings").toggleClass("open")
});
$(".theme_to_default").click(function(){
	$.get(window.change_theme+'/header/default');
	$.get(window.change_theme+'/navigation/default');
	$.get(window.change_theme+'/footer/default');

	$(".app-header").addClass('app-header-design-default'), $(".app-settings-themes-header > div").removeClass("active"), $(".app-header-design-default").addClass("active");
	$(".app-navigation").addClass('app-navigation-style-default'), $(".app-settings-themes-navigation > div").removeClass("active"), $(".app-navigation-style-default").addClass("active");
	$(".app-footer").addClass('app-footer-default'), $(".app-settings-themes-footer > div").removeClass("active"), $(".app-footer-default").addClass("active");
});