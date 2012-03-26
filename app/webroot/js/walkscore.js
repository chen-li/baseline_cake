function call_walkscore(address, wk_width, wk_height) {
	var add_lat_lng = "var ws_lat = '"+PropLatlng.lat()+"';var ws_lon = '"+PropLatlng.lng()+"';";
	if(parseFloat(PropLatlng.lat()) === 0 || parseFloat(PropLatlng.lng()) === 0 || parseFloat(PropLatlng.lat()) === 1 || parseFloat(PropLatlng.lng()) === 1) {
		add_lat_lng = "var ws_address = \""+address+"\";";
	}
	var walkscore = "<script type='text/javascript'> var ws_wsid = '"+WSID+"';"+add_lat_lng+"var ws_width = '"+wk_width+"';var ws_height = '"+wk_height+"';var ws_layout = 'vertical';</script><style type='text/css'> #ws-walkscore-tile{position:relative;text-align:left}#ws-walkscore-tile *{float:none;}#ws-footer a,#ws-footer a:link{font:11px Verdana,Arial,Helvetica,sans-serif;margin-right:6px;white-space:nowrap;padding:0;color:#000;font-weight:bold;text-decoration:none}#ws-footer a:hover{color:#777;text-decoration:none}#ws-footer a:active{color:#b14900}</style><div id='ws-walkscore-tile'><div id='ws-footer' style='position:absolute;top:"+(wk_height-13)+"px;left:3px;width:"+wk_width+"px'><a id='ws-a' href='http://www.walkscore.com/' target='_blank'>Find out your home's Walk Score.</a></div></div><script type='text/javascript' src='http://www.walkscore.com/tile/show-walkscore-tile.php'></script>";
	return walkscore;
}
