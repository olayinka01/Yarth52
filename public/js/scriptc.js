/*
	Alluringcrps javascript file written by Aberefa James Babatunde. 
	             All rights reserved, 2015.
*/
var crp = 
{
	//this method will display a native loading dialog
	dialog:{
		show:function(){
				var galss_layer = $("<div></div>").attr('id','load-glass');
				var close_icon = $("<aside title='close'></aside>").addClass('close-icon');
				var progress_gif = $("<div><br><br><br><br><br><br><br>Please wait</div>").addClass('progress-gif');
				var glass_article = $("<div></div>").addClass('load-article');
				//adds an event listener to the close icon
				close_icon.click(crp.dialog.dispose);
				glass_article.append(close_icon,progress_gif);
				galss_layer.append(glass_article);
				glass_article.fadeIn("fast");
				$('body').prepend(galss_layer);
		},
		//this method will close the native loading dialog
		dispose:function(){
			$('#load-glass').remove();
	       }
		,
		//what happens when a load operation is complete
		callback:function(e)
		{
			//show the close icon by default
			$("#load-glass").find('.close-icon').css('display','block');
			//remove the loading gif 
			$("#load-glass").find('.progress-gif').remove();
			if(e!=null)
			e();
		}
		},
	show:function(node,field){
		  //crp elements and coupling
		  var ctn = $("<div></div>").addClass("ctn");
		  var image_box = $("<div></div>").addClass("imageBox");
		  var thumb_box = $("<div></div>").addClass("thumbBox");
		  var spinner =  $("<div></div>").addClass("spinner");
		  var action = $("<div></div>").addClass("action");
		  var file = $("<input/>").addClass("left").attr({'type':"file"});
		  var btn_plus = $("<button title='zoom in'>+</button>").addClass("button");
		  var btn_minus = $("<button title='zoom out'>-</button>").addClass("button");
		  var btn_crop = $("<button title='use picture'>use</button>").addClass("button");
		  var clr = $("<p></p>").addClass("remove-space clr");
		  image_box.append(thumb_box,spinner);
		  action.append(file,btn_crop,btn_plus,btn_minus);
		  ctn.append(image_box,action,clr);
		  //end ofcrp elements
		  //setup the imagecrp
		 var ops =
        {
            thumbBox: thumb_box,
            spinner: spinner,
            imgSrc: 'avatar.png'
        }
        var crop;
        $(file).on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                ops.imgSrc = e.target.result;
               crop = $('.imageBox').cropbox(ops);
            }
            reader.readAsDataURL(this.files[0]);
            this.files = [];
        })
        $(btn_crop).on('click', function(){
		try{
            var img = crop.getDataURL();
			
            $(node).parent().find('img').attr('src',img);
			$("#"+field).val(img);
			crp.dialog.dispose();
		}catch(e){}
			
        });
        $(btn_plus).on('click', function(){
           crop.zoomIn();
        });
        $(btn_minus).on('click', function(){
           crop.zoomOut();
        });
		//end ofcrp setup
		 crp.dialog.show();
			crp.dialog.callback(function(){
				 var content_node = $("#load-glass").find('.load-article');
				  content_node.append(ctn);
			  });
		}
	
}