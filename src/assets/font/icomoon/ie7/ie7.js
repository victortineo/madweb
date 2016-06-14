/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-sequenza-logo-min': '&#xe925;',
		'icon-sequenza-logo': '&#xe926;',
		'icon-block1': '&#xe91f;',
		'icon-fluig1': '&#xe919;',
		'icon-computer1': '&#xe91e;',
		'icon-rfid': '&#xe920;',
		'icon-peoples1': '&#xe921;',
		'icon-mobile2': '&#xe922;',
		'icon-lampada1': '&#xe923;',
		'icon-digital': '&#xe924;',
		'icon-computer2': '&#xe900;',
		'icon-arrow-down1': '&#xe917;',
		'icon-mail1': '&#xe915;',
		'icon-marker2': '&#xe916;',
		'icon-calendar1': '&#xe914;',
		'icon-tent1': '&#xe913;',
		'icon-archive1': '&#xe901;',
		'icon-bed1': '&#xe902;',
		'icon-bus1': '&#xe903;',
		'icon-bus-left1': '&#xe904;',
		'icon-bus-right1': '&#xe905;',
		'icon-chopp1': '&#xe918;',
		'icon-facebook1': '&#xe906;',
		'icon-facebook2': '&#xe907;',
		'icon-flatware1': '&#xe908;',
		'icon-gift1': '&#xe909;',
		'icon-instagram1': '&#xe90a;',
		'icon-linkedin1': '&#xe90b;',
		'icon-man1': '&#xe90c;',
		'icon-marker1': '&#xe90d;',
		'icon-ribbon1': '&#xe90e;',
		'icon-shirt1': '&#xe90f;',
		'icon-skype1': '&#xe910;',
		'icon-telephone1': '&#xe911;',
		'icon-telephone2': '&#xe912;',
		'icon-twitter1': '&#xe91a;',
		'icon-whatsapp1': '&#xe91b;',
		'icon-whatsapp2': '&#xe91c;',
		'icon-woman1': '&#xe91d;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
