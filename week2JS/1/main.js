
// hình vuông
function hinhvuong(){
    let canh =parseInt(document.forms["hinhvuongform"]["canh"].value);
    var chuvihv = canh * 4;
    var dientichhv = canh * canh;
    if (isNaN(canh) || canh <= 0){
        alert("Giá trị sai, hãy nhập lại")
    }
    else{   
        document.getElementById("chuvihv").innerHTML = "chu vi hình vuông là: " +chuvihv;
        document.getElementById("dientichhv").innerHTML = "diện tích hình vuông là: " +dientichhv;
    }
    
}

//hinh tron
function hinhtron(){
    const PI = 3.14;
    let bankinh =parseInt(document.forms["hinhtronform"]["bankinh"].value);
    var chuviht = 2 * bankinh * PI; //magic number
    var dientichht = bankinh * bankinh * PI;
    if (isNaN (bankinh) || bankinh <= 0){
        alert("Giá trị sai, hãy nhập lại")
    }
    else{       
        document.getElementById("chuviht").innerHTML = "chu vi hình tròn là: " +chuviht;
        document.getElementById("dientichht").innerHTML = "diện tích hình tròn là: " +dientichht;
    }
}

//hình tam giác
function hinhtamgiac() {
    let canha = parseInt(document.forms["hinhtamgiacform"]["canh a"].value);
    let canhb = parseInt(document.forms["hinhtamgiacform"]["canh b"].value);
    let canhc = parseInt(document.forms["hinhtamgiacform"]["canh c"].value);
    let biendem = 0; 
    let canh = [canha, canhb, canhc];
    for(i=0; i< canh.length; i++) {
        if(isNaN(canh[i]) || canh[i] <= 0) {
            biendem++;
            break;
        }
        else{
            biendem = 0;
        }
    }
    if(biendem == 0){
        var P = (canha + canhb + canhc) / 2;
        var chuvitg = canha + canhb + canhc;
        var dientichtg = Math.sqrt(P * (P - canha) * (P - canhb) * (P - canhc))
        document.getElementById("chuvitg").innerHTML = "Chu vi hình tam giác là: " + chuvitg;
        document.getElementById("dientichtg").innerHTML = "Diện tích tam giác là: " + dientichtg;
    }
    else {
        alert("Giá trị sai, hãy nhập lại");
    }
}

//hình thang
function hinhthang(){
    let daylon =parseInt(document.forms["hinhthangform"]["daylon"].value);
    let daybe =parseInt(document.forms["hinhthangform"]["daybe"].value);
    let canhben1 =parseInt(document.forms["hinhthangform"]["canhben1"].value);
    let canhben2 =parseInt(document.forms["hinhthangform"]["canhben2"].value);
    let chieucao =parseInt(document.forms["hinhthangform"]["chieucao"].value);
    let biendem = 0;
    let canh = [daylon, daybe, canhben1,canhben2,chieucao];
    for(i=0; i< canh.length; i++) {
        if(isNaN(canh[i]) || canh[i] <= 0) {
            biendem++;
            break
        }
        else{
            biendem=0
        }
    }
    if(biendem == 0){
    var chuvi = daylon + daybe + canhben1 + canhben2 ;
    var dientich = (daylon + daybe) * chieucao / 2;
    document.getElementById("chuvi").innerHTML = "chu vi hình thang là: " +chuvi;
    document.getElementById("dientich").innerHTML = "diện tích hình thang là: " +dientich;
    }
    else {
    alert("Giá trị sai, hãy nhập lại");
    }
}

