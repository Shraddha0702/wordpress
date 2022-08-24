jQuery(document).ready(function(){
    jQuery('.quick-add-button').click(function(e){
        e.preventDefault();
        var title = jQuery(this).data('title');
        var content = jQuery(this).data('content');
        var content = jQuery(this).parent().find('.meta-value').val();
      
            jQuery("#spinner").show();
            jQuery.ajax({
                url:crop_image_script_object.ajaxurl,
                method:'POST',
                data:{action: "quick-add-button", 'type': meta_key, 'value': content, 'item_id': item_id},
                success:function(data)
                {
                    jQuery("#spinner").hide();
                    if(data == 'success'){
                        alert('Meta data saved successfully!');
                        location.reload();
                    }else{
                        alert("Some error occured while saving the record. Please try again later!");
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    jQuery("#spinner").hide();
                    alert("Some error occured while saving the record. Please try again later!");
                }
            },"json");
        
    });
});