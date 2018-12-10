const sass = require("node-sass");

module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    connect:
    {
        server:
        {
            options:
            {
                hostname: 'localhost',
                port: 7777,
                base: 'public',
                livereload: true
            }
        }
    },


    sass: {
      options: {
        implementation: sass
      },
      dist: {
        files: {
          "lib/css/style.css": "lib/scss/index.scss"
        }
      }
    },

    uglify: {
      js: {
        files: {
          "public/js/script.min.js": ["lib/js/script.js"]
        }
      }
    },
    cssmin: {
      target: {
        files: {
          "public/css/styles.min.css": ["lib/css/style.css"]
        }
      }
    },
    htmlmin: {
      // Task
      dist: {
        // Target
        options: {
          // Target options
          removeComments: true,
          collapseWhitespace: true
        },
        files: {
          // Dictionary of files
          "public/index.html": "index.html", // 'destination': 'source'
          "public/gracias.html": "gracias.html" // 'destination': 'source'
        }
      }
    },

    watch: {
      options: {
        livereload: true
    },
      html: {
        files: ["index.html","gracias.html"],
        tasks: ["htmlmin"],
      },
      sassWatch: {
        files: ["lib/scss/*.scss"],
        tasks: ["sass"],
      },
      scripts: {
        files: "lib/js/*.js",
        tasks: ["uglify:js"],
      },
      styles: {
        files: "lib/css/*.css",
        tasks: ["cssmin"],
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks("grunt-sass");
  grunt.loadNpmTasks("grunt-contrib-uglify");
  grunt.loadNpmTasks("grunt-contrib-cssmin");
  grunt.loadNpmTasks("grunt-contrib-htmlmin");
  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.registerTask("default", ["watch"]);
};
