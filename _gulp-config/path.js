module.exports = {
    
  build: {
    css:  './wp-content/themes/shine-up/assets/build/style/',
    font: './wp-content/themes/shine-up/assets/build/font/',
    js:   './wp-content/themes/shine-up/assets/build/js/'
  },

  src: {
    php: ['./wp-content/themes/shine-up/assets/src/*.php'],
    style: {
      path:         './wp-content/themes/shine-up/assets/src/style/main.scss',
      includePaths: ['./wp-content/themes/shine-up/assets/src/style/**/*']
    },
    font: './wp-content/themes/shine-up/assets/src/font/*.*',
    js:   './wp-content/themes/shine-up/assets/src/js/app.js'
  },

  watch: {
    php:   './wp-content/themes/shine-up/assets/src/*.php',
    style: './wp-content/themes/shine-up/assets/src/style/**/*.scss',
    font:  './wp-content/themes/shine-up/assets/src/font/*.*',
    js:    './wp-content/themes/shine-up/assets/src/js/**/*.js'
  }

};