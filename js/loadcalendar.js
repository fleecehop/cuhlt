//This javascript file loads the fullcalendar.io and here are where the settings can be change
//to modify its appearance, the files used to run it, and how it responds

$(document).ready(function() {
    
    //visual settings
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        aspectRatio: 1,
        height: 450,

        eventRender: function(event, element) {
            element.attr('data-toggle' , 'modal');
            element.attr('data-target','.modal');
        },

        eventLimit: true, // allow "more" link when too many events
        
        //load the file that holds the events
        events: {
            url: 'php/get-events.php',
            error: function() {
                $('#script-warning').show();
            }
        },
        //function handling for when an event gets clicked
        eventClick: function(event) {
            if (event) {

                var bUrl = 'interview_view.php?id=' + event.interviewID + '&modalView=true';

                //get interview_view.php and stuff it into the modal
                $.get(bUrl, function(data) {
                    $('#viewEvent').html(data);
                });

            }
        },
        
        //message shows if the calendar is loading
        loading: function(bool) {
            $('#loading').toggle(bool);
        }
    });
     
});
