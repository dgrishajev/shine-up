module.exports = {
    
  build: {
    css:  './wp-content/themes/shine-up/',
    font: './wp-content/themes/shine-up/assets/build/font/',
    img:  './wp-content/themes/shine-up/assets/build/img/',
    js:   './wp-content/themes/shine-up/assets/build/js/'
  },

  src: {
    php: ['./wp-content/themes/shine-up/*.php'],
    style: {
      path:         './wp-content/themes/shine-up/assets/src/style/style.scss',
      includePaths: ['./wp-content/themes/shine-up/assets/src/style/*.scss']
    },
    font: './wp-content/themes/shine-up/assets/src/font/*.*',
    img:  './wp-content/themes/shine-up/assets/src/img/*.{png,jpg,svg}',
    js:   './wp-content/themes/shine-up/assets/src/js/app.js'
  },

  watch: {
    php:   './wp-content/themes/shine-up/*.php',
    style: './wp-content/themes/shine-up/assets/src/style/*.scss',
    font:  './wp-content/themes/shine-up/assets/src/font/*.*',
    img:   './wp-content/themes/shine-up/assets/src/img/*.{png,jpg,svg}',
    js:    './wp-content/themes/shine-up/assets/src/js/**/*.js'
  }

};