     //menu responsive//
const icono = document.getElementsByClassName('icono')[0]
const menu_links = document.getElementsByClassName('menu_links')[0]

icono.addEventListener('click',function(){
  menu_links.classList.toggle('active')
})

//menu responsive//

   //slide//    
var myIndex = 0;
         carousel();
         
         function carousel() {
           var i;
           var x = document.getElementsByClassName("mySlides");
           for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
           }
           myIndex++;
           if (myIndex > x.length) {myIndex = 1}    
           x[myIndex-1].style.display = "block";  
           setTimeout(carousel, 5000);    
         }

//slide// 

//CATALOGO// 

(function($) {
  "use strict";

  $.fn.numericFlexboxSorting = function(options) {
    const settings = $.extend({
      elToSort: ".boxes li"
    }, options);

    const $select = this;
    const ascOrder = (a, b) => a - b;
    const descOrder = (a, b) => b - a;

    $select.on("change", () => {
      const selectedOption = $select.find("option:selected").attr("data-sort");
      sortColumns(settings.elToSort, selectedOption);
    });

    function sortColumns(el, opt) {
      const attr = "data-" + opt.split(":")[0];
      const sortMethod = (opt.includes("asc")) ? ascOrder : descOrder;
      const sign = (opt.includes("asc")) ? "" : "-";

      const sortArray = $(el).map((i, el) => $(el).attr(attr)).sort(sortMethod);

      for (let i = 0; i < sortArray.length; i++) {
        $(el).filter(`[${attr}="${sortArray[i]}"]`).css("order", sign + sortArray[i]);
      }
    }

    return $select;
  };
})(jQuery);

// call the plugin
$(".b-select").numericFlexboxSorting();

$(".btn").click(function(){
		var attr = $(this).attr("data-li");

		$(".btn").removeClass("active");
		$(this).addClass("active");

		$(".item").hide();

		if(attr == "laptops"){
			$("." + attr).show();
		}
		else if(attr == "Telefonos"){
			$("." + attr).show();
		}
		else if(attr == "Desktop"){
			$("." + attr).show();
		}
		else if(attr == "Placa_Base"){
			$("." + attr).show();
		}
		else if(attr == "Targetas_graficas"){
			$("." + attr).show();
		}
		else if(attr == "Monitores"){
			$("." + attr).show();
		}
    else if(attr == "Fuente_de_alimentacion"){
			$("." + attr).show();
		}
    else if(attr == "red"){
			$("." + attr).show();
		}
		else{
			$(".item").show();
		}
	});

//render
         (function ($) {
           "use strict";
         
           $.fn.numericFlexboxSorting = function (options) {
             const settings = $.extend({
               elToSort: ".boxes li" },
             options);
         
             const $select = this;
             const ascOrder = (a, b) => a - b;
             const descOrder = (a, b) => b - a;
         
             $select.on("change", () => {
               const selectedOption = $select.find("option:selected").attr("data-sort");
               sortColumns(settings.elToSort, selectedOption);
             });
         
             function sortColumns(el, opt) {
               const attr = "data-" + opt.split(":")[0];
               const sortMethod = opt.includes("asc") ? ascOrder : descOrder;
               const sign = opt.includes("asc") ? "" : "-";
         
               const sortArray = $(el).map((i, el) => $(el).attr(attr)).sort(sortMethod);
         
               for (let i = 0; i < sortArray.length; i++) {if (window.CP.shouldStopExecution(0)) break;
                 $(el).filter(`[${attr}="${sortArray[i]}"]`).css("order", sign + sortArray[i]);
               }window.CP.exitedLoop(0);
             }
         
             return $select;
           };
         })(jQuery);
         
         // call the plugin
         $(".b-select").numericFlexboxSorting();
         //# sourceURL=pen.js
             


//CATALOGO// 




