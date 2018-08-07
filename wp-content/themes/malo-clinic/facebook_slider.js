var SLIDER_WIDGET = SLIDER_WIDGET || (function() {
    var pos;
    var bgcolor = "";
    var fanpage;
    var content;
    var fanpage_address;
    var showed = false;
    var position;
    var speed;
    var fb_pic;
    return {
        toggle: function() {
            if (!showed) {
                document.getElementById('facebook_slider_widget').className =
                        document.getElementById('facebook_slider_widget').className + " facebook_slider_show";
                showed = true;
            } else {
                document.getElementById('facebook_slider_widget').className =
                        document.getElementById("facebook_slider_widget").className.replace(/\bfacebook_slider_show\b/, '');
                showed = false;
            }
        },
        init: function(args) {
            pos = args['pos'];
            bgcolor = args['bgcolor'];            
            fb_pic = args['fb_pic'];
            position = args['pos'];
            fanpage_address = args['fb_address'];                        
            fanpage = '<iframe src="//www.facebook.com/plugins/likebox.php?href= ' + fanpage_address + '&amp;width=' + args['width'] + '&amp;height=' + args['height'] + '&amp;colorscheme=' + args['fb_theme'] + '&amp;show_faces=' + args['fb_faces'] + '&amp;header=' + args['fb_header'] + '&amp;stream=' + args['fb_stream'] + '&amp;show_border=' + args['fb_border'] + '&amp;" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:' + args['width'] + 'px; height:' + args['height'] + 'px;" allowTransparency="true"></iframe>';
            content = document.createElement("div");
            content.className = "widgetcontent";
            content.id = "plWebFrikContent";
            content.innerHTML = fanpage;
            content.style.zIndex = "2147483647";
            button_div = document.createElement("div");
            href = document.createElement("a");            
            href.style.zIndex = "2147483647";
            href.innerHTML = "<img src='http://webfrik.pl/widgets/" + fb_pic + "'/>";
            button_div.appendChild(href);
            href.addEventListener('click', this.toggle);
        },
        jquery_init: function() {
            if (!window.jQuery) {                
            } else {
            }
        },
        helloWorld: function() {            
            document.getElementById("facebook_slider_widget").innerHTML = "";
            if (position === "LEFT" || position === "TOP") {                
                document.getElementById("facebook_slider_widget").appendChild(content);
                document.getElementById("facebook_slider_widget").appendChild(button_div);
            }
            if (position === "RIGHT" || position === "BOTTOM") {
                document.getElementById("facebook_slider_widget").appendChild(button_div);
                document.getElementById("facebook_slider_widget").appendChild(content);
            }
            document.getElementById("facebook_slider_widget").style.display = '';
        }
    };
}());

SLIDER_WIDGET.init(facebook_widget_args);
SLIDER_WIDGET.helloWorld();

