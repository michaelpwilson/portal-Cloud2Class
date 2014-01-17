<html>
<head>
<title>Insert and Show Records using jQuery Ajax and PHP</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    $(function(){
        //insert record
        $('#insert').click(function(){
            var jname = $('#fname').val();
            var jemail = $('#femail').val();
 
            //syntax - $.post('filename', {data}, function(response){});
            $.post('data.php',{action: "insert", name:jname, email:jemail},function(res){
                $('#result').html(res);
            });        
        });
 
        //show records
        $('#show').click(function(){
            $.post('data.php',{action: "show"},function(res){
                $('#result').html(res);
            });        
        });
    });
</script>
</head>
<body>
<h2>Insert Records into MySQL using Ajax and PHP Tutorial - <a href="http://blog.theonlytutorials.com">blog.theonlytutorials.com</a></h2>
 
Name: <input type="text" id="fname" />
Email: <input type="text" id="femail" />
<button id="insert">Insert</button>
 
<h2>Show Last 10 Records</h2>
<button id="show">Show</button>
<p>Result:</p>
<div id="result"></div>
</body>
</html>
