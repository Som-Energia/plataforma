$(function() {
query = $.parseQuery(this.href);
guid = query.guid;
box = query.box;
if (guid !== undefined && box !== undefined && (box === 'reply' || box === 'edit')) {
    $(window).scrollTop($('#' + box + '-topicreply-' + guid).offset().top - 100);
}
$(".elgg-form-discussion-reply-save").submit(function (e) {
     $(".thread-reply-button").attr("disabled", true).addClass("elgg-state-disabled");
     return true;
     });
});