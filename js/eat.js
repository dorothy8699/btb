jQuery(document).ready(function(){
	for(var i=1;i<100;i++){
		window.setTimeout( eat0, 500*i );
		window.setTimeout( run(i), 50000*i );
	}	
});

function eat0(){
	jQuery("#up").attr("transform","matrix(-0.59495595,-0.08488907,0.08488907,-0.59495595,178.62578,1222.4217)");
	jQuery("#peas").hide();
	window.setTimeout( eat1, 50);
}

function eat1(){
	jQuery("#up").attr("transform","matrix(-0.58305362,-0.14569562,0.14569562,-0.58305362,154.73128,1237.1493)");
	jQuery("#up").attr("style","fill:#483737;fill-opacity:1;stroke:none");
	window.setTimeout( eat2, 50);
}

function eat2(){
	jQuery("#up").attr("transform","matrix(-0.60098148,0,0,-0.60098148,206.26337,1195.5422)");
	jQuery("#peas").show();

}

function run(i){
	jQuery("#up").parent().attr("transform","translate(" + i + ",-952.36218)");
}