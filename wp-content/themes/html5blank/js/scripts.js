(function ($, root, undefined) {
	
	$(function () {
		
		var tlang = 'en';
		$("#mask").css({"height":$(document).height()});
		$.ajax({
			type: 'POST',
			url: $("#langurl").val(),
			data:{fn: "getLang"},
			dataType:"json",
			success: function(response){
                tlang = response.data.d;
				d = response.data.result;
				for(i=0;i<d.length;i++){
					//Por ids
					if ($("#"+d[i].key).attr("placeholder"))
						$("#"+d[i].key).attr({"placeholder":d[i].value});
					else{
						$("#"+d[i].key).val(d[i].value);
						$("."+d[i].key).val(d[i].value);
					}
                    if ($("#"+d[i].key+" a").length > 0)
						$("#"+d[i].key+" > a").text(d[i].value);
					else{
						$("#"+d[i].key).text(d[i].value);
				        //Por clases
				        if ($("."+d[i].key).attr("placeholder"))
				        	$("."+d[i].key).attr({"placeholder":d[i].value});
				        else{
				        $("."+d[i].key).text(d[i].value);
					        $("."+d[i].key+":first-child").val(d[i].value);
					        $("."+d[i].key+":first-child").text(d[i].value);
					    }
                    }
				}
                if (tlang != "en" && tlang != "de")
                    $("#en").addClass("Iactive");
                else
                    $("#"+tlang).addClass("Iactive");
         	}
        });
		
	});
	
})(jQuery, this);

function selectIdio(obj, idio) {
    $("#mask").css({"display":"block"});
    $.ajax({
        type: 'POST',
		url: $("#langurl").val(),
		data:{fn: "changeLang", lang: idio},
		dataType:"json",
        success: function (response) {
			d = response.result;
            for(i=0;i<d.length;i++){
				//Por ids
				$("#"+d[i].key).val(d[i].value);
                if ($("#"+d[i].key+" a").length > 0)
					$("#"+d[i].key+" > a").text(d[i].value);
				else{
					$("#"+d[i].key).text(d[i].value);
			        //Por clases
			        $("."+d[i].key+":first-child").val(d[i].value);
			        $("."+d[i].key+":first-child").text(d[i].value);
                }
			}
			for(j=0;j<4;j++){
				$(".flags img").removeClass("Iactive");
			}
			$(obj).addClass("Iactive");
            $("#mask").css({"display":"none"});
        }
    });
}
