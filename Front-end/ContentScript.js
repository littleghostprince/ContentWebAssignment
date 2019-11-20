
let txt = document.getElementById('text');
let pic = document.getElementById('picture');
let sub = document.getElementById('dropdown');
let num = document.getElementById('idHidden').textContent;

const makecontent = data=>{

    let result = "";
    let picture = "";

    for(var i = 0 ; i < Object.keys(data.MainPages).length;i++){

        if(data.MainPages[i].id == num){
            result +=`<p>${data.MainPages[i].content}</p>`;
            if(data.MainPages[i].photo != ""){
                picture +=`<img src=${data.MainPages[i].photo}>`;
            }
        }
       
    }
    txt.innerHTML = result;
    pic.innerHTML = picture;
  
}
const makesubmenu = data =>{
    let subnav = "<div class = navBar2>";

    for(var i = 0 ; i < Object.keys(data.MainPages).length;i++){

        if(data.MainPages[i].main_page_id == num){ 
          subnav+= `<a href="subindex.php?page=${data.MainPages[i].page_name}&id=${data.MainPages[i].id}" >${data.MainPages[i].page_name}</a>`;       
        }
       
    }
    subnav += "</div>";
    sub.innerHTML = subnav;
}

let url3 = `http://pi-amejia/ContentWebAssignment/Back-end/API_MainPage.php`;
console.log(url3);
fetch(url3)
.then(response => response.json())
.then(data => {
    console.log(data);
    makecontent(data);
})
.catch(e=> console.log(e));

let url4 = `http://pi-amejia/ContentWebAssignment/Back-end/API_SubPage.php`;
console.log(url4);
fetch(url4)
.then(response => response.json())
.then(data =>{
    console.log(data);
    makesubmenu(data);
})
.catch(e=>console.log(e));