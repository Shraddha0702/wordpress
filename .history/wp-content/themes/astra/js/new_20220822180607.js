jQuery(document).ready(function($) {

jQuery(document).on("click", '#quick-add-button', function() {


  const options = {
      method: 'GET',
      headers: {
          Accept: 'application/json',
          Authorization: 'Bearer da5a5940-60b0-3507-360b-8d4a1bedd8a1'
      }
  };

  fetch('https://sandbox.dev.clover.com/v3/merchants/VE1TKEVCT7761/categories', options)
      .then(response => response.json())
      .then(response => add_update_item_category(response))
      .catch(err => console.error(err));


});



/**
* 
* Clove API Category Sync Button Click Function Called
*/

function add_update_item_category(data) {
    //alert(ajaxurl_manual);

  jQuery.ajax({
      type: "POST",
      url: ajaxurl_manual,
      data: {
          data: data,
          action: "AddUpdateItemCategory", // Passed api response to this function on WP
      },
      beforeSend: function(msg) {
          $("#clover_api_categories_sync_btn").text("Clover API Categories Sync- working").prop('disabled', true).css({ "opacity": ".4", "cursor": "default" });
      },
      success: function(result) {
          $("#clover_api_categories_sync_btn").text("Clover API Categories Sync").prop('disabled', false).css({ "opacity": "1", "cursor": "pointer" });
      },
  });
}


});



