module.exports = function (grunt) {

    grunt.initConfig({
        less: {
            compile: {
                options: {
                    paths: ['mod/somenergia-theme/less']
                },
                files: {
                    'mod/somenergia-theme/views/default/walled_garden.css': 'mod/somenergia-theme/less/walled_garden.less',
                    'mod/somenergia-theme/views/default/maintenance_style.css': 'mod/somenergia-theme/less/maintenance_style.less',
                    'mod/somenergia-theme/views/default/elements/buttons.css': 'mod/somenergia-theme/less/buttons.less',
                    'mod/somenergia-theme/views/default/elements/components.css': 'mod/somenergia-theme/less/components.less',
                    'mod/somenergia-theme/views/default/elements/forms.css': 'mod/somenergia-theme/less/forms.less',
                    'mod/somenergia-theme/views/default/elements/layout.css': 'mod/somenergia-theme/less/layout.less',
                    'mod/somenergia-theme/views/default/elements/misc.css': 'mod/somenergia-theme/less/misc.less',
                    'mod/somenergia-theme/views/default/elements/modules.css': 'mod/somenergia-theme/less/modules.less',
                    'mod/somenergia-theme/views/default/elements/navigation.css': 'mod/somenergia-theme/less/navigation.less',
                    'mod/somenergia-theme/views/default/elements/typography.css': 'mod/somenergia-theme/less/typography.less',
                    'mod/somenergia-theme/views/default/somenergia-theme/somenergia-theme.css': 'mod/somenergia-theme/less/theme.less'
                }
            }
        },
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

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-csslint');
    grunt.loadNpmTasks('grunt-casperjs');

    grunt.registerTask('build', ['less']);
    grunt.registerTask('default', ['csslint']);
    grunt.registerTask('integration', ['casperjs']);

};
