<!DOCTYPE html>
<html>
<body>

echo "<body style='background-color:blue'>";


<script type="text/javascript">
	window.lhnJsSdkInit = function () {
		lhnJsSdk.setup = {
			application_id: "c78844c2-3b46-4dad-a6ed-30ddb619b73a",
			application_secret: "ce5cd65263bf4002bf7809bd114130d65f817946c65c450a89"
		};
		lhnJsSdk.controls = [{
			type: "hoc",
			id: "dce3cec1-41dc-4a1a-8a29-e7e957b152e7"
		}];
	};

	(function (d, s) {
		var newjs, lhnjs = d.getElementsByTagName(s)[0];
		newjs = d.createElement(s);
		newjs.src = "https://developer.livehelpnow.net/js/sdk/lhn-jssdk-current.min.js";
		lhnjs.parentNode.insertBefore(newjs, lhnjs);
	}(document, "script"));
</script>

</body>
</html>