// (function ($) {
    
//     // Init Wow
//     wow = new WOW( {
//         animateClass: 'animated',
//         offset:       100
//     });
//     wow.init();
    
//     // Navigation scrolls
//     $('.navbar-nav li a').bind('click', function(event) {
//         $('.navbar-nav li').removeClass('active');
//         $(this).closest('li').addClass('active');
//         var $anchor = $(this);
//         var nav = $($anchor.attr('href'));
//         if (nav.length) {
//         $('html, body').stop().animate({				
//             scrollTop: $($anchor.attr('href')).offset().top				
//         }, 1500, 'easeInOutExpo');
        
//         event.preventDefault();
//         }
//     });
    
//     // About section scroll
//     $(".overlay-detail a").on('click', function(event) {
//         event.preventDefault();
//         var hash = this.hash;
//         $('html, body').animate({
//             scrollTop: $(hash).offset().top
//         }, 900, function(){
//             window.location.hash = hash;
//         });
//     });
    
//     /*jQuery to collapse the navbar on scroll
//     $(window).scroll(function() {
//         if ($(".navbar-default").offset().top > 50) {
//             $(".navbar-fixed-top").addClass("top-nav-collapse");
//         } else {
//             $(".navbar-fixed-top").removeClass("top-nav-collapse");
//         }
//     });*/
    
//     // Testimonials Slider
//     $('.bxslider').bxSlider({
//       adaptiveHeight: true,
//       mode: 'fade'
//     });
    
// })(jQuery);

//Home Load Page
$(document).ready(function () {

    $('#Home').ready(function () {
        $("#LoadPage").load("PresentationLayer/Inicio.php");
    });
    
    $('#Home').click(function () {
        $("#LoadPage").load("PresentationLayer/Inicio.php");
    });

    $('#Profile').click(function () {
        $("#LoadPage").load("PresentationLayer/Configuracion.php");
    });

    $('#Files').click(function () {
        $("#LoadPage").load("PresentationLayer/Archivos.php");
    });

    $('#search').click(function () {
      $("#LoadPage").load("PresentationLayer/Archivos.php");
    });

    $('#Questions').click(function () {
        $("#LoadPage").load("PresentationLayer/Preguntas.php");
    });

    $('#upload').click(function () {
        $("#LoadPage").load("PresentationLayer/SubirArchivo.php");
    });

    $('#login').click(function () {
        $("#LoadPage").load("PresentationLayer/Login.php");
    });

    $('#seting').click(function () {
      $("#LoadPage").load("PresentationLayer/Logros.php");
    });

    $('#Books').click(function () {
      $("#LoadPage").load("PresentationLayer/Libros.php");
    });
});


/* Mensaje de Alerta*/
function alerta()
    {
    var mensaje;
    var opcion = confirm("¿Estas seguro que desea eliminar?");
    if (opcion == true) {
        mensaje = "Has clickado OK";
	} else {
	    mensaje = "Has clickado Cancelar";
	}
	document.getElementById("ejemplo").innerHTML = mensaje;
}

/* Activar Botones*/
$('.nav').on('click', 'li', function(){
    $('.nav li.open').removeClass('open');
    $(this).addClass('open');
});



/* Auto size Input
$(document).ready(function () {
    $('textarea#mensaje').autosize();
});*/

/**************************************
 * ************************************
 * Activar Botones
 * ************************************
 **************************************/
$('.nav').on('click', '.dropdown', function(){
    $(this).closest('.dropdown').toggleClass('open');
});

/*
const contenedor = document.querySelector('#contenedor');

document.querySelector('#boton-menu').addEventListener('click', () => {
	contenedor.classList.toggle('open');
});

const comprobarAncho = () => {
	if(window.innerWidth <= 768){
		contenedor.classList.remove('open');
	} else {
		contenedor.classList.add('open');
	}
}

comprobarAncho();

window.addEventListener('resize', () => {
	comprobarAncho();
});*/

/********************************
 * ******************************
 * SIDEBAR
 * ******************************
 *******************************/

$(document).ready(function(){
    
    $('.glyphicon-tasks').click(function() {

      if ($('#sidebar > ul').is(":visible") === true) {
        $('#main-content').css({
          'margin-left': '0px'
        });
        $('#sidebar').css({
          'margin-left': '-210px'
        });
        $('#sidebar > ul').hide();
        $("#container").addClass("sidebar-closed");
      } else {
        $('#main-content').css({
          'margin-left': '210px'
        });
        $('#sidebar > ul').show();
        $('#sidebar').css({
          'margin-left': '0'
        });
        $("#container").removeClass("sidebar-closed");
      }
    });
  
    // custom scrollbar
    // $("#sidebar").niceScroll({
    //   styler: "fb",
    //   cursorcolor: "#4ECDC4",
    //   cursorwidth: '3',
    //   cursorborderradius: '10px',
    //   background: '#404040',
    //   spacebarenabled: false,
    //   cursorborder: ''
    // });
});

