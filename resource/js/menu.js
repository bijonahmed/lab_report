 
    


 
//--------------------------------
// This code compares two fields in a form and submit it
// if they're the same, or not if they're different.
//--------------------------------
    function checkEmail(theForm) {
        if (theForm.email.value != theForm.confirm_email.value)
        {
            alert('Those emails don\'t match!');
            return false;
        } else {
            return true;
        }
    }
//-->


  $('[data-toggle="tooltip"]').tooltip({
        'placement': 'right'
    });
    $('[data-toggle="popover"]').popover({
        trigger: 'hover',
        'placement': 'right'
    });

    $('#userNameField').tooltip({
        'show': true,
        'placement': 'bottom',
        'title': ""
    });

    $('#userNameField').tooltip('show');