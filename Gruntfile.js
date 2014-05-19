module.exports = function(grunt) {
	'use strict';

	grunt.initConfig({

		jshint: {
			all: [
				'Gruntfile.js',
				'src/main.js'
			]
		},
		uglify: {
			all: {
				options: {
					mangle: true,
					beautify: false
				},
				files: {
					'dist/jquery.js': ['bower_components/jquery/dist/jquery.js'],
					'dist/main.js': [
						'bower_components/bootstrap/dist/js/bootstrap.js',
						'src/lib/inlineDisqussions.js',
						'src/main.js'
					]
				}
			}
		},
		less: {
			all: {
				options: {
					cleancss: true
				},
				files: {
					'dist/main.css': [
						'src/lib/inlineDisqussions.css',
						'src/main.less'
					]
				}
			}
		},
		watch: {
			scripts: {
				files: 'src/*.js',
				tasks: ['jshint','uglify']
			},
			styles: {
				files: 'src/*.less',
				tasks: ['less']
			}
		}

	});

	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default',['jshint','uglify','less']);
};