/**
 * Banks Animal Hospital
 */

module.exports = function (grunt) {
    // Project Config
    grunt.initConfig({

        // Package File
        pkg: grunt.file.readJSON('package.json'),

        /* ======================================================================== */
        /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
        /* ======================================================================== */

        /**
         *  Concatenate Js Files
         * */
        concat: {
            options: {
                separator: '\n\n'
            },
            dist: {
                files: {

                    // Main Application File
                    'dist/js/applications.min.js': [
                        "src/js/wow.min.js",
                        "src/js/modal.js",
                        "src/js/applications.js"
                    ]
                }
            }
        },

        /* ======================================================================== */
        /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
        /* ======================================================================== */

        /**
         * Uglify JS script
         * */
        uglify: {
            build: {
                files: {

                    // Main Application File
                    'dist/js/applications.min.js': [
                        "src/js/wow.min.js",
                        "src/js/modal.js",
                        "src/js/applications.js"
                    ]
                }
            }
        },

        /* ======================================================================== */
        /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
        /* ======================================================================== */

        /**
         * sass task
         * */
        sass: {
            options: {
                sourceMap: true,
                outputStyle: "expanded"
            },
            dist: {
                files: {
                    'dist/css/style.min.css': 'src/scss/style.min.scss'
                }
            }
        },

        /* ======================================================================== */
        /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
        /* ======================================================================== */

        /**
         *  Watch files for changes
         * */
        watch: {
            scripts: {
                files: ['src/**/*.js'],
                tasks: ['concat']
            },
            styles: {
                files: ['src/scss/**/*.scss'],
                tasks: ['sass']
            }
        },

        /**
         * Apply vendor prefixes
         * */
        postcss: {
            options: {
                processors: [
                    require('autoprefixer')({browsers: 'last 2 versions'}) // add vendor prefixes
                ]
            },
            dist: {
                files: {
                    "dist/css/style.min.css": "dist/css/style.min.css"
                }
            }
        },

        /**
         * combine media queries
         * */
        combine_mq: {
            options: {
                beautify: false
            },
            dist: {
                files: {
                    "dist/css/style.min.css": "dist/css/style.min.css"
                }
            }
        }
    });

    /* ======================================================================== */
    /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
    /* ======================================================================== */

    // Load Tasks
    grunt.loadNpmTasks('grunt-contrib-concat');

    // Uglify
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // Sass
    grunt.loadNpmTasks('grunt-sass');

    // Watch changes
    grunt.loadNpmTasks('grunt-contrib-watch');

    // postcss task
    grunt.loadNpmTasks('grunt-postcss');

    // combine media queries
    grunt.loadNpmTasks('grunt-combine-mq');

    // Register Tasks
    grunt.registerTask('default', ['sass', 'concat', 'watch']);

    // production mode
    grunt.registerTask('prod', ['sass', 'postcss', 'combine_mq', 'concat', 'uglify']);
};
