/** This js file handles layout display
 *
 * @package Responsive_FSE
 * */

(function ($) {

    var comments_block     = $('.comments-block');
    var comments_form      = $('.wp-block-post-comments-form');
    var post_comments      = $('.wp-block-post-comments');
    var post_comments_area = $('.wp-block-post-comments #comments');
    var post_excerpt       = $('.wp-block-post-excerpt__excerpt');

    /* if comments is disabled hide comment form and comment list */

    if (comments_form.is(':empty')) {
        comments_form.hide();
    }
    if (post_comments_area.is(':empty')) {
        post_comments.hide();
    }
    if (comments_form.is(':empty') && post_comments_area.children().length === 0) {
        comments_block.hide();
    }

    /* if excerpt is empty hide read more button */

    post_excerpt.each(function (index, element) {
        if (element.innerText.length === 0) {
            element.nextSibling.style.display = 'none';
        }
    });

    /* elementor container block column style */

    var block_columns = $('.wp-block-columns');
    var elementor = block_columns.find('.elementor');
    var elementorParentColumns = elementor.closest('.wp-block-columns');

    if (elementor) {
        let elementorContainerStyle = {
            'max-width': '100%',
            'margin': '0 auto',
        }
        elementorParentColumns.css(elementorContainerStyle);
    }

    /* Hide empty pagination block */

    var paginationBlock = $('.wp-block-query-pagination');

    if (paginationBlock.children().length === 0) {
        paginationBlock.css('display', 'none');
    }

})(jQuery);