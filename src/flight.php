<?
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight_reservation</title>
    <style>
        .div1 {
            float: left;

        }

        .div2 {
            float: left;


        }

        .div3 {
            float: left;

        }

        .div1 input[type='text'] {
            padding: 5% 7% 5% 7%;
            margin-right: 50px;
            border: 1px solid #E6E9EE;

        }

        .div2 input[type='text'] {
            padding: 5% 7% 5% 7%;
            margin-right: 40px;
            margin-left: 50px;
            border: 1px solid #E6E9EE;
        }

        .div3 input[type='text'] {
            padding: 5% 7% 5% 7%;
            margin-right: 40px;
            margin-left: 50px;
            border: 1px solid #E6E9EE;
        }


        .div4 {
            float: left;
        }

        .div5 {
            float: left;
        }

        .div6 {
            float: left;
        }

        #month {
            padding: 5% 30% 10% 30%;
            margin-right: 50px;
            border: 1px solid #E6E9EE;
        }

        #day {
            padding: 5% 20% 5% 20%;
            margin-right: 50px;
            margin-left: 80px;
            border: 1px solid #E6E9EE;
        }

        #year {
            padding: 5% 30% 5% 30%;
            margin-right: 50px;
            margin-left: 100px;
            border: 1px solid #E6E9EE;
        }

        #button {
            background-color: #2F6AFF;
            color: white;
            padding-left: 2.5%;
            padding-right: 2.5%;
            padding-top: 1%;
            padding-bottom: 1%;
            float: right;
            margin-right: 40%;
        }

        #update {
            background-color: #2F6AFF;
            color: white;
            padding-left: 2.5%;
            padding-right: 2.5%;
            padding-top: 1%;
            padding-bottom: 1%;
            float: right;
            margin-right: 40%;
        }

        .div7 {
            border-bottom: 1px solid #E6E9EE;
        }

        .main {
            padding: 3%;
        }

        #para2,
        #para3 {
            margin-left: 20%;
        }

        #para5 {
            margin-left: 40%;
        }

        #para6 {
            margin-left: 50%;
        }

        table {
            border: 1px solid #E6E9EE;
            text-align: center;
        }

        td {
            border: 1px solid #E6E9EE;
            background-color: #023020;
            color: white;
        }

        th {
            border: 1px solid #E6E9EE;
            background-color: #8B0000;
            color: white;
        }

        #edit {
            border: 1px solid #E6E9EE;

            background-color: tomato;
            color: white;
        }

        #delet {
            border: 1px solid #E6E9EE;

            background-color: #CA1131;
            color: white;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="div7">
            <h1 id='head1'>Flight Reservation</h1>

            <p>Please make sure that you fill in the name which is in your passport.</p>
        </div>


        <h2>Passenger Name</h2>
        <div class="div1">
            <input type="text" name='title' id='title'><br>
            <p id='para1'>Title</p>
        </div>
        <div class="div2">
            <input type="text" name='fname' id='fname'>
            <br>
            <p id='para2'>First Name</p>
        </div>

        <div class="div3">
            <input type="text" name='lname' id='lname'>
            <br>
            <p id='para3'>Last Name</p>
        </div><br><br><br><br><br><br>

        <h2>Date Of Birth</h2>
        <div class="div4">

            <select id="month">
                <option></option>
                <option value="january">January</option>
                <option value="february">February</option>
                <option value="march">March</option>
                <option value="april">April</option>
                <option value="may">May</option>
                <option value="june">June</option>
                <option value="july">July</option>
                <option value="august">August</option>
                <option value="september">September</option>
                <option value="october">October</option>
                <option value="november">November</option>
                <option value="december">December</option>
            </select>
            <br>
            <p id='para4'>Month</p>
        </div>




        <div class="div5">

            <select id="day">
                <option></option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>

            </select>
            <br>
            <p id='para5'>Day</p>
        </div>



        <div class="div6">

            <select id="year">
                <option></option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
            </select>
            <br>
            <p id='para6'>Year</p>
        </div>
        <br><br><br><br><br><br>
        <button id='button'>Next</button>
        <button id='update'>update</button>


        <div class="display" id='result'></div>





    </div>
</body>
<script>
    var arr = [];
    $(document).ready(function() {

        $("#update").hide();
        $("#button").click(function() {



            var title = document.getElementById("title").value;
            var fname = document.getElementById("fname").value;
            var lname = document.getElementById("lname").value;
            var month = $("#month option:selected").text();
            var day = $("#day option:selected").text();
            var year = $("#year option:selected").text();
            console.log(year);


            $.ajax({
                url: 'view.php',
                type: 'post',
                data: {
                    title: title,
                    fname: fname,
                    lname: lname,
                    month: month,
                    day: day,
                    year: year,
                    action: 'add'

                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    arr = data;
                    display(arr);
                    console.log(arr);

                }


            })

        })

    })

    function display(arr) {
        html = "<table><tr><th>TITLE</th><th>First Name</th><th>Last Name</th><th>Date Of Birth</th></tr>";

        for (var i = 0; i < arr.length; i++) {
            html += "<tr><td>" + arr[i][0] + "</td><td>" + arr[i][1] + "</td><td>" + arr[i][2] + "</td><td>" + arr[i][3] + "," + arr[i][4] + "," + arr[i][5] + "</td><td><button  onclick='edit(" + i + ")' id='edit'>Edit</button></td><td><button  onclick='delet(" + i + ")' id='delet'>Delete</button></td></tr>";

        }
        html += "</table>";
        document.getElementById("result").innerHTML = html;

    }



    function edit(x) {
        $("#update").show();
        $("#button").hide();
        for (var i = 0; i < arr.length; i++) {
            if (i == x) {

                $("#title").val(arr[i][0]);
                $("#fname").val(arr[i][1]);
                $("#lname").val(arr[i][2]);

                $("#update").click(function() {

                    var ntitle = $("#title").val();
                    var nfname = $("#fname").val();
                    var nlname = $("#lname").val();
                    var nmonth = $("#month").val();
                    var nday = $("#day").val();
                    var nyear = $("#year").val();


                    $.ajax({
                        url: 'view.php',
                        type: 'post',
                        data: {
                            key1: ntitle,
                            key2: nfname,
                            key3: nlname,
                            key4: nmonth,
                            key5: nday,
                            key6: nyear,
                            index: x,
                            action: 'edit'

                        },
                        dataType: 'json',
                        success: function(data) {

                            arr = data;


                            display(arr);
                            console.log(arr);
                            $("#update").hide();
                            $("#button").show();


                        }


                    })

                })



            }
        }


    }


    function delet(x) {
        // console.log(x); 
        $.ajax({
            url: 'view.php',
            type: 'post',
            data: {

                index2: x,
                action: 'delet'

            },
            dataType: 'json',
            success: function(data) {
                arr = data;
                display(arr);
                console.log(arr);

            }


        })


    }
</script>

</html>