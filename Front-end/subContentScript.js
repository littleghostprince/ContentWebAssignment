
let txt1 = document.getElementById('text');
let pic1 = document.getElementById('picture');
let sub1 = document.getElementById('dropdown');
let num1 = document.getElementById('idHidden').textContent;

const makecontent2 = data=>{

    let result = "";
    let picture = "";

    for(var i = 0 ; i < Object.keys(data.MainPages).length;i++){

        if(data.MainPages[i].id == num1){
            result +=`<p>${data.MainPages[i].content}</p>`;
            if(data.MainPages[i].photo != ""){
                picture +=`<img src=${data.MainPages[i].photo}>`;
            }
        }
       
    }
    txt1.innerHTML = result;
    pic1.innerHTML = picture;
  
}


let url5 = `http://pi-amejia/ContentWebAssignment/Back-end/API_SubPage.php`;
console.log(url5);
fetch(url5)
.then(response => response.json())
.then(data =>{
    console.log(data);
    makecontent2(data);
})
.catch(e=>console.log(e));