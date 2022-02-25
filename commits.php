<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,
			initial-scale=1, shrink-to-fit=no" />

	<!-- Links -->
    <link rel="stylesheet" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity=
    "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">       
	<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
	<link rel="manifest" href="/images/site.webmanifest">

	<title>
		Fetch <?php echo $_GET['org_name'] ?> Api 
	</title>
</head>

<body>

    <h1 class="page-title text-center p-5">Branch: <?php echo $_GET['branch_name'] ?></h1>

	<div class="container">
 		<div class="row" id='list'>
		</div>
	</div>
	<script>
           
            function sortByProperty(property){  
                return function(a,b){  
                    if(a[property] < b[property])  
                        return 1;  
                    else if(a[property] > b[property])  
                        return -1;  
                
                    return 0;  
                }  
            }
			// Instantiate an new XHR Object
			const xhr = new XMLHttpRequest();

			// Open an obejct (GET/POST, PATH,
			// ASYN-TRUE/FALSE)
            let branch_name = "<?php echo $_GET['branch_name'] ?>"
            let repo_name = "<?php echo $_GET['repo_name'] ?>"
            let org_name = "<?php echo $_GET['org_name'] ?>"
			xhr.open("GET",`https://api.github.com/repos/${org_name}/${repo_name}/commits?sha=${branch_name}`, true);




			// When response is ready
			xhr.onload = function () {
				if (this.status === 200) {

					// Changing string data into JSON Object
					obj = JSON.parse(this.responseText);
                    console.log(obj);
					// Getting the ul element
					let list = document.getElementById("list");
					str = ""

					for (let key=0;key<obj.length;key++) {
                        console.log(obj[key].commit.author.date)
                        const d = new Date(obj[key].commit.author.date);
						str +=
                        `<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3  card">
                          
                            <div class="card-body">
                            	<span class="card-header" style="background-image: url(http://placeimg.com/400/400/tech);"></span>
                                <h5 class="card-subtitle mb-2 text-muted">Commit Title: ${obj[key].commit.message}</h5>
                                <h5 class="card-title">Committer username: ${obj[key].commit.author.name}</h5>
                                <p class="card-subtitle mb-2 text-muted">Commit hash: ${obj[key].sha}</p>
                                <p class="card-title">Date Created: ${d.getDate()+'-'+d.getDay()+'-'+d.getFullYear()}</p>
                            </div>
                    
                        </div>`;
						
					}
					list.innerHTML = str;
				}
				else {
					console.log("File not found");
				}
			}
			xhr.send();
		
	</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity=
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity=
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous">
	</script>
</body>

</html>
