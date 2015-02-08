module.exports = function(grunt) {


    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        watch: {

            sass: {
                files: ['scss/**/*.{scss,sass}'],
                tasks: ['sass:dist'],
            },

            js : {
                files: ['js/**/*.js'],
                tasks: ['jshint'],
                options: {
                    livereload: true,
                    livereloadOnError: false,
                    spawn: false
                }
            },

            other: {
                files: ['**/*.php', 'css/*.css', '!css/style.css'],
                options: {
                    livereload: true,
                    livereloadOnError: false,
                    spawn: false
                }
            }
        },

        jshint: {
            all: ['js/**/*.js', '!js/foundation/**/*.js', '!js/vendor/**/*.js']
        },

        sass: {
            dist: {
                files: {
                    'css/style.css': 'scss/style.scss'
                }
            },
            options: {
                compass: true,
                //quiet: true,
                style: 'nested',
                require: [ 'susy', 'font-awesome-sass']
            }
        }

    });

    grunt.registerTask('default', ['watch']);
};