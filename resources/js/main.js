const year = document.querySelector('#year')
const d = new Date();
let year2 = 2023;
let year3 = d.getFullYear();


if(year2 === year3){
    year.innerHTML = year2;
}else{
    year.innerHTML = year2 + ' - ' + year3;
}

/* const companyState = document.querySelector('#companies');

document.onreadystatechange = () => {
    if(document.readyState === "loading"){
        console.log("loading")
    }else if(document.readyState === "interactive"){
        console.log("interactive")
    }else {
        companyState.classList.add('animate-pulse')
    }
};
 */