const postForm = document.getElementById("postForm"),
      num1 = document.getElementById("num1"),
      num2 = document.getElementById("num2"),
      oparations = document.getElementById("oparations"),
      submit = document.getElementById("submit"),
      result = document.getElementById("result");

const url = 'method.php';

submit.onclick = () => {
    let numOne = num1.value,
        numTwo = num2.value,
        opara = oparations.value;

    if (
        numOne === " " || numOne === "" || numOne === null || 
        
        numTwo === " " || numTwo === "" || numTwo === null
    ) {
            result.innerText = "Invalid Input";
        setTimeout(() => {
            result.innerText = "";
        },3000)
    } else {
        fetch(url, {
            method: "POST",

            body: JSON.stringify({
                nOne: numOne,
                nTwo: numTwo,
                oparation: opara
            }),
        })
        .then(data => data.json())
        .then(res => {
            console.log(res);
        })
    }
}
