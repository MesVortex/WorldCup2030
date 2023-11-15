let groupA = document.getElementById('GroupA');
let groupB = document.getElementById('GroupB');
let groupC = document.getElementById('GroupC');
let groupD = document.getElementById('GroupD');
let groupE = document.getElementById('GroupE');
let groupF = document.getElementById('GroupF');
let groupG = document.getElementById('GroupG');
let groupH = document.getElementById('GroupH');

let btnALL = document.getElementById('All_btn');
let btnA = document.getElementById('A_btn');
let btnB = document.getElementById('B_btn');
let btnC = document.getElementById('C_btn');
let btnD = document.getElementById('D_btn');
let btnE = document.getElementById('E_btn');
let btnF = document.getElementById('F_btn');
let btnG = document.getElementById('G_btn');
let btnH = document.getElementById('H_btn');

let arr = [groupA, groupB ,groupC ,groupD ,groupE ,groupF ,groupG ,groupH];
let btnArr = [btnA , btnB, btnC, btnD, btnE, btnF, btnG, btnH];


function Filter(element){
  if(element === 'A'){
    show(0);
  }else if(element === 'B'){
    show(1);
  }else if(element === 'C'){
    show(2);
  }else if(element === 'D'){
    show(3);
  }else if(element === 'E'){
    show(4);
  }else if(element === 'F'){
    show(5);
  }else if(element === 'G'){
    show(6);
  }else if(element === 'H'){
    show(7);
  }else if(element === 'ALL'){
    showAll();
  }
}

function show(indice){
  for(let i = 0 ; i < 8 ; i++){
    if(i === indice){
      arr[i].className = "card";
      btnArr[i].className = "col-lg btn btn-danger me-3";
    }else{
      arr[i].className = "card d-none";
      btnArr[i].className = "col-lg btn btn-outline-danger me-3";
    }
  }
  btnALL.className = "col-lg btn btn-outline-danger me-3";
}

function showAll(){
  for(let i = 0 ; i < 8 ; i++){
    arr[i].className = "card";
    btnArr[i].className = "col-lg btn btn-outline-danger me-3";
  }
  btnALL.className = "col-lg btn btn-danger me-3";
}