/********************************
 * ******************************
 * Archivo Subir Documentos
 * ******************************
 *******************************/
function ValidaExten(){
  var input_file_now = document.getElementById('input-file-now');
  var ArchivoRuta = input_file_now.value;
  var ExtPermitidas = /(.pdf|.PNG)$/i;

  if(!ExtPermitidas.exec(ArchivoRuta)){
    alert('Asegurate de seleccionar un archivo pdf!');
  }
  else{
    if(input_file_now.files && input_file_now.files[0]){
      var Preview = new FileReader();
      Preview.onload = (function (e)
      {
        alert('Estoy En el Visor!');
        document.getElementById('visorArchivo').innerHTML=
        '<embed> src="'+e.target.result+'" type="application/pdf" width="100%" height="600px" />';
      });
      Preview.readAsDataURL(ArchivoRuta.files[0]);
    }
  }
}

/********************************
 * ******************************
 * Table advance
 * ******************************
 *******************************/
/* Set the defaults for DataTables initialisation */
$.extend( true, $.fn.dataTable.defaults, {
	"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
	"sPaginationType": "bootstrap",
	"oLanguage": {
		"sLengthMenu": "_MENU_ records per page"
	}
} );


/* Default class modification */
$.extend( $.fn.dataTableExt.oStdClasses, {
	"sWrapper": "dataTables_wrapper form-inline"
} );


/* API method to get paging information */
$.fn.dataTableExt.oApi.fnPagingInfo = function ( oSettings )
{
	return {
		"iStart":         oSettings._iDisplayStart,
		"iEnd":           oSettings.fnDisplayEnd(),
		"iLength":        oSettings._iDisplayLength,
		"iTotal":         oSettings.fnRecordsTotal(),
		"iFilteredTotal": oSettings.fnRecordsDisplay(),
		"iPage":          Math.ceil( oSettings._iDisplayStart / oSettings._iDisplayLength ),
		"iTotalPages":    Math.ceil( oSettings.fnRecordsDisplay() / oSettings._iDisplayLength )
	};
};

/************************************
 * 		Caroucel
 ******************************/
// $(document).ready(function () {
//     var itemsMainDiv = ('.MultiCarousel');
//     var itemsDiv = ('.MultiCarousel-inner');
//     var itemWidth = "";

//     $('.leftLst, .rightLst').click(function () {
//         var condition = $(this).hasClass("leftLst");
//         if (condition)
//             click(0, this);
//         else
//             click(1, this)
//     });
//     ResCarouselSize();

//     $(window).resize(function () {
//         ResCarouselSize();
//     });

//     //this function define the size of the items
//     function ResCarouselSize() {
//         var incno = 0;
//         var dataItems = ("data-items");
//         var itemClass = ('.item');
//         var id = 0;
//         var btnParentSb = '';
//         var itemsSplit = '';
//         var sampwidth = $(itemsMainDiv).width();
//         var bodyWidth = $('body').width();
//         $(itemsDiv).each(function () {
//             id = id + 1;
//             var itemNumbers = $(this).find(itemClass).length;
//             btnParentSb = $(this).parent().attr(dataItems);
//             itemsSplit = btnParentSb.split(',');
//             $(this).parent().attr("id", "MultiCarousel" + id);


//             if (bodyWidth >= 1200) {
//                 incno = itemsSplit[3];
//                 itemWidth = sampwidth / incno;
//             }
//             else if (bodyWidth >= 992) {
//                 incno = itemsSplit[2];
//                 itemWidth = sampwidth / incno;
//             }
//             else if (bodyWidth >= 768) {
//                 incno = itemsSplit[1];
//                 itemWidth = sampwidth / incno;
//             }
//             else {
//                 incno = itemsSplit[0];
//                 itemWidth = sampwidth / incno;
//             }
//             $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
//             $(this).find(itemClass).each(function () {
//                 $(this).outerWidth(itemWidth);
//             });

//             $(".leftLst").addClass("over");
//             $(".rightLst").removeClass("over");

