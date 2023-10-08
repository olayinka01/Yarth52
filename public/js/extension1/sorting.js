;
(function($) {
    "use strict";
    /* SORTING */
    jQuery(function () {
        var $container = jQuery('.sorting_block');

        $container.isotope({
            itemSelector: '.element'
        });

        var $optionSets = jQuery('.optionset'),
            $optionLinks = $optionSets.find('a');

        $optionLinks.on("click", function () {
            var $this = jQuery(this);
            // don't proceed if already selected
            if ($this.parent('li').hasClass('selected')) {
                return false;
            }
            var $optionSet = $this.parents('.optionset');
            $optionSet.find('.selected').removeClass('selected');
            $optionSet.find('.fltr_before').removeClass('fltr_before');
            $optionSet.find('.fltr_after').removeClass('fltr_after');
            $this.parent('li').addClass('selected');
            $this.parent('li').next('li').addClass('fltr_after');
            $this.parent('li').prev('li').addClass('fltr_before');

            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[key] = value;
            if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
                // changes in layout modes need extra logic
                changeLayoutMode($this, options)
            } else {
                // otherwise, apply new options
                $container.isotope(options);
                var sortingtimer = setTimeout(function () {
                    jQuery('.sorting_block').isotope('reLayout');
                    clearTimeout(sortingtimer);
                }, 500);
            }
            return false;
        });

        $container.find('img').load(function () {
            $container.isotope('reLayout');
        });
    });

    jQuery(window).load(function () {
        jQuery('.sorting_block').isotope('reLayout');
        var sortingtimer = setTimeout(function () {
            jQuery('.sorting_block').isotope('reLayout');
            clearTimeout(sortingtimer);
        }, 500);
    });
    jQuery(window).resize(function () {
        jQuery('.sorting_block').isotope('reLayout');
    });

    jQuery.fn.portfolio_addon = function (addon_options) {
        //Set Variables
        var addon_el = jQuery(this),
            addon_base = this,
            img_count = addon_options.items.length,
            img_per_load = addon_options.load_count,
            $newEls = '',
            loaded_object = '',
            $container = jQuery('.image-grid');

        jQuery('.load_more_works').on('click', function () {
            $newEls = '';
            loaded_object = '';
            var loaded_images = $container.find('.added').size();
            var now_load = '';
            if ((img_count - loaded_images) > img_per_load) {
                now_load = img_per_load;
            } else {
                now_load = img_count - loaded_images;
            }

            if ((loaded_images + now_load) == img_count) {
                jQuery(this).fadeOut();
                jQuery(this).parent().addClass('min_height_10');
            }

            var i_start = '';
            if (loaded_images < 1) {
                i_start = 1;
            } else {
                i_start = loaded_images + 1;
            }

            if (now_load > 0) {
                // 2-4 Columns Portfolio
                for (var i = i_start - 1; i < i_start + now_load - 1; i++) {
                    loaded_object = loaded_object + '<div class="' + addon_options.items[i].columnclass + ' ' + addon_options.items[i].sortcategory + ' element added"><div class="portfolio_item"><div class="portf_img"><a href="' + addon_options.items[i].url + '"><img alt="" src="' + addon_options.items[i].src + '" /></a></div><div class="portf_descr"><h6 class="portf_title"><a href="' + addon_options.items[i].url + '">' + addon_options.items[i].title + '</a></h6><div class="listing_meta"><span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">' + addon_options.items[i].itemcategory + '</a></span></div></div></div></div>';
                }

                $newEls = jQuery(loaded_object);
                $container.isotope('insert', $newEls, function () {
                    $container.isotope('reLayout');
                });
            }

            jQuery('.sorting_block.isotope').addClass('overflow_hidden');

            var overflowtimer = setTimeout(function () {
                jQuery('.sorting_block.isotope').removeClass('overflow_hidden');
                clearTimeout(overflowtimer);
            }, 2000);
            return false;
        });
    }
})(jQuery);