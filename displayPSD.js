
    $(function () {
        $(".k").dialog({
            modal: true,
            autoOpen: false,
            title: "Special Category Data",
            width: 700,
            height: 250

        });
        $("#ok").click(function () {
            $('.k').dialog('open');
        });
    });



    $(function () {
        $(".pers").dialog({
            modal: true,
            autoOpen: false,
            title: "Personal Data",
            
            width: 700,
            height: 250

        });
        $("#ped").click(function () {
            $('.pers').dialog('open');
        });
    });
