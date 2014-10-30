
// For all WP versions
function rescue_on_click(id) {
    // Selected content
    var mceSelected = tinyMCE.activeEditor.selection.getContent();

    // Add highlighted content inside the shortcode when possible
    if ( mceSelected ) {
        var rescueDummyContent = mceSelected;
    } else {
        var rescueDummyContent = 'Sample Content';
    }


    // Boxes
    if(id == "blueBox") {
        tinyMCE.activeEditor.selection.setContent('[rescue_box color="blue" text_align="left" width="100%" float="none"]<br />' + rescueDummyContent + '<br />[/rescue_box]');
    }
    if(id == "grayBox") {
        tinyMCE.activeEditor.selection.setContent('[rescue_box color="gray" text_align="left" width="100%" float="none"]<br />' + rescueDummyContent + '<br />[/rescue_box]');
    }
    if(id == "greenBox") {
        tinyMCE.activeEditor.selection.setContent('[rescue_box color="green" text_align="left" width="100%" float="none"]<br />' + rescueDummyContent + '<br />[/rescue_box]');
    }
    if(id == "redBox") {
        tinyMCE.activeEditor.selection.setContent('[rescue_box color="red" text_align="left" width="100%" float="none"]<br />' + rescueDummyContent + '<br />[/rescue_box]');
    }
    if(id == "yellowBox") {
        tinyMCE.activeEditor.selection.setContent('[rescue_box color="yellow" text_align="left" width="100%" float="none"]<br />' + rescueDummyContent + '<br />[/rescue_box]');
    }


    // Button
    if(id == "button") {
        tinyMCE.activeEditor.selection.setContent('[rescue_button color="blue" url="http://rescuethemes.com" title="Visit Site" target="blank" class="right" border_radius=""]' + rescueDummyContent + '[/rescue_button]');
    }


    // Clear Floats
    if(id == "clear") {
        tinyMCE.activeEditor.selection.setContent('[rescue_clear_floats]');
    }


    // Icon
    if(id == "icon") {
        tinyMCE.activeEditor.selection.setContent('[icon type="cloud" size="3x" pull="left" color="#cccccc"]');
    }


    // Columns
    if(id == "half") {
        tinyMCE.activeEditor.selection.setContent('[rescue_column size="one-half" position="first"]<br />' + rescueDummyContent + '<br />[/rescue_column]');
    }
    if(id == "third") {
        tinyMCE.activeEditor.selection.setContent('[rescue_column size="one-third" position="first"]' + rescueDummyContent + '[/rescue_column]');
    }
    if(id == "fourth") {
        tinyMCE.activeEditor.selection.setContent('[rescue_column size="one-fourth" position="first"]' + rescueDummyContent + '[/rescue_column]');
    }
    if(id == "fifth") {
        tinyMCE.activeEditor.selection.setContent('[rescue_column size="one-fifth" position="first"]' + rescueDummyContent + '[/rescue_column]');
    }
    if(id == "sixth") {
        tinyMCE.activeEditor.selection.setContent('[rescue_column size="one-sixth" position="first"]' + rescueDummyContent + '[/rescue_column]');
    }


    if(id == "twothird") {
        tinyMCE.activeEditor.selection.setContent('[rescue_column size="two-third" position="first"]' + rescueDummyContent + '[/rescue_column]');
    }
    if(id == "threefourth") {
        tinyMCE.activeEditor.selection.setContent('[rescue_column size="three-fourth" position="first"]' + rescueDummyContent + '[/rescue_column]');
    }
    if(id == "twofifth") {
        tinyMCE.activeEditor.selection.setContent('[rescue_column size="two-fifth" position="first"]' + rescueDummyContent + '[/rescue_column]');
    }
    if(id == "threefifth") {
        tinyMCE.activeEditor.selection.setContent('[rescue_column size="three-fifth" position="first"]' + rescueDummyContent + '[/rescue_column]');
    }


    // Google Map
    if(id == "googlemap") {
        tinyMCE.activeEditor.selection.setContent('[rescue_googlemap title="Rescue Themes Offices" location="5046 S Greenwood Ave, Chicago, IL 60615" zoom="14" height=250]');
    }


    // Highlight
    if(id == "blueHighlight") {
        tinyMCE.activeEditor.selection.setContent('[rescue_highlight color="blue"]' + rescueDummyContent + '[/rescue_highlight]');
    }
    if(id == "grayHighlight") {
        tinyMCE.activeEditor.selection.setContent('[rescue_highlight color="gray"]' + rescueDummyContent + '[/rescue_highlight]');
    }
    if(id == "greenHighlight") {
        tinyMCE.activeEditor.selection.setContent('[rescue_highlight color="green"]' + rescueDummyContent + '[/rescue_highlight]');
    }
    if(id == "redHighlight") {
        tinyMCE.activeEditor.selection.setContent('[rescue_highlight color="red"]' + rescueDummyContent + '[/rescue_highlight]');
    }
    if(id == "yellowHighlight") {
        tinyMCE.activeEditor.selection.setContent('[rescue_highlight color="yellow"]' + rescueDummyContent + '[/rescue_highlight]');
    }


    //Spacing
    if(id == "spacing") {
        tinyMCE.activeEditor.selection.setContent('[rescue_spacing size="40px"]');
    }


    //General Tabs
    if(id == "tabs") {
        tinyMCE.activeEditor.selection.setContent('[rescue_tabgroup]<br />[rescue_tab title="First Tab"]<br />First tab content<br />[/rescue_tab]<br />[rescue_tab title="Second Tab"]<br />Second Tab Content.<br />[/rescue_tab]<br />[/rescue_tabgroup]');
    }

    //Donation Tabs
    if(id == "donationtabs") {
        tinyMCE.activeEditor.selection.setContent('[rescue_donation_tabgroup group_title="Help Us Reach our Goal"]<br />[rescue_donation_tab title="Total"]<br />Example Fundraiser<br />[rescue_progressbar title="Example" percentage="75" color="#f1c40f"]<br />Example Fundraiser<br />[rescue_progressbar title="Example" percentage="45" color="#1abc9c"]<br />[/rescue_donation_tab]<br />[rescue_donation_tab title="Goal"]<br />Second tab content. You can enter any text that you would like here and it will be displayed within the second tab content.<br />[rescue_clear_floats]<br />[rescue_button color="black" url="http://rescuethemes.com" title="Visit Site" target="blank" class="right" border_radius=""]Sample Content[/rescue_button]<br />[/rescue_donation_tab]<br />[rescue_donation_tab title="Donate"]<br />Third tab content. You can enter any text that you would like here and it will be displayed within the third tab content<br />[rescue_button color="blue" url="http://rescuethemes.com" title="Visit Site" target="blank" class="right" border_radius=""]Sample Content[/rescue_button]<br />[/rescue_donation_tab]<br />[/rescue_donation_tabgroup]');
    }


    //Toggle
    if(id == "toggle") {
        tinyMCE.activeEditor.selection.setContent('[rescue_toggle title="This Is Your Toggle Title"]' + rescueDummyContent + '[/rescue_toggle]');
    }

    // Animations
    if(id == "slideInDown") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="slideInDown" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "slideInLeft") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="slideInLeft" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "slideInRight") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="slideInRight" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "fadeIn") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="fadeIn" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "fadeInLeft") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="fadeInLeft" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "fadeInRight") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="fadeInRight" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "fadeInUp") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="fadeInUp" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "fadeInDown") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="fadeInDown" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "bounceIn") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="bounceIn" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "bounceInLeft") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="bounceInLeft" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "bounceInRight") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="bounceInRight" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "bounceInUp") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="bounceInUp" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }
    if(id == "bounceInDown") {
        tinyMCE.activeEditor.selection.setContent('[rescue_animate type="bounceInDown" duration="2s" delay="0s" iteration="1"]' + rescueDummyContent + '[/rescue_animate]');
    }

    return false;
}

