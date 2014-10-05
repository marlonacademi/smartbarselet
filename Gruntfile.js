module.exports = function(grunt) {

  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "app/templates/default/css/css.css": "app/templates/default/less/style.less"
        }
      }
    },

    uglify: {
      my_target: {
        files: {
          'app/templates/default/js/js.js': [
          'app/templates/default/scripts/jquery-1.10.2/jquery-1.10.2.js',
          'app/templates/default/scripts/adminflare/adminflare.js', 
          'app/templates/default/scripts/adminflare/character-limit-counter.js',
          'app/templates/default/scripts/adminflare/demo-init.js',
          'app/templates/default/scripts/adminflare/demo.js',
          'app/templates/default/scripts/adminflare/left-panel.js',
          'app/templates/default/scripts/adminflare/simple-plot.js',
          'app/templates/default/scripts/adminflare/widgets/maps.js',
          'app/templates/default/scripts/adminflare/widgets/stars-rating.js',
          'app/templates/default/scripts/adminflare/widgets/stream.js',
          'app/templates/default/scripts/adminflare/widgets/tasks.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-affix.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-alert.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-button.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-carousel.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-collapse.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-dropdown.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-modal.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-popover.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-scrollspy.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-tab.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-tooltip.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-transition.js',
          'app/templates/default/scripts/bootstrap-2.3.2/bootstrap-typeahead.js',
          'app/templates/default/scripts/bootstrap-editable-1.4.5/bootstrap-editable-address.js',
          'app/templates/default/scripts/bootstrap-editable-1.4.5/bootstrap-editable.js',
          'app/templates/default/scripts/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5.js',
          'app/templates/default/scripts/bootstrap-wysihtml5-0.0.2/wysihtml5-0.3.0.js',
          'app/templates/default/scripts/flot-0.8.1/excanvas.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.colorhelpers.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.canvas.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.categories.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.categories.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.crosshair.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.errorbars.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.fillbetween.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.image.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.navigate.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.pie.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.resize.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.selection.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.stack.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.symbol.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.threshold.min.js',
          'app/templates/default/scripts/flot-0.8.1/jquery.flot.time.min.js',
          'app/templates/default/scripts/fuelux-2.3.0/checkbox.js',
          'app/templates/default/scripts/fuelux-2.3.0/combobox.js',
          'app/templates/default/scripts/fuelux-2.3.0/datagrid-example.js',
          'app/templates/default/scripts/fuelux-2.3.0/datagrid.js',
          'app/templates/default/scripts/fuelux-2.3.0/datasource-example.js',
          'app/templates/default/scripts/fuelux-2.3.0/pillbox.js',
          'app/templates/default/scripts/fuelux-2.3.0/radio.js',
          'app/templates/default/scripts/fuelux-2.3.0/search.js',
          'app/templates/default/scripts/fuelux-2.3.0/select.js',
          'app/templates/default/scripts/fuelux-2.3.0/spinner.js',
          'app/templates/default/scripts/fuelux-2.3.0/tree.js',
          'app/templates/default/scripts/fuelux-2.3.0/util.js',
          'app/templates/default/scripts/fuelux-2.3.0/wizard.js',
          'app/templates/default/scripts/bootbox-3.3.0.js',
          'app/templates/default/scripts/bootstrap-colorpicker.js',
          'app/templates/default/scripts/bootstrap-datepicker.js',
          'app/templates/default/scripts/bootstrap-markdown-1.1.2.js',
          'app/templates/default/scripts/bootstrap-notify-1.0.0.js',
          'app/templates/default/scripts/bootstrap-notify-1.0.0.js',
          'app/templates/default/scripts/bootstrap-timepicker.js',
          'app/templates/default/scripts/bootstrap-x-clickover-1.0.0.js',
          'app/templates/default/scripts/bootstrap-timepicker.js',
          'app/templates/default/scripts/iscroll-lite-4.2.0.js',
          'app/templates/default/scripts/jqBootstrapValidation-1.3.7.js',
          'app/templates/default/scripts/jquery.autosize-1.17.1.js',
          'app/templates/default/scripts/jquery.easy-pie-chart-1.2.1.js',
          'app/templates/default/scripts/jquery.maskedinput-1.3.1.js',
          'app/templates/default/scripts/jquery.sparkline-2.1.2.js',
          'app/templates/default/scripts/jquery.toggles-2.0.4.js',
          'app/templates/default/scripts/markdown.js',
          'app/templates/default/scripts/modernizr-2.6.2.js',
          'app/templates/default/scripts/prettify.min.js'
          ]
        }
      }
    }
    
  });
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.registerTask('default', ['less','uglify']);
};