module.exports = function (grunt) {

    grunt.initConfig({
        csslint: {
            options: {
                    "order-alphabetical": false,
                    "qualified-headings": false,
                    "ids": false,
                    "zero-units": 2,
                    "adjoining-classes": 2,
                    "unique-headings": false,
                    "box-sizing": false,
                    "floats": false,
                    "important": false,
                    "box-model": false,
                    "font-sizes": false,
                    "outline-none": false,
                    "fallback-colors": false,
                    "empty-rules": 2,
                    "selector-newline": 2,
                    "overqualified-elements": false,
                    "universal-selector": 2,
                    "duplicate-properties": 2,
                    "gradients": false,
                    "compatible-vendor-prefixes": 2,
                    "text-indent": false,
                    "known-properties": false
                },
            somenergiatheme: {
                src: ['mod/somenergia-theme/views/default/walled_garden.css',
                    'mod/somenergia-theme/views/default/elements/*.css',
                    'mod/somenergia-theme/views/default/somenergia-theme/somenergia-theme.css',
                    'mod/somenergia-theme/views/default/maintenance_style.css'],
                nonnull: true
            }
        },
        casperjs: {
            options: {
                async: {
                    parallel: false
                }
            },
            files: ['.test/*.js']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-csslint');
    grunt.loadNpmTasks('grunt-casperjs');

    grunt.registerTask('default', ['csslint']);
    grunt.registerTask('integration', ['casperjs']);
    
};
