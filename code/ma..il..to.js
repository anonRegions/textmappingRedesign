var a = ".o";
var q = "rg";
var m = "dm";
var t = "id";
var p = "dl";
var y = "eb";
var g = "ro";
var h = "ok"
var b = "&amp;";
var x = "te";
var c = "xt";
var z = "ma";
var l = "pp";
var s = "in";
var k = "g";
var r = "ma";
var w = "il";
var n = "to";
var u = "&c";
var v = "ol";
var j = "on";
var i = ";";

document.getElementById('').innerHTML = 'Some text!';

function correspond(name, dom, tl, params)
{
	var s = e(name,dom,tl);
	document.write('<a href="'+m_+n_+s+params+'">'+s+'</a>');
}
function correspond2(name, dom, tl, params, display)
{
	document.write('<a href="'+m_+n_+e(name,dom,tl)+params+'">'+display+'</a>');
}
function e(name, dom, tl)
{
	var s = name+a_;
	if (tl!=-2)
	{
		s+= dom;
		if (tl>=0)
			s+= d_+tld_[tl];
	}
	else
		s+= swapper(dom);
	return s;
}
function swapper(d)
{
	var s = "";
	for (var i=0; i<d.length; i+=2)
		if (i+1==d.length)
			s+= d.charAt(i)
		else
			s+= d.charAt(i+1)+d.charAt(i);
	return s.replace(/\?/g,'.');
}