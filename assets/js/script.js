/*NÃO ESTÁ FUNCIONANDO O SCROLL
jQuery(function(){
	jQuery('.mainfooter_scroll').on('click', function(){
		jQuery(document.body).scrollTop(0);
	});
});*/

//PÁGINAÇÃO AJAX
jQuery(function(){
	jQuery('.loadmoreButton').on('click', function(){

		jQuery(this).hide();

		var offset = jQuery('.postscontent article').length;
		jQuery.ajax({
			type:'POST',
			url:ajaxUrl,
			data:{action:'LoadMorePosts', offset:offset},
			success:function(html){
				jQuery('.loadmoreButton').show();

				if(html != '') {
					jQuery('.postscontent').append(html);
				} else {
					jQuery('.loadmoreButton').hide();
				}
			}
		});
	});
});