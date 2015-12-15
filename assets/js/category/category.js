(function($){

    $('[data-parent]').click(function(event) {
        var id = $(this).data('parent');
        CS.post('ajax_form_edit_category', {id: id}).done(function(d) {
            $("#category_form").html(d);
        });
    
    });
        


})(jQuery, CS);
