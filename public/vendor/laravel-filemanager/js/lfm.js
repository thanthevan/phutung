(function( $ ){

  $.fn.filemanager = function(type, options) {
    type = type || 'images';

    this.on('click', function(e) {
      e.preventDefault();
      var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
      localStorage.setItem('target_input', $(this).data('input'));
      localStorage.setItem('target_preview', $(this).data('preview'));
      var x = screen.width/2 - 700/2;
      var y = screen.height/2 - 450/2;
      window.open(route_prefix + '?type=' + type, 'FileManager', 'location=no, directories=no, status=no, menubar=no,width=900,height=600,left='+x+',top='+y);
      window.SetUrl = function (url, file_path) {
          //set the value of the desired input to image url
          var target_input = $('#' + localStorage.getItem('target_input'));
          target_input.val(file_path).trigger('change');

          //set or change the preview image src
          var target_preview = $('#' + localStorage.getItem('target_preview'));
          target_preview.attr('src', url).trigger('change');
      };
      return false;
    });
  }



  $.fn.filemanagerV2 = function(type, options) {
    type = type || 'images';

    this.on('click', function(e) {
      e.preventDefault();
      var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
      localStorage.setItem('target_input', $(this).data('input'));
      localStorage.setItem('target_wapper', $(this).data('wapper'));
      localStorage.setItem('target_preview', $(this).data('preview'));
      //window.location.href =route_prefix + '?type=' + type;
      var x = screen.width/2 - 700/2;
      var y = screen.height/2 - 450/2;
     window.open(route_prefix + '?type=' + type, 'FileManager', 'location=no, directories=no, status=no, menubar=no,width=900,height=600,left='+x+',top='+y);
      window.SetUrl = function (url, file_path) {
          //set the value of the desired input to image url
          var target_input = $('#' + localStorage.getItem('target_input'));
          target_input.val(file_path).trigger('change');

          //set or change the preview image src
          var target_preview = $('.' + localStorage.getItem('target_preview'));
         // target_preview.attr('src', url).trigger('change');
          var target_wapper = $('#' + localStorage.getItem('target_wapper'));
          var index = target_wapper.children().length;
          var dom = '<div class="holder-photo-'+index+'" style="position:relative; display:inline"><input class="holder-photo-'+index+'" type="hidden" value="'+file_path+'" name="more_'+index+'">'+
          '<img class="holder-photo-'+index+'" src="'+url+'"style="margin-right:5px;max-height:100px;border: 2px dotted #ecf0f5">'+
          '<span class="holder-photo-'+index+' fas fa-times" '+
          'style="font-size:20px;width:15px;background:#ecf0f5;cursor:pointer;left:0;color:red;position:absolute"></span></div>';

          $('body').on('click','.holder-photo-'+index,function() {
            $('.holder-photo-'+index).remove().trigger('change');
          })

          target_wapper.append(dom).trigger('change');
      };
      return false;
    });
  }

})(jQuery);
