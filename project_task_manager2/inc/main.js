;(function ($) {
    $(document).ready(function () {
        $(".complete").on('click', function () {
            var id = $(this).data("taskid");
            $("#taskid").val(id);
            $("#completeform").submit();
        });

        $(".delete").on('click', function () {
            if (confirm("Are you sure to delete this task?")) {
                var id = $(this).data("taskid");
                $("#dtaskid").val(id);
                $("#deleteform").submit();
            }
        });

        $(".incomplete").on('click', function () {
            var id = $(this).data("taskid");
            $("#itaskid").val(id);
            $("#incompleteform").submit();
        });

        $("#bulksubmit").on("click",function(){
            if($("#action").val()=='bulkdelete'){
                if(!confirm("Are you sure to delete?")){
                    return false;
                }
            }
        })
    });
})(jQuery);