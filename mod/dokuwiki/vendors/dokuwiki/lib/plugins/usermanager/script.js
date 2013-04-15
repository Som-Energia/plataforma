/**
 * Add JavaScript confirmation to the User Delete button
 */
function usrmgr_delconfirm(){
    if(DOKUid('usrmgr__del')){
        addEvent( DOKUid('usrmgr__del'),'click',function(){ return confirm(reallyDel); } );
    }
};
addInitEvent(usrmgr_delconfirm);
