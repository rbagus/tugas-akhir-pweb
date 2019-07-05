   function tambah(){ 
      a=eval(document.getElementById("a").value);//input variabel a
      b=eval(document.getElementById("b").value);//input variabel b
      c=a+b;//rumus pertambahan
      document.getElementById("hasil").value=c; //output hasil dari a+b
       }
       function kurang(){ 
      a=document.getElementById("a").value;//input variabel a
      b=document.getElementById("b").value;//input variabel b
      c=a-b;//rumus -
      document.getElementById("hasil").value=c; //output hasil dari a-b
       }
       function kali(){ 
      a=document.getElementById("a").value;//input variabel a
      b=document.getElementById("b").value;//input variabel b
      c=a*b;//rumus *
      document.getElementById("hasil").value=c; //output hasil dari a*b
       }