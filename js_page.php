<html>
    <head>
        <meta charset="utf-8">        
    </head>
    <body onload="loadPage()">
        <div id="main-div"></div>        
    </body>        
        <script type="text/javascript">
            async function loadPage() {
                const mainDiv = document.getElementById('main-div');
                try {
                    const response = await fetch("http://new-js.loc",
                    {
                        method: "POST",
                        body: 'page=1'
                    }); 

                    const result = await response.json();
                    //mainDiv.innerHTML = result;
                    console.log(result);
                    
                } catch (error) {
                    mainDiv.innerHTML = error;
                }
            }            
        </script>
</html>