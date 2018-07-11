$(function()
{
        //Onready state
        console.log('Hey other file .js....');
        $('#dos').hide();
        $('#Res').hide();
});
//when click in the button send:
$('#Send').click(function()
{
    //variables with jquery
    console.log('Click in button send...');
    var Na=$('#Name').val();
    var Pa=$('#Pass').val();
    console.log(Na+ ' | '+ Pa );
    
 
    //Data that send
    var Data='Name='+Na+'&Pass='+Pa;
    console.log(Data);
    
    //route php
    var Url='php/encr.php';
    
    $.ajax({
        type: 'post',
        url: Url,
        data: Data,
        beforeSend: function() {
            console.log('waiting...');
        },
        success: function(response) 
        {
            if(response==1)
            {
                $('#Res').slideDown(2000);
                //R.slideDown(2000);
                //$('#dos').slideDown(2000);
            }
            if(response==2)
            {
                $('#Res').html('No sos el usuario');
            }            
        },
        error: function() {
            console.log('Ha salido algo mal,revisa por favor...');
        }
    });
        
});