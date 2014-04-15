jQuery(document).ready(function(){
   //Accordions
	if(jQuery('.accordion').length){
		jQuery('.accordion').each(function(){
			var accordion = jQuery(this);
			
			accordion.find('.accordion-title').on("click touchstart", function(e){
				accordion.find('.accordion-content').slideToggle(300);
				accordion.toggleClass('accordion-open');
				e.preventDefault(); 
			});
		});
	}
	
	//Tabs
	jQuery('.tablist').tabs();
});