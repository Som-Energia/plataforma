$(function(){
	$('.elgg-menu .elgg-menu-item-reply a').click(function(){
		guid = $.parseQuery(this.href).guid;
		$('#edit-topicreply-' + guid).hide();
		$('#reply-topicreply-' + guid).slideToggle('slow');
		
		return false;
	});
	$('.elgg-menu .elgg-menu-item-edit a').click(function(){
		guid = $.parseQuery(this.href).guid;
		$('#reply-topicreply-' + guid).hide();
		$('#edit-topicreply-' + guid).slideToggle('slow');
		return false;
	});
});
