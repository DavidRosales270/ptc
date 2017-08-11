<html>
	<head>	
		<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
			var focused = true;
			
			window.onfocus = function() {
			    focused = true;
			};
			
			window.onblur = function() {
			    focused = false;
			};
		
			$(document).ready(function() {				
			    var divTempo = $("#divTempo");	
			    document.getElementById("divTempo").innerHTML = "15";
			    
			    setTimeout(function(){ controlTiempo(); }, 1000);
			});
			
			function vissal()
			{
				$("#btnClose").show();
			}
			
			function visrein(estado)
			{
				//alert(estado); 
				if (estado == 1)
				{					
					$("#btnRein").show();
				}
				else 
				{					
					$("#btnRein").hide();
				}
			}
			
			function controlTiempo()
			{
				var tact = document.getElementById("divTempo").innerText;
				if (tact > 0)
				{
					if (focused)
					{
						document.getElementById("divTempo").innerHTML = tact - 1;
						setTimeout(function(){ controlTiempo(); }, 1000);
					}
					else 
					{
						visrein(1);
					}
				}
				else 
				{
					vissal();
				}
			}
		</script>
		
		
	</head>
	<body>
		<div style=" position: fixed; top: 0; left: 0; margin-bottom: 20px; text-align: center; background-color: orange; width: 100%; ">			
			<div class="row" style="margin: 0; padding: 0; position: relative; text-align: left; vertical-align: middle; ">				
				<table>
				<tr>
					<td>
						<a href="/"><img src="../public/imgs/logo.png" alt="" height="56" width="229"></a>
					</td>
					<td>
						<label id="divTempo" name="divTempo" height="56" style="font-size: 24px; color: red; "></label>
					</td>
					<td>
						<input id="btnRein" name="btnRein" type="button" onclick="controlTiempo(); visrein(0); " style="display: none; " value="Reiniciar Contador" />
						<input id="btnClose" name="btnClose" type="button" onclick="window.close(); " style="display: none; " value="Cobrar" />	
					</td>
				</tr>
				</table>
			</div>
		</div>
		<div style=" margin-top: 30px;  ">
			<iframe width="100%" height="90%" src="{{Session::get('urlan')}}"></iframe>
		</div>
	</body>
</html>