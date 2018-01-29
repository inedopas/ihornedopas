
function SButton1(form){
var i= 1;
for (;i<10;i++){
  document.getElementById('texta').value+=i+"  ";
  }


num=0;
while(i>=0){
  document.getElementById('texta').value+= "fuck ";
  num+=1;
  i=i-1;
}
document.getElementById('texta').value+= num;

}


  document.getElementById('btn').onclick = function () {
      for(i=10; i>0;i=i-1){
      var newBtn = document.createElement('button');
      newBtn.innerText = 'New';
      document.body.appendChild(newBtn);
  }
}

  var x,y;
  function Start1(form1)
   {
     x=form1.TextBox.value
     y=form1.TextBox1.value
     form1.TextBox2.value = unescape(x*y)
   }

  function Start2(form1)
   {
     x=form1.TextBox.value
     y=form1.TextBox1.value
     form1.TextBox2.value = unescape(x/y)
   }

  function Start3(form1)
   {
     x=form1.TextBox.value
     y=form1.TextBox1.value
     form1.TextBox2.value = unescape(x-y)
   }