//         });
//     }
//     //this function used to move the items
//     function ResCarousel(e, el, s) {
//         var leftBtn = ('.leftLst');
//         var rightBtn = ('.rightLst');
//         var translateXval = '';
//         var divStyle = $(el + ' ' + itemsDiv).css('transform');
//         var values = divStyle.match(/-?[\d\.]+/g);
//         var xds = Math.abs(values[4]);
//         if (e == 0) {
//             translateXval = parseInt(xds) - parseInt(itemWidth * s);
//             $(el + ' ' + rightBtn).removeClass("over");
//             if (translateXval <= itemWidth / 2) {
//                 translateXval = 0;
//                 $(el + ' ' + leftBtn).addClass("over");
//             }
//         }
//         else if (e == 1) {
//             var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
//             translateXval = parseInt(xds) + parseInt(itemWidth * s);
//             $(el + ' ' + leftBtn).removeClass("over");
//             if (translateXval >= itemsCondition - itemWidth / 2) {
//                 translateXval = itemsCondition;
//                 $(el + ' ' + rightBtn).addClass("over");
//             }
//         }
//         $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
//     }
//     //It is used to get some elements from btn
//     function click(ell, ee) {
//         var Parent = "#" + $(ee).parent().attr("id");
//         var slide = $(Parent).attr("data-slide");
//         ResCarousel(ell, Parent, slide);
//     }
// });


/* Bootstrap style pagination control */
$.extend( $.fn.dataTableExt.oPagination, {
	"bootstrap": {
		"fnInit": function( oSettings, nPaging, fnDraw ) {
			var oLang = oSettings.oLanguage.oPaginate;
			var fnClickHandler = function ( e ) {
				e.preventDefault();
				if ( oSettings.oApi._fnPageChange(oSettings, e.data.action) ) {
					fnDraw( oSettings );
				}
			};

			$(nPaging).addClass('pagination').append(
				'<ul>'+
					'<li class="prev disabled"><a href="#">&larr; '+oLang.sPrevious+'</a></li>'+
					'<li class="next disabled"><a href="#">'+oLang.sNext+' &rarr; </a></li>'+
				'</ul>'
			);
			var els = $('a', nPaging);
			$(els[0]).bind( 'click.DT', { action: "previous" }, fnClickHandler );
			$(els[1]).bind( 'click.DT', { action: "next" }, fnClickHandler );
		},

		"fnUpdate": function ( oSettings, fnDraw ) {
			var iListLength = 5;
			var oPaging = oSettings.oInstance.fnPagingInfo();
			var an = oSettings.aanFeatures.p;
			var i, j, sClass, iStart, iEnd, iHalf=Math.floor(iListLength/2);

			if ( oPaging.iTotalPages < iListLength) {
				iStart = 1;
				iEnd = oPaging.iTotalPages;
			}
			else if ( oPaging.iPage <= iHalf ) {
				iStart = 1;
				iEnd = iListLength;
			} else if ( oPaging.iPage >= (oPaging.iTotalPages-iHalf) ) {
				iStart = oPaging.iTotalPages - iListLength + 1;
				iEnd = oPaging.iTotalPages;
			} else {
				iStart = oPaging.iPage - iHalf + 1;
				iEnd = iStart + iListLength - 1;
			}

			for ( i=0, iLen=an.length ; i<iLen ; i++ ) {
				// Remove the middle elements
				$('li:gt(0)', an[i]).filter(':not(:last)').remove();

				// Add the new list items and their event handlers
				for ( j=iStart ; j<=iEnd ; j++ ) {
					sClass = (j==oPaging.iPage+1) ? 'class="active"' : '';
					$('<li '+sClass+'><a href="#">'+j+'</a></li>')
						.insertBefore( $('li:last', an[i])[0] )
						.bind('click', function (e) {
							e.preventDefault();
							oSettings._iDisplayStart = (parseInt($('a', this).text(),10)-1) * oPaging.iLength;
							fnDraw( oSettings );
						} );
				}

				// Add / remove disabled classes from the static elements
				if ( oPaging.iPage === 0 ) {
					$('li:first', an[i]).addClass('disabled');
				} else {
					$('li:first', an[i]).removeClass('disabled');
				}

				if ( oPaging.iPage === oPaging.iTotalPages-1 || oPaging.iTotalPages === 0 ) {
					$('li:last', an[i]).addClass('disabled');
				} else {
					$('li:last', an[i]).removeClass('disabled');
				}
			}
		}
	}
} );


/*
 * TableTools Bootstrap compatibility
 * Required TableTools 2.1+
 */
if ( $.fn.DataTable.TableTools ) {
	// Set the classes that TableTools uses to something suitable for Bootstrap
	$.extend( true, $.fn.DataTable.TableTools.classes, {
		"container": "DTTT btn-group",
		"buttons": {
			"normal": "btn",
			"disabled": "disabled"
		},
		"collection": {
			"container": "DTTT_dropdown dropdown-menu",
			"buttons": {
				"normal": "",
				"disabled": "disabled"
			}
		},
		"print": {
			"info": "DTTT_print_info modal"
		},
		"select": {
			"row": "active"
		}
	} );

	// Have the collection use a bootstrap compatible dropdown
	$.extend( true, $.fn.DataTable.TableTools.DEFAULTS.oTags, {
		"collection": {
			"container": "ul",
			"button": "li",
			"liner": "a"
		}
	} );
}