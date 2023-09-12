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
            let one = parseInt(res["nOne"]);
            let two = parseInt(res["nTwo"]);

            switch(res["oparation"]){
                case "add":
                    result.innerText = "Resust: " + (one + two);
                    break;
                case "subtract":
                    result.innerText = "Resust: " + (one - two);
                    break;
                case "multiply":
                    result.innerText = "Resust: " + (one * two);
                    break;
                case "divide":
                        result.innerText = "Resust: " + (one / two);
                        break;
                case "binary":
                    result.innerText = "Resust: " + ((one + two).toString(2));
                    break;
                case "octal":
                    result.innerText = "Resust: " + ((one + two).toString(8));
                    break;
                case "hexadecimal":
                    result.innerText = "Resust: " + ((one + two).toString(16));
                    break;
            }
        })
    }
}
