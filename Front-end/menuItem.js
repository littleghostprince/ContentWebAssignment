let content = document.getElementById('menu');

const makeMenu = data=>{

    let result = "<div class = navBar>";
    for(var i = 0 ; i < Object.keys(data.MainPages).length;i++){
        result +=`<a href="index.php?page=${data.MainPages[i].page_name}&id=${data.MainPages[i].id}">${data.MainPages[i].page_name}</a>`;
    }
    result += "</div>";
    content.innerHTML = result;
  
}

let url2 = `http://pi-amejia/ContentWebAssignment/Back-end/API_MainPage.php`;
console.log(url2);
fetch(url2)
.then(response => response.json())
.then(data => {
    console.log(data);
    makeMenu(data);
})
.catch(e=> console.log(e));