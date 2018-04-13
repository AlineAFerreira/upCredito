module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        /* Copia os arquivos de dev para o diretório 'dist' */
        copy: {
            public: {
                expand: true,
                /* Ignora os arquivos da pasta sass e todos os arquivos com extensão .scss, etc' */
                src: ['**', '!assets/sass/**', '!**/*.scss', '!**/node_modules/**', '!**/notes/**', '!**Gruntfile.js**'],
                cwd: '.',
                dest: 'dist'
            }
        },

        /* Apaga a pasta 'dist' */
        clean: {
            dist: {
                src: 'dist/'
            }
        },

        /* Compila o Sass para seu destino no CSS */
        compass: {
          	dist: {
          		options: {
          			sassDir: 'assets/sass',
    				cssDir: 'assets/css',
    				outputStyle: 'compressed'
          		}
          	}
        },

        /* Observa alterações no SASS e chama a task compass compile */
    	watch: {
    		css: {
    			files: '**/*.scss',
    			tasks: ['compass']
    		}
    	},

        /* Instala todos os pacotes de produção */
        auto_install: {
            subdir: {
                options: {
                    cwd: 'dist/',
                    stderr: false,
                    failOnError: false,
                    npm: '--production'
                }
            }
        },

        /* minifica todos os arquivos .js que não tenham .min no nome */
        uglify: {
            options: {
                compress: {
                    drop_console: true
                }
            },            
            build: {
                files: [{
                    expand: true,
                    cwd: 'assets/js/',
                    src: ['*.js', '!*.min.js'],
                    dest: 'dist/assets/js/'
                    // ext: '.min.js' --> para criar novo arquivo com extensão .min
                }]
            }
        },

        htmlmin: {                                     
            dist: {                                     
                options: {      
                    removeEmptyAttributes: true,                           
                    removeComments: false,
                    collapseWhitespace: true
                },
                files: {                                   
                    'dist/index.html': 'index.html'
                }
            }
        }

    });

    grunt.registerTask('build', ['clean', 'copy', 'auto_install','uglify', 'htmlmin']);
    grunt.registerTask('default', ['watch']);

    grunt.registerTask('install', function(){
        console.log('\n\nTudo pronto, divirta-se!!!')
    });

    grunt.loadNpmTasks('grunt-contrib-copy'); 
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-auto-install');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
};