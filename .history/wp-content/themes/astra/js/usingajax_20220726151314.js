jQuery(document).ready(function(){
    jQuery('.save_meta').click(function(e){
        e.preventDefault();
        var title = jQuery(this).data('title');
        var content = jQuery(this).data('content');
        var meta_val = jQuery(this).parent().find('.meta-value').val();
        //alert(item_id); alert(meta_key); alert(meta_val);
        meta_val = meta_val.trim();
        meta_val = meta_val.replace(/^\s+|\s+$/gm,'');
        if(meta_val && meta_val.length != 0){
            jQuery("#spinner").show();
            jQuery.ajax({
                url:crop_image_script_object.ajaxurl,
                method:'POST',
                data:{action: "save_meta", 'type': meta_key, 'value': meta_val, 'item_id': item_id},
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
        }
    });
});