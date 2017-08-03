module.exports = function (grunt) {

    grunt.initConfig({
        csslint: {
            somenergiatheme: {
                src: ['mod/somenergia-theme/views/default/walled_garden.css',
                    'mod/somenergia-theme/views/default/elements/*.css'],
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
