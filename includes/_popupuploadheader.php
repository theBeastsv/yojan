 

<div class="modal fade" id="update-header-photo">
<style>
.element {
  display: inline-flex;
  align-items: center;
}
i.fa-camera {
  margin: 10px;
  cursor: pointer;
  font-size: 30px;
}
i:hover {
  opacity: 0.6;
}
input {
  display: none;
}
</style>
	<div class="modal-dialog ui-block window-popup update-header-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
		</a>
		<div id="masteXrlogger">
		<div class="ui-block-title">
			<h6 class="title">Update Header Photo</h6>
		</div>
 
		<span id="masterypload">
        <span class="upload-photo-item"  id="uploadArea">
			 <i class="fa fa-camera"></i><span class="name">No file selected</span>
 <input id="files" name="files" type="file" multiple="true">

			<div><a name="uxpload" id="uxpload" class="btn btn-primary" style="color:#FFF">Upload Photo</a></div>
			<span>Browse your computer.</span> <div id="uploadMessage" class="uploadMessage"></div>
        <div id="attachedFiles" class="attachedFiles"></div>
		</span>
        </span>

		<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

			<svg class="olymp-photos-icon"><use xlink:href="icons/icons.svg#olymp-photos-icon"></use></svg>

			<h6>Choose from My Photos</h6>
			<span>Choose from your uploaded photos</span>
		</a>
	</div>
    <script>$("i").click(function () {
  $("input[type='file']").trigger('click');
});

$('input[type="file"]').on('change', function() {
  var val = $(this).val();
  $(this).siblings('span').text(val);
})
 $(function() {

         var obj = {
            idFile: 'files',
            scriptHandler: 'forms/uplaodpic.php', 
            uploadArea: 'uploadArea',
            uploadMessage: 'uploadMessage',
            maxQuantityFiles: 6,
            maxFileSize: 1024 * 1014,
            codeSubject: 1,
            typeFiles: 'img',
            additionalData: {
                codeExample: '1'
            },
            successUpload: function(json) { $('.modal-backdrop').hide();
 			$('#update-header-photo').load('cpages/popupconent.php', { language: "php" ,"crnrandom" :  Math.random()*99999} ).html('');
 			$('#albyumId').val(json);  
			$('#update-header-photo').hide();
			$('#midimili').load('cpages/mediacon.php', { language: "php","jso":json ,"crnrandom" :  Math.random()*99999} ).html('');;
            }
        };

        var smartUpload = new SmartUpload(obj);

        var showImages = function() {
            $('#attachedFiles').load(obj.scriptHandler + '?codeSubject=' + obj.codeSubject);
        };

        $('#files').change(function() {
            smartUpload.uploadFiles();
        }).click(function() {
            $('#' + obj.uploadMessage).empty();
        });

        showImages();

        $('#attachedFiles').on('click', '.deleteImg', function() {
            if (this.id > 0) {
                $.ajax({
                    'type': 'POST',
                    'cache': false,
                    'url': 'delete.php',
                    'data': {'idFile': this.id},
                    'success': function(json) {
                            try {
                                var jsonData = JSON.parse(json);

                                if (jsonData.result === true) {
                                    showImages();
                                }

                            } catch (err) {
                                console.log(err + 'Response from server is incorrect!');
                            }
                    }
                });
            }
        });
    });

</script>
</div>
    </div>
</div>


<!-- ... end Window-popup Update Header Photo -->