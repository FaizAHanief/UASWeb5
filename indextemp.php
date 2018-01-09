<?php
	require_once("konek_db.php");
	session_start();
	if($_SESSION['LoggedIn']){
		$uname=$_SESSION['Username'];
	}
	else{
	}
?>

<!DOCTYPE html>
<html>
	<title>Cogito Games Storepage</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.cov{opacity: 1.0;}
		.cov:hover{opacity: 0.4;filter:alpha(opacity=100); /*For IE8 and earlier */}
		html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}
		html{-ms-text-size-adjust:100%;
		-webkit-text-size-adjust:100%}body{margin:0}
		article,aside,details,figcaption,figure,footer,header,main,menu,nav,section,summary{display:block}
		audio,canvas,progress,video{display:inline-block}progress{vertical-align:baseline}
		audio:not([controls]){display:none;height:0}[hidden],template{display:none}
		a{background-color:transparent;
		-webkit-text-decoration-skip:objects}
		a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}
		dfn{font-style:italic}mark{background:#ff0;color:#000}
		small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
		sub{bottom:-0.25em}sup{top:-0.5em}figure{margin:1em 40px}img{border-style:none}svg:not(:root){overflow:hidden}
		code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}hr{box-sizing:content-box;height:0;overflow:visible}
		button,input,select,textarea{font:inherit;margin:0}optgroup{font-weight:bold}
		button,input{overflow:visible}button,select{text-transform:none}
		button,html [type=button],[type=reset],[type=submit]{-webkit-appearance:button}
		button::-moz-focus-inner, [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner{border-style:none;padding:0}
		button:-moz-focusring, [type=button]:-moz-focusring, [type=reset]:-moz-focusring, [type=submit]:-moz-focusring{outline:1px dotted ButtonText}
		fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:.35em .625em .75em}
		legend{color:inherit;display:table;max-width:100%;padding:0;white-space:normal}textarea{overflow:auto}
		[type=checkbox],[type=radio]{padding:0}
		[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}
		[type=search]{-webkit-appearance:textfield;outline-offset:-2px}
		[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}
		::-webkit-input-placeholder{color:inherit;opacity:0.54}
		::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}
		html,body{font-family:Verdana,sans-serif;font-size:15px;line-height:1.5}html{overflow-x:hidden}
		h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}h4{font-size:20px}h5{font-size:18px}h6{font-size:16px}.cog-serif{font-family:serif}
		h1,h2,h3,h4,h5,h6{font-family:"Segoe UI",Arial,sans-serif;font-weight:400;margin:10px 0}.cog-wide{letter-spacing:4px}
		hr{border:0;border-top:1px solid #eee;margin:20px 0}
		.cog-image{max-width:100%;height:auto}img{vertical-align:middle}a{color:inherit}
		.cog-table,.cog-table-all{border-collapse:collapse;border-spacing:0;width:100%;display:table}.cog-table-all{border:1px solid #ccc}
		.cog-bordered tr,.cog-table-all tr{border-bottom:1px solid #ddd}.cog-striped tbody tr:nth-child(even){background-color:#f1f1f1}
		.cog-table-all tr:nth-child(odd){background-color:#fff}.cog-table-all tr:nth-child(even){background-color:#f1f1f1}
		.cog-hoverable tbody tr:hover,.cog-ul.cog-hoverable li:hover{background-color:#ccc}.cog-centered tr th,.cog-centered tr td{text-align:center}
		.cog-table td,.cog-table th,.cog-table-all td,.cog-table-all th{padding:8px 8px;display:table-cell;text-align:left;vertical-align:top}
		.cog-table th:first-child,.cog-table td:first-child,.cog-table-all th:first-child,.cog-table-all td:first-child{padding-left:16px}
		.cog-btn,.cog-button{border:none;display:inline-block;outline:0;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
		.cog-btn:hover{box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)}
		.cog-btn,.cog-button{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}   
		.cog-disabled,.cog-btn:disabled,.cog-button:disabled{cursor:not-allowed;opacity:0.3}.cog-disabled *,:disabled *{pointer-events:none}
		.cog-btn.cog-disabled:hover,.cog-btn:disabled:hover{box-shadow:none}
		.cog-badge,.cog-tag{background-color:#000;color:#fff;display:inline-block;padding-left:8px;padding-right:8px;text-align:center}.cog-badge{border-radius:50%}
		.cog-ul{list-style-type:none;padding:0;margin:0}.cog-ul li{padding:8px 16px;border-bottom:1px solid #ddd}.cog-ul li:last-child{border-bottom:none}
		.cog-tooltip,.cog-display-container{position:relative}.cog-tooltip .cog-text{display:none}.cog-tooltip:hover .cog-text{display:inline-block}
		.cog-ripple:active{opacity:0.5}.cog-ripple{transition:opacity 0s}
		.cog-input{padding:8px;display:block;border:none;border-bottom:1px solid #ccc;width:100%}
		.cog-select{padding:9px 0;width:100%;border:none;border-bottom:1px solid #ccc}
		.cog-dropdown-click,.cog-dropdown-hover{position:relative;display:inline-block;cursor:pointer}
		.cog-dropdown-hover:hover .cog-dropdown-content{display:block}
		.cog-dropdown-hover:first-child,.cog-dropdown-click:hover{background-color:#ccc;color:#000}
		.cog-dropdown-hover:hover > .cog-button:first-child,.cog-dropdown-click:hover > .cog-button:first-child{background-color:#ccc;color:#000}
		.cog-dropdown-content{cursor:auto;color:#000;background-color:#fff;display:none;position:absolute;min-width:160px;margin:0;padding:0;z-index:1}
		.cog-check,.cog-radio{width:24px;height:24px;position:relative;top:6px}
		.cog-sidebar{height:100%;width:200px;background-color:#fff;position:fixed!important;z-index:1;overflow:auto}
		.cog-bar-block .cog-dropdown-hover,.cog-bar-block .cog-dropdown-click{width:100%}
		.cog-bar-block .cog-dropdown-hover .cog-dropdown-content,.cog-bar-block .cog-dropdown-click .cog-dropdown-content{min-width:100%}
		.cog-bar-block .cog-dropdown-hover .cog-button,.cog-bar-block .cog-dropdown-click .cog-button{width:100%;text-align:left;padding:8px 16px}
		.cog-main,#main{transition:margin-left .4s}
		.cog-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4)}
		.cog-modal-content{margin:auto;background-color:#fff;position:relative;padding:0;outline:0;width:600px}
		.cog-bar{width:100%;overflow:hidden}.cog-center .cog-bar{display:inline-block;width:auto}
		.cog-bar .cog-bar-item{padding:8px 16px;float:left;width:auto;border:none;outline:none;display:block}
		.cog-bar .cog-dropdown-hover,.cog-bar .cog-dropdown-click{position:static;float:left}
		.cog-bar .cog-button{white-space:normal}
		.cog-bar-block .cog-bar-item{width:100%;display:block;padding:8px 16px;text-align:left;border:none;outline:none;white-space:normal;float:none}
		.cog-bar-block.cog-center .cog-bar-item{text-align:center}.cog-block{display:block;width:100%}
		.cog-responsive{display:block;overflow-x:auto}
		.cog-container:after,.cog-container:before,.cog-panel:after,.cog-panel:before,.cog-row:after,.cog-row:before,.cog-row-padding:after,.cog-row-padding:before,
		.cog-cell-row:before,.cog-cell-row:after,.cog-clear:after,.cog-clear:before,.cog-bar:before,.cog-bar:after{content:"";display:table;clear:both}
		.cog-col,.cog-half,.cog-third,.cog-twothird,.cog-threequarter,.cog-quarter{float:left;width:100%}
		.cog-col.s1{width:8.33333%}.cog-col.s2{width:16.66666%}.cog-col.s3{width:24.99999%}.cog-col.s4{width:33.33333%}
		.cog-col.s5{width:41.66666%}.cog-col.s6{width:49.99999%}.cog-col.s7{width:58.33333%}.cog-col.s8{width:66.66666%}
		.cog-col.s9{width:74.99999%}.cog-col.s10{width:83.33333%}.cog-col.s11{width:91.66666%}.cog-col.s12{width:99.99999%}
		@media (min-width:601px){.cog-col.m1{width:8.33333%}.cog-col.m2{width:16.66666%}.cog-col.m3,.cog-quarter{width:24.99999%}.cog-col.m4,.cog-third{width:33.33333%}
			.cog-col.m5{width:41.66666%}.cog-col.m6,.cog-half{width:49.99999%}.cog-col.m7{width:58.33333%}.cog-col.m8,.cog-twothird{width:66.66666%}
			.cog-col.m9,.cog-threequarter{width:74.99999%}.cog-col.m10{width:83.33333%}.cog-col.m11{width:91.66666%}.cog-col.m12{width:99.99999%}}
		@media (min-width:993px){.cog-col.l1{width:8.33333%}.cog-col.l2{width:16.66666%}.cog-col.l3{width:24.99999%}.cog-col.l4{width:33.33333%}
			.cog-col.l5{width:41.66666%}.cog-col.l6{width:49.99999%}.cog-col.l7{width:58.33333%}.cog-col.l8{width:66.66666%}
			.cog-col.l9{width:74.99999%}.cog-col.l10{width:83.33333%}.cog-col.l11{width:91.66666%}.cog-col.l12{width:99.99999%}}
		.cog-content{max-width:980px;margin:auto}.cog-rest{overflow:hidden}
		.cog-cell-row{display:table;width:100%}.cog-cell{display:table-cell}
		.cog-cell-top{vertical-align:top}.cog-cell-middle{vertical-align:middle}.cog-cell-bottom{vertical-align:bottom}
		.cog-hide{display:none!important}.cog-show-block,.cog-show{display:block!important}.cog-show-inline-block{display:inline-block!important}
		@media (max-width:600px){.cog-modal-content{margin:0 10px;width:auto!important}.cog-modal{padding-top:30px}
			.cog-dropdown-hover.cog-mobile .cog-dropdown-content,.cog-dropdown-click.cog-mobile .cog-dropdown-content{position:relative}	
			.cog-hide-small{display:none!important}.cog-mobile{display:block;width:100%!important}.cog-bar-item.cog-mobile,.cog-dropdown-hover.cog-mobile,.cog-dropdown-click.cog-mobile{text-align:center}
			.cog-dropdown-hover.cog-mobile,.cog-dropdown-hover.cog-mobile .cog-btn,.cog-dropdown-hover.cog-mobile .cog-button,.cog-dropdown-click.cog-mobile,.cog-dropdown-click.cog-mobile .cog-btn,.cog-dropdown-click.cog-mobile .cog-button{width:100%}}
		@media (max-width:768px){.cog-modal-content{width:500px}.cog-modal{padding-top:50px}}
		@media (min-width:993px){.cog-modal-content{width:900px}.cog-hide-large{display:none!important}.cog-sidebar.cog-collapse{display:block!important}}
		@media (max-width:992px) and (min-width:601px){.cog-hide-medium{display:none!important}}
		@media (max-width:992px){.cog-sidebar.cog-collapse{display:none}.cog-main{margin-left:0!important;margin-right:0!important}}
		cog-top,.cog-bottom{position:fixed;width:100%;z-index:1}.cog-top{top:0}.cog-bottom{bottom:0}
		.cog-overlay{position:fixed;display:none;width:100%;height:100%;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.5);z-index:2}
		.cog-display-topleft{position:absolute;left:0;top:0}.cog-display-topright{position:absolute;right:0;top:0}
		.cog-display-bottomleft{position:absolute;left:0;bottom:0}.cog-display-bottomright{position:absolute;right:0;bottom:0}
		.cog-display-middle{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
		.cog-display-left{position:absolute;top:50%;left:0%;transform:translate(0%,-50%);-ms-transform:translate(-0%,-50%)}
		.cog-display-right{position:absolute;top:50%;right:0%;transform:translate(0%,-50%);-ms-transform:translate(0%,-50%)}
		.cog-display-topmiddle{position:absolute;left:50%;top:0;transform:translate(-50%,0%);-ms-transform:translate(-50%,0%)}
		.cog-display-bottommiddle{position:absolute;left:50%;bottom:0;transform:translate(-50%,0%);-ms-transform:translate(-50%,0%)}
		.cog-display-container:hover .cog-display-hover{display:block}.cog-display-container:hover span.cog-display-hover{display:inline-block}.cog-display-hover{display:none}
		.cog-display-position{position:absolute}
		.cog-circle{border-radius:50%}
		.cog-round-small{border-radius:2px}.cog-round,.cog-round-medium{border-radius:4px}.cog-round-large{border-radius:8px}.cog-round-xlarge{border-radius:16px}.cog-round-xxlarge{border-radius:32px}
		.cog-row-padding,.cog-row-padding>.cog-half,.cog-row-padding>.cog-third,.cog-row-padding>.cog-twothird,.cog-row-padding>.cog-threequarter,.cog-row-padding>.cog-quarter,.cog-row-padding>.cog-col{padding:0 8px}
		.cog-container,.cog-panel{padding:0.01em 16px}.cog-panel{margin-top:16px;margin-bottom:16px}
		.cog-code,.cog-codespan{font-family:Consolas,"courier new";font-size:16px}
		.cog-code{width:auto;background-color:#fff;padding:8px 12px;border-left:4px solid #4CAF50;word-wrap:break-word}
		.cog-codespan{color:crimson;background-color:#f1f1f1;padding-left:4px;padding-right:4px;font-size:110%}
		.cog-card,.cog-card-2{box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}
		.cog-card-4,.cog-hover-shadow:hover{box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)}
		.cog-spin{animation:cog-spin 2s infinite linear}@keyframes cog-spin{0%{transform:rotate(0deg)}100%{transform:rotate(359deg)}}
		.cog-animate-fading{animation:fading 10s infinite}@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
		.cog-animate-opacity{animation:opac 0.8s}@keyframes opac{from{opacity:0} to{opacity:1}}
		.cog-animate-top{position:relative;animation:animatetop 0.4s}@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}
		.cog-animate-left{position:relative;animation:animateleft 0.4s}@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}
		.cog-animate-right{position:relative;animation:animateright 0.4s}@keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}
		.cog-animate-bottom{position:relative;animation:animatebottom 0.4s}@keyframes animatebottom{from{bottom:-300px;opacity:0} to{bottom:0;opacity:1}}
		.cog-animate-zoom {animation:animatezoom 0.6s}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}}
		.cog-animate-input{transition:width 0.4s ease-in-out}.cog-animate-input:focus{width:100%!important}
		.cog-opacity,.cog-hover-opacity:hover{opacity:0.60}.cog-opacity-off,.cog-hover-opacity-off:hover{opacity:1}
		.cog-opacity-max{opacity:0.25}.cog-opacity-min{opacity:0.75}
		.cog-greyscale-max,.cog-grayscale-max,.cog-hover-greyscale:hover,.cog-hover-grayscale:hover{filter:grayscale(100%)}
		.cog-greyscale,.cog-grayscale{filter:grayscale(75%)}.cog-greyscale-min,.cog-grayscale-min{filter:grayscale(50%)}
		.cog-sepia{filter:sepia(75%)}.cog-sepia-max,.cog-hover-sepia:hover{filter:sepia(100%)}.cog-sepia-min{filter:sepia(50%)}
		.cog-tiny{font-size:10px!important}.cog-small{font-size:12px!important}.cog-medium{font-size:15px!important}.cog-large{font-size:18px!important}
		.cog-xlarge{font-size:24px!important}.cog-xxlarge{font-size:36px!important}.cog-xxxlarge{font-size:48px!important}.cog-jumbo{font-size:64px!important}
		.cog-left-align{text-align:left!important}.cog-right-align{text-align:right!important}.cog-justify{text-align:justify!important}.cog-center{text-align:center!important}
		.cog-border-0{border:0!important}.cog-border{border:1px solid #ccc!important}
		.cog-border-top{border-top:1px solid #ccc!important}.cog-border-bottom{border-bottom:1px solid #ccc!important}
		.cog-border-left{border-left:1px solid #ccc!important}.cog-border-right{border-right:1px solid #ccc!important}
		.cog-topbar{border-top:6px solid #ccc!important}.cog-bottombar{border-bottom:6px solid #ccc!important}
		.cog-leftbar{border-left:6px solid #ccc!important}.cog-rightbar{border-right:6px solid #ccc!important}
		.cog-section,.cog-code{margin-top:16px!important;margin-bottom:16px!important}
		.cog-margin{margin:16px!important}.cog-margin-top{margin-top:16px!important}.cog-margin-bottom{margin-bottom:16px!important}
		.cog-margin-left{margin-left:16px!important}.cog-margin-right{margin-right:16px!important}
		.cog-padding-small{padding:4px 8px!important}.cog-padding{padding:8px 16px!important}.cog-padding-large{padding:12px 24px!important}
		.cog-padding-16{padding-top:16px!important;padding-bottom:16px!important}.cog-padding-24{padding-top:24px!important;padding-bottom:24px!important}
		.cog-padding-32{padding-top:32px!important;padding-bottom:32px!important}.cog-padding-48{padding-top:48px!important;padding-bottom:48px!important}
		.cog-padding-64{padding-top:64px!important;padding-bottom:64px!important}
		.cog-left{float:left!important}.cog-right{float:right!important}
		.cog-button:hover{color:#000!important;background-color:#ccc!important}
		.cog-transparent,.cog-hover-none:hover{background-color:transparent!important}
		.cog-hover-none:hover{box-shadow:none!important}
		.cog-amber,.cog-hover-amber:hover{color:#000!important;background-color:#ffc107!important}
		.cog-aqua,.cog-hover-aqua:hover{color:#000!important;background-color:#00ffff!important}
		.cog-blue,.cog-hover-blue:hover{color:#fff!important;background-color:#2196F3!important}
		.cog-light-blue,.cog-hover-light-blue:hover{color:#000!important;background-color:#87CEEB!important}
		.cog-brown,.cog-hover-brown:hover{color:#fff!important;background-color:#795548!important}
		.cog-cyan,.cog-hover-cyan:hover{color:#000!important;background-color:#00bcd4!important}
		.cog-blue-grey,.cog-hover-blue-grey:hover,.cog-blue-gray,.cog-hover-blue-gray:hover{color:#fff!important;background-color:#607d8b!important}
		.cog-green,.cog-hover-green:hover{color:#fff!important;background-color:#4CAF50!important}
		.cog-light-green,.cog-hover-light-green:hover{color:#000!important;background-color:#8bc34a!important}
		.cog-indigo,.cog-hover-indigo:hover{color:#fff!important;background-color:#3f51b5!important}
		.cog-khaki,.cog-hover-khaki:hover{color:#000!important;background-color:#f0e68c!important}
		.cog-lime,.cog-hover-lime:hover{color:#000!important;background-color:#cddc39!important}
		.cog-orange,.cog-hover-orange:hover{color:#000!important;background-color:#ff9800!important}
		.cog-deep-orange,.cog-hover-deep-orange:hover{color:#fff!important;background-color:#ff5722!important}
		.cog-pink,.cog-hover-pink:hover{color:#fff!important;background-color:#e91e63!important}
		.cog-purple,.cog-hover-purple:hover{color:#fff!important;background-color:#9c27b0!important}
		.cog-deep-purple,.cog-hover-deep-purple:hover{color:#fff!important;background-color:#673ab7!important}
		.cog-red,.cog-hover-red:hover{color:#fff!important;background-color:#f44336!important}
		.cog-sand,.cog-hover-sand:hover{color:#000!important;background-color:#fdf5e6!important}
		.cog-teal,.cog-hover-teal:hover{color:#fff!important;background-color:#009688!important}
		.cog-yellow,.cog-hover-yellow:hover{color:#000!important;background-color:#ffeb3b!important}
		.cog-white,.cog-hover-white:hover{color:#000!important;background-color:#fff!important}
		.cog-black,.cog-hover-black:hover{color:#fff!important;background-color:#000!important}
		.cog-grey,.cog-hover-grey:hover,.cog-gray,.cog-hover-gray:hover{color:#000!important;background-color:#9e9e9e!important}
		.cog-light-grey,.cog-hover-light-grey:hover,.cog-light-gray,.cog-hover-light-gray:hover{color:#000!important;background-color:#f1f1f1!important}
		.cog-dark-grey,.cog-hover-dark-grey:hover,.cog-dark-gray,.cog-hover-dark-gray:hover{color:#fff!important;background-color:#616161!important}
		.cog-pale-red,.cog-hover-pale-red:hover{color:#000!important;background-color:#ffdddd!important}
		.cog-pale-green,.cog-hover-pale-green:hover{color:#000!important;background-color:#ddffdd!important}
		.cog-pale-yellow,.cog-hover-pale-yellow:hover{color:#000!important;background-color:#ffffcc!important}
		.cog-pale-blue,.cog-hover-pale-blue:hover{color:#000!important;background-color:#ddffff!important}
		.cog-text-amber,.cog-hover-text-amber:hover{color:#ffc107!important}
		.cog-text-aqua,.cog-hover-text-aqua:hover{color:#00ffff!important}
		.cog-text-blue,.cog-hover-text-blue:hover{color:#2196F3!important}
		.cog-text-light-blue,.cog-hover-text-light-blue:hover{color:#87CEEB!important}
		.cog-text-brown,.cog-hover-text-brown:hover{color:#795548!important}
		.cog-text-cyan,.cog-hover-text-cyan:hover{color:#00bcd4!important}
		.cog-text-blue-grey,.cog-hover-text-blue-grey:hover,.cog-text-blue-gray,.cog-hover-text-blue-gray:hover{color:#607d8b!important}
		.cog-text-green,.cog-hover-text-green:hover{color:#4CAF50!important}
		.cog-text-light-green,.cog-hover-text-light-green:hover{color:#8bc34a!important}
		.cog-text-indigo,.cog-hover-text-indigo:hover{color:#3f51b5!important}
		.cog-text-khaki,.cog-hover-text-khaki:hover{color:#b4aa50!important}
		.cog-text-lime,.cog-hover-text-lime:hover{color:#cddc39!important}
		.cog-text-orange,.cog-hover-text-orange:hover{color:#ff9800!important}
		.cog-text-deep-orange,.cog-hover-text-deep-orange:hover{color:#ff5722!important}
		.cog-text-pink,.cog-hover-text-pink:hover{color:#e91e63!important}
		.cog-text-purple,.cog-hover-text-purple:hover{color:#9c27b0!important}
		.cog-text-deep-purple,.cog-hover-text-deep-purple:hover{color:#673ab7!important}
		.cog-text-red,.cog-hover-text-red:hover{color:#f44336!important}
		.cog-text-sand,.cog-hover-text-sand:hover{color:#fdf5e6!important}
		.cog-text-teal,.cog-hover-text-teal:hover{color:#009688!important}
		.cog-text-yellow,.cog-hover-text-yellow:hover{color:#d2be0e!important}
		.cog-text-white,.cog-hover-text-white:hover{color:#fff!important}
		.cog-text-black,.cog-hover-text-black:hover{color:#000!important}
		.cog-text-grey,.cog-hover-text-grey:hover,.cog-text-gray,.cog-hover-text-gray:hover{color:#757575!important}
		.cog-text-light-grey,.cog-hover-text-light-grey:hover,.cog-text-light-gray,.cog-hover-text-light-gray:hover{color:#f1f1f1!important}
		.cog-text-dark-grey,.cog-hover-text-dark-grey:hover,.cog-text-dark-gray,.cog-hover-text-dark-gray:hover{color:#3a3a3a!important}
		.cog-border-amber,.cog-hover-border-amber:hover{border-color:#ffc107!important}
		.cog-border-aqua,.cog-hover-border-aqua:hover{border-color:#00ffff!important}
		.cog-border-blue,.cog-hover-border-blue:hover{border-color:#2196F3!important}
		.cog-border-light-blue,.cog-hover-border-light-blue:hover{border-color:#87CEEB!important}
		.cog-border-brown,.cog-hover-border-brown:hover{border-color:#795548!important}
		.cog-border-cyan,.cog-hover-border-cyan:hover{border-color:#00bcd4!important}
		.cog-border-blue-grey,.cog-hover-border-blue-grey:hover,.cog-border-blue-gray,.cog-hover-border-blue-gray:hover{border-color:#607d8b!important}
		.cog-border-green,.cog-hover-border-green:hover{border-color:#4CAF50!important}
		.cog-border-light-green,.cog-hover-border-light-green:hover{border-color:#8bc34a!important}
		.cog-border-indigo,.cog-hover-border-indigo:hover{border-color:#3f51b5!important}
		.cog-border-khaki,.cog-hover-border-khaki:hover{border-color:#f0e68c!important}
		.cog-border-lime,.cog-hover-border-lime:hover{border-color:#cddc39!important}
		.cog-border-orange,.cog-hover-border-orange:hover{border-color:#ff9800!important}
		.cog-border-deep-orange,.cog-hover-border-deep-orange:hover{border-color:#ff5722!important}
		.cog-border-pink,.cog-hover-border-pink:hover{border-color:#e91e63!important}
		.cog-border-purple,.cog-hover-border-purple:hover{border-color:#9c27b0!important}
		.cog-border-deep-purple,.cog-hover-border-deep-purple:hover{border-color:#673ab7!important}
		.cog-border-red,.cog-hover-border-red:hover{border-color:#f44336!important}
		.cog-border-sand,.cog-hover-border-sand:hover{border-color:#fdf5e6!important}
		.cog-border-teal,.cog-hover-border-teal:hover{border-color:#009688!important}
		.cog-border-yellow,.cog-hover-border-yellow:hover{border-color:#ffeb3b!important}
		.cog-border-white,.cog-hover-border-white:hover{border-color:#fff!important}
		.cog-border-black,.cog-hover-border-black:hover{border-color:#000!important}
		.cog-border-grey,.cog-hover-border-grey:hover,.cog-border-gray,.cog-hover-border-gray:hover{border-color:#9e9e9e!important}
		.cog-border-light-grey,.cog-hover-border-light-grey:hover,.cog-border-light-gray,.cog-hover-border-light-gray:hover{border-color:#f1f1f1!important}
		.cog-border-dark-grey,.cog-hover-border-dark-grey:hover,.cog-border-dark-gray,.cog-hover-border-dark-gray:hover{border-color:#616161!important}
		.cog-border-pale-red,.cog-hover-border-pale-red:hover{border-color:#ffe7e7!important}.cog-border-pale-green,.cog-hover-border-pale-green:hover{border-color:#e7ffe7!important}
		.cog-border-pale-yellow,.cog-hover-border-pale-yellow:hover{border-color:#ffffcc!important}.cog-border-pale-blue,.cog-hover-border-pale-blue:hover{border-color:#e7ffff!important}
	</style>
<body>

<!-- Navbar (sit on top) -->
<div class="cog-top">
  <div class="cog-bar cog-white cog-wide cog-padding cog-card">
    <a href="#home" class="cog-bar-item cog-button"><b>Cogito Games</b> Studios</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="cog-right cog-hide-small">
      <a href="#projects" class="cog-bar-item cog-button">Store</a>
	  <?php if ($_SESSION['LoggedIn']){
			echo "<a href='#login' class='cog-bar-item cog-button'>".$uname."</a>";}
		else{
			echo "<a href='#login' class='cog-bar-item cog-button'>Sign In</a>";
		}
		?>
      <a href="#about" class="cog-bar-item cog-button">About</a>
      <a href="#contact" class="cog-bar-item cog-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="cog-display-container cog-content cog-wide" style="max-width:1500px;" id="home">
  <img class="cog-image" src="img/bg.png" alt="Cogito" width="1500" height="800">
  <div class="cog-display-middle cog-margin-top cog-center">
    <h1 class="cog-xxlarge cog-text-white"><span class="cog-padding cog-black cog-opacity-min"><b>Cogito</b></span> <span class="cog-hide-small cog-text-black">Games Studios</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="cog-content cog-padding" style="max-width:1564px">

  <!-- Store Section -->
  <div class="cog-container cog-padding-32" id="projects">
    <h3 class="cog-border-bottom cog-border-light-grey cog-padding-16">Store</h3>
  </div>

  <div class="cog-row-padding">
    <div class="cog-col l3 m6 cog-margin-bottom">
      <div class="cog-display-container">
        <div class="cog-display-topleft cog-black cog-padding">Dishonored</div>
        <img class="cov" src="img/dish_cover.jpg" alt="Games" width="250" height="350">
      </div>
    </div>
    <div class="cog-col l3 m6 cog-margin-bottom">
      <div class="cog-display-container">
        <div class="cog-display-topleft cog-black cog-padding">Divinity : Original Sin</div>
        <img class="cov" src="img/divors_cover.jpg" alt="Games" width="250" height="350">
      </div>
    </div>
    <div class="cog-col l3 m6 cog-margin-bottom">
      <div class="cog-display-container">
        <div class="cog-display-topleft cog-black cog-padding">Divinity : Original Sin 2</div>
        <img class="cov" src="img/divors2_cover.jpg" alt="Games" width="250" height="350">
      </div>
    </div>
    <div class="cog-col l3 m6 cog-margin-bottom">
      <div class="cog-display-container">
        <div class="cog-display-topleft cog-black cog-padding">Doom</div>
        <img class="cov" src="img/doom_cover.jpg" alt="Games" width="250" height="350">
      </div>
    </div>
  </div>

  <div class="cog-row-padding">
    <div class="cog-col l3 m6 cog-margin-bottom">
      <div class="cog-display-container">
        <div class="cog-display-topleft cog-black cog-padding">Nier : Automata</div>
        <img class="cov" src="img/nierau_cover.jpg" alt="Games" width="250" height="350">
      </div>
    </div>
    <div class="cog-col l3 m6 cog-margin-bottom">
      <div class="cog-display-container">
        <div class="cog-display-topleft cog-black cog-padding">Stellaris</div>
        <img class="cov" src="img/stellaris_cover.jpg" alt="Games" width="250" height="350">
      </div>
    </div>
    <div class="cog-col l3 m6 cog-margin-bottom">
      <div class="cog-display-container">
        <div class="cog-display-topleft cog-black cog-padding">The Elder Scrolls V : Skyrim</div>
        <img class="cov" src="img/tessky_cover.jpg" alt="Games" width="250" height="350">
      </div>
    </div>
    <div class="cog-col l3 m6 cog-margin-bottom">
      <div class="cog-display-container">
        <div class="cog-display-topleft cog-black cog-padding">The Witcher</div>
        <img class="cov" src="img/witcher_cover.jpg" alt="Games" width="250" height="350">
      </div>
    </div>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="cog-center cog-black cog-padding-16">
  <p>&copy Cogito Games Sudios</a></p>
</footer>

</body>
</html>
