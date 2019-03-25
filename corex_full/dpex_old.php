<html>
<head>

</head>
<body>
<form id="tgx-online-rhs" method="post" action="http://www.tollgroup.com/toll-global-express-track-trace"><textarea class="placeholder" id="tt-rhs-textarea1" name="entered" title="TGX Online Enquiry" placeholder="Enter up to 10 numbers, one per line"><? echo $_GET['tn'] ?></textarea> <input type="hidden" name="t" id="t" value="<? echo(rand(1000,10000)); ?>" /> <input type="hidden" name="cn" id="cn" value="<? echo $_GET['tn'] ?>,"/> <input value="Track" class="button button-green" type="submit"> </form> 

<script>document.getElementById('tgx-online-rhs').submit();</script>


</body>
</html>