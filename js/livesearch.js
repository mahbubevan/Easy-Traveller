function showResult(str) {
  if(str.length=0)
				{
				document.getElementById("livesearch").innerHTML:"empty";
				}
				else{
					var xhttp=new XMLHTTPRequest();
					Xhttp.onreadystatechange=function()
					{
						if(this.readstate=4 && this.status=200)
						{
							document.getElementById("livesearch").innerHTML=this.responseText;
							xhttp.open("Get","livesearch.php?p="+str.true);
							xhttp.send
						}
					}
				}
}
