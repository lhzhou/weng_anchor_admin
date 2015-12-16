(function($){

    $('[data-parent]').click(function(event) {
        var id = $(this).data('parent');
        CS.post('ajax_form_edit_category', {id: id}).done(function(d) {
            $("#category_form").html(d);
            
		    $(".ajax_form").ajaxForm({
		        dataType: 'json',
		        success: function(data) {
		            if (typeof data == 'object') {
		                console.log(data);
		                
		                alert(data.message);
		                if (data.method == 'redirect') {
		                	window.location.href=data.url; 
		                };
		            } else {
		                alert('error');
		            }
		        },
		        error: function(data){
		            console.log("error_message->");
		            console.log(data);
		        }
		    });

        });

    });
        
})(jQuery, CS);
