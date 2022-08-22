<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script>
	function CheckByNamePatient(value){
	
	$.ajax({
		type: 'GET',
		url: '/patient/getLabTest.php',
		dataType: 'json',
		data: {
			p_value: value
		}
		}).done(function(loginMsg) {
			$("#labtest").find("tbody").empty(); 
			$.each(loginMsg, function (index, test) {
				var eachrow = "<tr>"
							 + "<th>" + test.type + "</th>"
							 + "<td>"+ test.date_done + "</td>"
							 + "<td>" + test.finding + "</td>"
							+ "</tr>";
				 $('#labtest').find("tbody").append(eachrow); 
									
			});

		});	
		$.ajax({
			type: 'GET',
			url: '/patient/getSurg.php',
			dataType: 'json',
			data: {
				p_value: value
			}
			}).done(function(loginMsg) {
				$("#surg").find("tbody").empty(); 
				$.each(loginMsg, function (index, surg) {
					var eachrow = "<tr>"
								 + "<th>" + surg.description + "</th>"
								 + "<td>"+ surg.date_and_time + "</td>"
								 + "<td>" + surg.report_practical + "</td>"
								+ "</tr>";
					 $('#surg').find("tbody").append(eachrow); 
										
				});
	
			});
			$.ajax({
				type: 'GET',
				url: '/patient/getExit.php',
				dataType: 'json',
				data: {
					p_value: value
				}
				}).done(function(loginMsg) {
					$("#exit").find("tbody").empty(); 
					$.each(loginMsg, function (index, exit) {
						var eachrow = "<tr>"
									 + "<th>" + exit.output_diagnosis + "</th>"
									 + "<td>"+ exit.date_leave + "</td>"
									 + "<td>" + exit.medication + "</td>"
									 + "<td>" + exit.activities_are_limited + "</td>"
									 + "<td>" + exit.description_of_symptoms + " &#8364;</td>"
									+ "</tr>";
						 $('#exit').find("tbody").append(eachrow); 
											
					});
		
				});
				
}
	</script>
</body>
</html>