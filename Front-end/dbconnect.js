var ajax = new XMLHttpRequest();
var method = "GET";
var url = "data.php";
var asynchronous = true;

ajax.open(method,url,asynchronous);

//sending request
ajax.send();

ajax.onreadystatechange = function(){
    if(this.readystate == 4 && this.status == 200)
    {
        //convert JSON back to array
        var data = JSON.parse(this.responseText);
        console.log(data); //debugging
    }
}