const submit = document.getElementById('submit');
const total = document.getElementById('total');
const images = document.getElementById('images');
const message = document.getElementById('msg');
const totalMsg = document.getElementById('truc-de-merde');
const msgMise = document.getElementById('msgMise');
const result = document.getElementById('result');

submit.addEventListener('submit', function(e){
    e.preventDefault();
    const queryString = window.location.search;
    console.log(queryString);
    const formData = new FormData(e.target);
    data = {
        method:"POST",
        body: formData,
        headers: {
            "Accept": "application/json"
        }
    }
        fetch("dice.php", data)
        .then(response => response.json())
        .then( responseData => {
            console.log(responseData);
            if (typeof(responseData.msg) == "undefined") {
                images.innerHTML = responseData.images;
                total.innerHTML =  responseData.total ;
                msgMise.innerHTML = responseData.msgMise ; 
                result.innerHTML = responseData.result ; 
                message.innerHTML = " ";
                totalMsg.innerHTML = "Le total est de : "
                // en js la concatenation = +
            }else{
                totalMsg.innerHTML = ""
                message.innerHTML = responseData.msg; 
                images.innerHTML = "";
                total.innerHTML = "";
            }
    });

})