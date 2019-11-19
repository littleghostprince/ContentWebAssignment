
const makeMenu = data=>{

    let result = "";
    for(var i = 0 ; i < Object.keys(data.MainPages).length;i++){
        result +=`<a href="index.php">${data.MainPages[i].page_name}</a><br />`;
       
    }
  
}

let url = `http://pi-amejia/ContentWebAssignment/Back-end/API_MainPage.php`;
console.log(url);
fetch(url)
.then(response => response.json())
.then(data => {
    console.log(data);
    makeMenu(data);
})
.catch(e=> console.log(e));