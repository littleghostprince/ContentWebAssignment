
const makeStyleSheet = data=>{

    for(var i = 0 ; i < Object.keys(data.login).length;i++){
        
        if(!document.getElementById('theme')){
            var link = document.createElement('link');
            link.id = 'theme';
            link.rel = 'stylesheet';
            link.href = `css/style3.css`;
            document.head.appendChild(link);
        }
    }
}

let url = `http://pi-amejia/ContentWebAssignment/Back-end/API_Main.php`;
console.log(url);
fetch(url)
.then(response => response.json())
.then(data => {
    console.log(data);
    makeStyleSheet(data);
})
.catch(e=> console.log(e));