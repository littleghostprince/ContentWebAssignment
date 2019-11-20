let T = document.getElementById('title');

const SetTitle = data=>{

    let result = "";

    for(var i = 0 ; i < Object.keys(data.login).length;i++){
      result += `<h2>${data.login[i].main_title}</h2>`;
    }

    T.innerHTML = result;
}

let url6 = `http://pi-amejia/ContentWebAssignment/Back-end/API_Main.php`;
console.log(url6);
fetch(url6)
.then(response => response.json())
.then(data => {
    console.log(data);
    SetTitle(data);
})
.catch(e=> console.log(e));