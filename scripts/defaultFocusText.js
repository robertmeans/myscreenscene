$(document).ready(function() {
$('.default-value').each(function() {
    var default_value = this.value;
    $(this).css('color', '#ffffff');
	$(this).css('background-color', '#ababab'); // this could be in the style sheet instead
    $(this).focus(function() {
        if(this.value == default_value) {
            this.value = '';
            $(this).css('color', '#ffffff');
			$(this).css('background-color', '#ababab');
        }
    });
    $(this).blur(function() {
        if(this.value == '') {
            $(this).css('color', '#ffffff');
			$(this).css('background-color', '#ababab');
            this.value = default_value;
        }
    });
});
});

