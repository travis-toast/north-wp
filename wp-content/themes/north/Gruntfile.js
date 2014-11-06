module.exports = function(grunt) {
	grunt.initConfig({

		//Turn global.scss to global.css
		sass: {                              
			dist: {                           
				options: {                       
					style: 'expanded'
				},
				files: {
					'_assets/styles/css/global.css': '_assets/styles/scss/global.scss'       
				}
			}
		},

		//Validate global.css


		//Minify global.css
		cssmin: {
			minify: {
				expand: true,
				cwd: '_assets/styles/css/',
				src: ['*.css', '!*.min.css'],
				dest: '_assets/styles/css/',
				ext: '.min.css'
			}
		},

		//Validate plugins.js
		jshint: {
			js: {
				src: ['_assets/scripts/plugins/**.js'],
			},
			options: {
				curly: true,
				asi: true,
				jquery: true,
			    "-W099": true, // allowed mixed tabs and spaces
			}
		},


		//Merge all the JS files in plugins folder together
		concat: {
			js: {
				options: {
					//separator: ';'
				},
					src: ['_assets/scripts/plugins/**.js'],
					dest: '_assets/scripts/plugins.js'
				}
		},




		//Minify plugins.js to make plugins.min.js
		uglify: {
			options: {
				mangle: false
			},
			js: {
				files: {
					'_assets/scripts/plugins.min.js': ['_assets/scripts/plugins.js']
				}
			}
		},
		
		//Run all of those functions whenever the files change!
		watch: {
			watch_css: {
				files: [
					'_assets/styles/scss/**.scss'
				],
				tasks: [
					'sass:dist',
					'cssmin:minify',
					//'css_validation'
				],
			},
			watch_js: {
				files: [
					'_assets/scripts/plugins/**.js',
				],
				tasks: [
					'concat:js',
/* 					'jshint:js', */
					'uglify:js',
				],
			}
		}		
	});

	grunt.registerTask('default', [ 'watch' ]);
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-jshint');	

};