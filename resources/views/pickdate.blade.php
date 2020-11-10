<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}} ">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <title>Neo Api</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="mt-5">


                <h3>Select start and end Dates To Get Astroid</h3>

                <br><br>

                <form method="post" action="/colldate">
                    {{ csrf_field() }}

                    dtfrom <input type="text" class=" ml-3" name="dtfrom" id="dtfrom">
                    dtto <input type="text" class=" ml-3" name="dtto" id="dtto">
                    <input type="submit" value="Submit" name="Submit" id="filter">
                </form>
            </div>
        </div>





    </div>
    <script src="{{asset('js/app.js')}} "></script>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {
                $.datepicker.setDefaults({
                    dateFormat:'yy-mm-dd',
                    changeMonth: true,
                      changeYear: true,
                      yearRange: "2012:2020"
                });
                $("#dtfrom").datepicker();
                $("#dtto").datepicker();
                $("#filter").click(function(){
       
                var dtfrom = $('#dtfrom').val();
                var dtto = $('#dtto').val();
            
                if(dtfrom != '' && dtto != ''){
                    $.ajax({
                        url: 'filter.php',
                        method: 'POST',
                        data: {dtfrom:dtfrom,dtto:dtto},
                        success:function(data)
                        {
                            $('#order_table').html(data);
                        }
                    
                    });
                    
                }else{
                    alert("Please Select Date");
                }
            });
        });
    </script>
</body>

</html>