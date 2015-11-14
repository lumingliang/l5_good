//$('#left_slide_navbar').pin();
//
$('#slide_up').click(function () {
	$("header").slideUp("slow");
});

var countries = [
   { value: '我你', data:'是你'},
   { data:'23' ,value:'打算' , } ,
   { value: '我是谁'}
];


$('#autocomplete').autocomplete({
    lookup: countries,
    orientation:'auto',
    onSelect: function (suggestion) {
        //alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
        $('#autocomplete').data('tag_id', suggestion.data);
        console.log($('#autocomplete').data('tag_id') );
    }
});

var jjj = 'fjdjf';
echo var;
