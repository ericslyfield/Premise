(function(jQuery){
    jQuery(document).ready(function(){
        jQuery(document).on('click', '.ajax-filter-alpha > a', function(e){
            e.preventDefault();

            var filter = jQuery(this).data('filter')

            jQuery.ajax({
                url: wp_ajax.ajax_url,
                data: {
                    action: 'sort',
                    category: filter 
                },
                type: 'post',
                success: function(result){

                    // Show
                    jQuery('.target-alpha').addClass('show');
                    
                    // Hide
                    jQuery('.target-chron').removeClass('show').addClass('hide');
                    jQuery('.target-cat').removeClass('show').addClass('hide');

                },
                error: function(result){
                    console.warn(result);
                }
            });
        });

        jQuery(document).on('click', '.ajax-filter-chron > a', function(e){
            e.preventDefault();

            var filter = jQuery(this).data('filter')

            jQuery.ajax({
                url: wp_ajax.ajax_url,
                data: {
                    action: 'sort',
                    category: filter 
                },
                type: 'post',
                success: function(result){

                    // Show
                    jQuery('.target-chron').addClass('show');

                    // Hide
                    jQuery('.target-alpha').removeClass('show').addClass('hide');
                    jQuery('.target-cat').removeClass('show').addClass('hide');


                },
                error: function(result){
                    console.warn(result);
                }
            });
        });

        jQuery(document).on('click', '.ajax-filter-cat > a', function(e){
            e.preventDefault();

            var filter = jQuery(this).data('filter')

            jQuery.ajax({
                url: wp_ajax.ajax_url,
                data: {
                    action: 'sort',
                    category: filter 
                },
                type: 'post',
                success: function(result){


                    // Show
                    jQuery('.target-cat').addClass('show');

                    // Hide
                    jQuery('.target-alpha').removeClass('show').addClass('hide');
                    jQuery('.target-chron').removeClass('show').addClass('hide');


                },
                error: function(result){
                    console.warn(result);
                }
            });
        });

    });
})(jQuery);