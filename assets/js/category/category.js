(function($){

    $('[data-parent]').click(function(event) {
        var id = $(this).data('parent');
        var category_list = $(this);

        CS.post('ajax_form_edit_category', {id: id}).done(function(d) {
            $("#category_form").html(d);
            
		    $(".ajax_form").ajaxForm({
		        dataType: 'json',
		        success: function(data) {
		            if (typeof data == 'object') {
		                console.log(data);
		                alert(data.message);
		                category_list.html(data.category_name);
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

    $("#root_category").change(function(event) {

    	var id = $(this).find('option:selected').val();

    	if (id == '0') {
			$("#sub_category_select").html('');
    	}else{
	    	CS.post('ajax_sub_category_select', {id: id}).done(function(d) {
	            $("#sub_category_select").html(d);
	        });
    	};	

    });
        
})(jQuery, CS);
