  <style>html { font-size: 14px; font-family: Arial, Helvetica, sans-serif; }</style>

    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.3.1026/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.3.1026/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.3.1026/styles/kendo.material.mobile.min.css" />

    <script src="https://kendo.cdn.telerik.com/2017.3.1026/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2017.3.1026/js/kendo.all.min.js"></script>


 <script>
                $(document).ready(function () {
                    // create DateTimePicker from input HTML element
                    $("#pdate,#edate").kendoDateTimePicker({
                        value: new Date(),
                        dateInput: true
                    });
                });
            </script>
			
			
			
			
			
			
			 <input type="text" id="pdate" name="pdate" title="datetimepicker" style="width: 100%;" />
			 
			  <input type="text" id="edate" name="edate" title="datetimepicker" style="width: 100%;" />