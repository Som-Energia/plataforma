module.exports = function (grunt) {

    grunt.initConfig({
        csslint: {
            somenergiatheme: {
                src: ['mod/somenergia-theme/views/default/walled_garden.css',
                    'mod/somenergia-theme/views/default/elements/*.css'],
                nonnull: true
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-csslint');

    grunt.registerTask('default', ['csslint']);
};
