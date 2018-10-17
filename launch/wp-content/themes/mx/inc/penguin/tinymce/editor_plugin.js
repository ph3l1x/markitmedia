
(function() {
    tinymce.create('tinymce.plugins.penguinshortcodes', {
        init: function(ed, url) {

            ed.addCommand('mcepenguinshortcodes', function() {
                ed.windowManager.open({
// call content via admin-ajax, no need to know the full plugin path
                    file: ajaxurl + '?action=penguinshortcodes_tinymce',
                    width: 420 + ed.getLang('penguinshortcodes.delta_width', 0),
                    height: 500 + ed.getLang('penguinshortcodes.delta_height', 0),
                    inline: 1
                }, {
                    plugin_url: url // Plugin absolute URL
                });
            });

// Register example button
            ed.addButton('penguinshortcodes', {
                title: 'penguinshortcodes',
                cmd: 'mcepenguinshortcodes',
                image: url + '/penguinshortcodes.png'
            });

// Add a node change handler, selects the button in the UI when a image is selected
            ed.onNodeChange.add(function(ed, cm, n) {
                cm.setActive('penguinshortcodes', n.nodeName == 'IMG');
            });
        },
        getInfo: function() {
            return {
                longname: 'penguinshortcodes',
                author: 'ThemeFocus',
                authorurl: 'http://themefocus.co',
                infourl: 'http://penguin.themefocus.co',
                version: "1.0"
            };
        }
    });

// Register plugin
    tinymce.PluginManager.add('penguinshortcodes', tinymce.plugins.penguinshortcodes);
})();

