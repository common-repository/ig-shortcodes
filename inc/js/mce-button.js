(function () {
    tinymce.PluginManager.add('ig_shortcodes_mce_button', function( editor, url ) {
        editor.addButton( 'ig_shortcodes_mce_button',{
            text: 'IG Shortcodes',
            icon: false,
            type: 'menubutton',
            menu: [
                // ACCORDION
                {
                    text: 'Accordion',
                    onclick: function() {
                    editor.insertContent('[ig_accordion_content]\
                                          [ig_accordion heading="First Title"]First content[/ig_accordion]\
                                          [ig_accordion heading="Second Title"]Second content[/ig_accordion]\
                                          [/ig_accordion_content]');
                    },
                },
                // BADGES
                {
                    text: 'Badges',
                    menu: [
                    {
                        text: 'Alert',
                        onclick: function() {
                        editor.insertContent('[ig_badge style="alert"]Content[/ig_badge]');
                        },
                    },
                    {
                        text: 'Error',
                        onclick: function() {
                        editor.insertContent('[ig_badge style="error"]Content[/ig_badge]');
                        },
                    },
                    {
                        text: 'Notice',
                        onclick: function() {
                        editor.insertContent('[ig_badge style="notice"]Content[/ig_badge]');
                        },
                    },
                    {
                        text: 'Success',
                        onclick: function() {
                        editor.insertContent('[ig_badge style="success"]Content[/ig_badge]');
                        },
                    }
                        ]
                },
                // BUTTONS
                {
                    text: 'Button',
                    menu: [
                    //Clean
                        {                     
                        text: 'Clean',
                        menu: [
                            {
                                text: 'Alert',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="alert clean" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Error',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="error clean" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Notice',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="notice clean" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Success',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="success clean" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                        ]
                    },
                    //Flat
                    {                     
                        text: 'Flat',
                        menu: [
                            {
                                text: 'Alert',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="alert flat" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Error',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="error flat" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Notice',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="notice flat" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Success',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="success flat" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                        ]
                    },
                    //Pill
                    {                     
                        text: 'Pill',
                        menu: [
                            {
                                text: 'Alert',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="alert pill" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Error',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="error pill" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Notice',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="notice pill" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Success',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="success pill" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                        ]
                    },
                    //Puffy
                    {                     
                        text: 'Puffy',
                        menu: [
                            {
                                text: 'Alert',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="alert puffy" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Error',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="error puffy" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Notice',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="notice puffy" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                            {
                                text: 'Success',
                                onclick: function() {
                                    editor.insertContent('[ig_button style="success puffy" link="http://iograficathemes.com" target="_blank"]view more[/ig_button]');
                                },
                            },
                        ]
                    },
                    //end button
                    ]
                },
                // COLUMNS
                {
                    text: 'Columns',
                    menu: [
                    {
                        text: 'custom width',
                        onclick: function() {
                        editor.insertContent('[ig_columns]\
                                              [ig_column width="three"]Content[/ig_column]\
                                              [ig_column width="nine last"]Content[/ig_column]\
                                              [/ig_columns]');
                    },
                    },
                    {
                        text: '1/2-1/2',
                        onclick: function() {
                        editor.insertContent('[ig_columns]\
                                              [ig_column width="six"]Content[/ig_column]\
                                              [ig_column width="six last"]Content[/ig_column]\
                                              [/ig_columns]');
                    },
                    },
                    {
                        text: '1/3-1/3-1/3',
                        onclick: function() {
                        editor.insertContent('[ig_columns]\
                                              [ig_column width="four"]Content[/ig_column]\
                                              [ig_column width="four"]Content[/ig_column]\
                                              [ig_column width="four last"]Content[/ig_column]\
                                              [/ig_columns]');
                    },
                    },
                    {
                        text: '1/4-1/4-1/4-1/4',
                        onclick: function() {
                        editor.insertContent('[ig_columns]\
                                             [ig_column width="three"]Content[/ig_column]\
                                             [ig_column width="three"]Content[/ig_column]\
                                             [ig_column width="three"]Content[/ig_column]\
                                             [ig_column width="three last"]Content[/ig_column]\
                                             [/ig_columns]');
                    },
                    }
                        ]
                },
                // CLEARFIX
                {
                    text: 'Clearfix',
                    onclick: function() {
                    editor.insertContent('[ig_clearfix]');
                    },
                },
                // DIVIDER
                {
                    text: 'Divider',
                    menu: [
                    {
                        text: 'Normal',
                        onclick: function() {
                        editor.insertContent('[ig_divider style="normal"]');
                    },
                    },
                    {
                        text: 'Dotted',
                        onclick: function() {
                        editor.insertContent('[ig_divider style="dotted"]');
                    },
                    },
                    {
                        text: 'Dashed',
                        onclick: function() {
                        editor.insertContent('[ig_divider style="dashed"]');
                    },
                    },
                    {
                        text: 'Fade',
                        onclick: function() {
                        editor.insertContent('[ig_divider style="fade"]');
                    },
                    }
                           ]
                },
                // GOOGLE MAPS
                {
                    text: 'Google Maps',
                    onclick: function() {
                        editor.insertContent('[ig_map height ="400px" width="900px" coordinates="44.812284,-91.497729" address="Eau Claire St"]');
                    },
                },
                // NOTICE BOX
                {
                    text: 'Notice Box',
                    menu: [
                    {
                        text: 'Alert',
                        onclick: function() {
                        editor.insertContent('[ig_notice style="alert"]Content[/ig_notice]');
                    },
                    },
                    {
                        text: 'Error',
                        onclick: function() {
                        editor.insertContent('[ig_notice style="error"]Content[/ig_notice]');
                    },
                    },
                    {
                        text: 'Notice',
                        onclick: function() {
                        editor.insertContent('[ig_notice style="notice"]Content[/ig_notice]');
                    },
                    },
                    {
                        text: 'Success',
                        onclick: function() {
                        editor.insertContent('[ig_notice style="success"]Content[/ig_notice]');
                    },
                    }
                           ]
                },
                // PROGRESS BAR
                {
                    text: 'Progress Bar',
                    menu: [
                    {
                        text: 'Alert',
                        onclick: function() {
                        editor.insertContent('[ig_progress_bar width="80" style="alert"]');
                    },
                    },
                    {
                        text: 'Error',
                        onclick: function() {
                        editor.insertContent('[ig_progress_bar width="80" style="error"]');
                    },
                    },
                    {
                        text: 'Notice',
                        onclick: function() {
                        editor.insertContent('[ig_progress_bar width="80" style="notice"]');
                    },
                    },
                    {
                        text: 'Success',
                        onclick: function() {
                        editor.insertContent('[ig_progress_bar width="80" style="success"]');
                    },
                    }
                           ]
                },
                // TAB
                {
                    text: 'Tabs',
                    onclick: function() {
                    editor.insertContent('[ig_tabs][ig_tab label="First Title"]First content[/ig_tab][ig_tab label="Second Title"]Second content[/ig_tab][/ig_tabs]');
                    },
                },
                // TOGGLE
                {
                    text: 'Toggle',
                    onclick: function() {
                    editor.insertContent('[ig_toggle label="Title"]Content[/ig_toggle]');
                    },
                },
                // LOGIN
                {
                    text: '★ Login Module',
                    onclick: function() {
                        window.open('http://iograficathemes.com/downloads/ig-shortcodes-premium/','_blank');
                    },
                },
                // PRIVATE CONTENT
                {
                    text: '★ Private Content',
                    onclick: function() {
                        window.open('http://iograficathemes.com/downloads/ig-shortcodes-premium/','_blank');
                    },
                },
                // Modal Popup
                {
                    text: '★ Modal Popup',
                    onclick: function() {
                        window.open('http://iograficathemes.com/downloads/ig-shortcodes-premium/','_blank');
                    },
                },
                // Tooltip
                {
                    text: '★ Tooltip',
                    onclick: function() {
                        window.open('http://iograficathemes.com/downloads/ig-shortcodes-premium/','_blank');
                    },
                },
            //end main menu
            ]
        });
    });
})();
