<html>
    <head>
        <meta charset="utf-8">        
    </head>
    <body>
        <div id="main-div">Hello</div>  

        <script type="text/javascript">
            loadPage();
            async function loadPage() {
                const formData = new FormData();
                formData.append('page', '1');
                const mainDiv = document.getElementById('main-div');
                try {
                    const response = await fetch("http://new-js.loc/index.php",
                    {
                        method: "POST",
                        headers: {
                            'content-type':  'application/x-www-form-urlencoded'
                        },
                        body: formData
                    }); 
                    console.log(5);
                    const result = await response.json();
                    console.log(7);
                    //mainDiv.innerHTML = result;
                    console.log(result);
                } catch (error) {
                    console.log(6);
                    mainDiv.innerHTML = error;
                }
            }            
        </script>     
    </body>        
</html>