function rescue_render_item(parent_item, title, id) {
    var item = {
        'text': title,
        onclick: function(){ rescue_on_click(id); }
    };
    parent_item.push(item);
}

function rescue_get_menu() {
    var menu = [
        {
            text: 'Rescue Shortcodes',
            classes: 'menu-item-title',
            disabled: true,
        },
        { text: 'Columns' },
        { text: 'Elements' },
        { text: 'Boxes' },
        { text: 'Highlights' },
        { text: 'Animations' }
    ];

    // Columns
    var c = menu[1].menu = [];
    rescue_render_item( c, "One Half", "half" );
    rescue_render_item( c, "One Third", "third" );
    rescue_render_item( c, "One Fourth", "fourth" );
    rescue_render_item( c, "One Fifth", "fifth" );
    rescue_render_item( c, "One Sixth", "sixth" )
    // -- Separator --
    rescue_render_item( c, "Two Thirds", "twothird" );
    rescue_render_item( c, "Three Fourths", "threefourth" );
    rescue_render_item( c, "Two Fifths", "twofifth" );
    rescue_render_item( c, "Three Fifths", "threefifth" );

    // Elements
    var c = menu[2].menu = [];
    rescue_render_item( c, "Button", "button" );
    rescue_render_item( c, "Google Map", "googlemap" );
    rescue_render_item( c, "Tabs", "tabs" );
    rescue_render_item( c, "Donation Tabs", "donationtabs" );
    rescue_render_item( c, "Toggle", "toggle" );
    rescue_render_item( c, "Spacing", "spacing" );
    rescue_render_item( c, "Clear Floats", "clear" );
    rescue_render_item( c, "Icon", "icon" );

    // Boxes
    var c = menu[3].menu = [];
    rescue_render_item( c, "Blue", "blueBox" );
    rescue_render_item( c, "Gray", "grayBox" );
    rescue_render_item( c, "Green", "greenBox" );
    rescue_render_item( c, "Red", "redBox" );
    rescue_render_item( c, "Yellow", "yellowBox" );

    // Highlights
    var c = menu[4].menu = [];
    rescue_render_item( c, "Blue", "blueHighlight" );
    rescue_render_item( c, "Gray", "grayHighlight" );
    rescue_render_item( c, "Green", "greenHighlight" );
    rescue_render_item( c, "Red", "redHighlight" );
    rescue_render_item( c, "Yellow", "yellowHighlight" );

    // Animations
    var c = menu[5].menu = [];
    rescue_render_item( c, "slideInDown", "slideInDown" );
    rescue_render_item( c, "slideInLeft", "slideInLeft" );
    rescue_render_item( c, "slideInRight", "slideInRight" );
    rescue_render_item( c, "fadeIn", "fadeIn" );
    rescue_render_item( c, "fadeInLeft", "fadeInLeft" );
    rescue_render_item( c, "fadeInRight", "fadeInRight" );
    rescue_render_item( c, "fadeInUp", "fadeInUp" );
    rescue_render_item( c, "fadeInDown", "fadeInDown" );
    rescue_render_item( c, "bounceIn", "bounceIn" );
    rescue_render_item( c, "bounceInLeft", "bounceInLeft" );
    rescue_render_item( c, "bounceInRight", "bounceInRight" );
    rescue_render_item( c, "bounceInUp", "bounceInUp" );
    rescue_render_item( c, "bounceInDown", "bounceInDown" );


    return menu;
}

tinymce.PluginManager.add('rescue_shortcodes', function( editor, url ) {
    if (typeof tinymce.plugins == 'undefined') tinymce.plugins = {};
    if (typeof tinymce.plugins.rescueShortcodeMce == 'undefined')
    tinymce.plugins.rescueShortcodeMce = {};
    tinymce.plugins.rescueShortcodeMce.theurl = url;
    menu = rescue_get_menu();

    editor.addButton( 'rescue_shortcodes_button', {
        type: 'splitbutton',
        style: 'background: url(' + tinymce.plugins.rescueShortcodeMce.theurl + '/images/shortcodes.png' + ') no-repeat 3px 2px;',
        //image: tinymce.plugins.rescueShortcodeMce.theurl + '/images/shortcodes.png',
        'menu': menu
    });
});
