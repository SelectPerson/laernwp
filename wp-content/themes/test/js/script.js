$(document).ready(function() {

	$('.category__inner').on('click', function() {
		// $('.category__list').slideToggle(500);
		$(this).next().fadeToggle();
		
	});
	$('li.category__elem').on('click', function() {
		$(this).toggleClass('category__elem__select');
	});
	// Add MarkBook
	$('button#add__markbook').on('click', function() {
		$('#save__markbook').toggle();
		$('#add__window__markbook').slideToggle(400);
		$('#category__markbook__select').toggle(); 
		$(this).toggleClass('select__button').toggleText('Скасувати','Додати');
		$('.add_category').slideUp(400);
	});
	// Add Plan
	$('button#plan__button__inner').on('click', function() {
		$('#save__plan').toggle();
		$('#add__window__planning').slideToggle(400);
		$('#category__plan__select').toggle(); 
		$(this).toggleClass('select__button').toggleText('Скасувати','Додати');
		$('.add_category').slideUp(400);
	});
	// Add Record Day
	$('button#record__button__inner').on('click', function() {
		$('#save__record').toggle();
		$('#add__window__record').slideToggle(400);
		$('#category__record__select').toggle(); 
		$(this).toggleClass('select__button').toggleText('Скасувати','Додати');
		$('.add_category').slideUp(400);
		$('.date__filter__first').fadeTogglepriority__list(400);
	});


	//
	$('button#right__add__markbook__button').on('click', function() {
		$('.add_category').slideDown(400);
	});
	/* Priority */
	$('.priority__list__markbook').on('click', function() { 
		$(this).next().slideToggle(400);
	});
	$('.priority__list__planning').on('click', function() { 
		$(this).next().slideToggle(400);
	});


});




jQuery.fn.extend({
    toggleText: function (a, b){
        var that = this;
            if (that.text() != a && that.text() != b){
                that.text(a);
            }
            else
            if (that.text() == a){
                that.text(b);
            }
            else
            if (that.text() == b){
                that.text(a);
            }
        return this;
    }
});

