<html>
    <head>
        <meta charset="utf-8">        
    </head>
    <body>
        <div id="main-div"></div>  

        <script type="text/javascript">
            loadPage();
            async function loadPage() {
                const mainDiv = document.getElementById('main-div');
                try {
                    const response = await fetch("http://new-js.loc/create-page.php", {
                        method: "GET"
                    });  
                    const result = await response.json();
                    console.log(result);
                    mainDiv.append(getListContent(result));
                } catch (error) {
                    console.log(6);
                    mainDiv.innerHTML = error;
                }
            } 

            function getListContent(result) {
                const fragment = new DocumentFragment();
                for (const tagInfo of result) {
                    if (tagInfo['tag'] == '' || tagInfo['tag'] == undefined) {
                        fragment.append(tagInfo);
                        continue;
                    }

                    let tag = document.createElement(tagInfo['tag']);

                    if (tagInfo['id'] != undefined && tagInfo['id'] != '') {
                        tag.id = tagInfo['id'];
                    }

                    if (tagInfo['name'] != undefined && tagInfo['name'] != '') {
                        tag.setAttribute("name", tagInfo['name']);
                    }

                    if (tagInfo['value'] != undefined && tagInfo['value'] != '') {
                        tag.setAttribute("value", tagInfo['value']);
                    }

                    if (tagInfo['label'] != undefined && tagInfo['label'] != '') {
                        tag.setAttribute("label", tagInfo['label']);
                    }

                    if (tagInfo['class'] != undefined && tagInfo['class'].length) {
                        tag.setAttribute("class", tagInfo['class'].join(' '));
                    }

                    if (tagInfo['tag'] === 'option' && tagInfo['content'] ==undefined) {
                        tag.append(tagInfo['label']);
                    }

                    tag.append((tagInfo['content'] == undefined) ? '' : getListContent(tagInfo['content']));
                    fragment.append(tag);
                }
                return fragment;
            }

            /*function buildTags(result) {
                let tag ='';
                for (const tagInfo of result) {
                    if (tagInfo['tag'] === '') {
                        tag = tagInfo;
                        continue;
                    }

                    let content = '';
                    if (tagInfo['content'] != undefined) {
                        content += buildTags(tagInfo['content']);  
                    }
                    //console.log(tagInfo['tag']);
                    let id = (tagInfo['id'] === undefined || tagInfo['id'] === '') ? '' : ` id="${tagInfo['id']}"`;
                    //console.log(id); 
                    let name = (tagInfo['name'] === undefined || tagInfo['name'] === '') ? '' : ` name="${tagInfo['name']}"`;
                    //console.log(name);
                    let value = (tagInfo['value'] === undefined || tagInfo['value'] === '') ? '' : ` value="${tagInfo['value']}"`;
                    let lable = (tagInfo['lable'] === undefined || tagInfo['lable'] === '') ? '' : ` lable="${tagInfo['lable']}"`;
                    //console.log(value);
                    let classes ='';
                    if (tagInfo['class'] != undefined && tagInfo['class'].length) {
                        classes =' class="';

                        for (const classInfo of tagInfo['class']) {
                            classes += classInfo;  
                        }

                        classes += '"';
                    }
                    //console.log(classes);
                    let tag = `<${tagInfo['tag']}${id}${classes}${name}${value}${lable}>${content}</${tagInfo['tag']}>`;
                    console.log(tag);
                }
                return tag;                
            } */          
        </script>     
    </body>        
</html>