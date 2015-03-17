// var app = {};
//  
// function monitor( '#contact h3' ) {
//    var item = { element: element, options: options, invp: false };
//    _watch.push(item);
//    return item;
// }

var contactLinks = $details.find(".details-pane-outer"),
    didScroll = false;
 
$(window).scroll(function() {
    didScroll = true;
});
 
setInterval(function() {
    if ( didScroll ) {
        didScroll = false;
        // Check your page position and then
        // Load in more results
    }
}, 250);

$(function(){
	//your jQuery here
	$("window").load(function() {
		console.log('loaded');
	  $("body").removeClass("preload");
	});
});