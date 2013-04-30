function test(){

var kake1 = Math.floor( Math.random() * 5 );
var kake2 = Math.floor( Math.random() * 2 );
var kake3 = Math.floor( Math.random() * 10 );
var kake4 = Math.floor( Math.random() * 20 );
var kake5 = Math.floor( Math.random() * 3 );
var moti=500;
document.kake.kake1.value=kake1+6;
document.kake.kake2.value=kake2+4;
document.kake.kake3.value=kake3+11;
document.kake.kake4.value=kake4+31;
document.kake.kake5.value=kake5+1;
document.kake.moti.value=moti;
}
function go(){
obj = document.kake.t
for (i = 0; obj.length > i; i++) {
if (obj[i].checked) {
hito=obj[i].value;
break;
}
}
kakekin=document.kake.kakekin.value;

var arr = new Array(5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,2,2,2,2,2,2,2,2,2,2,2,1,1,1,1,1,3,3,3,4);
syouri=arr[ Math.floor(Math.random() * arr.length) ];



var chek=1;
if(parseInt(document.kake.moti.value)<kakekin){
alert("見栄をはっちゃいかんよ")
chek=0
}
else if(kakekin<0){
alert("少なくともプラスにしようねｗ")
chek=0
}
else{
    if(syouri==hito){
        if(hito==1){
    var	bairitu=document.kake.kake1.value;
     	}
    	else if(hito==2){
    var	bairitu=document.kake.kake2.value;
    	}
        else if(hito==3){
    var	bairitu=document.kake.kake3.value;
	}
        else if(hito==4){
    var	bairitu=document.kake.kake4.value;
    	}	
    	else if(hito==5){
    var	bairitu=document.kake.kake5.value;
	    }	
    }
else
{
alert("負け");
document.kake.moti.value=document.kake.moti.value-kakekin;
if (document.kake.moti.value<=0){
document.write("終わり");
}
}
if(bairitu){
var syoukin=kakekin*bairitu;
alert(syoukin+"円ケ゛ット");
document.kake.moti.value=syoukin+parseInt(document.kake.moti.value);
  if(parseInt(document.kake.moti.value)>1000000){
  document.write("A君家の金を全部ふんだっくたっ！パスワード「L」")
}}
else {

}
}}