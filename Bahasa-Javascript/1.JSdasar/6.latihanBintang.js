var i, j, k;
for (i=0; i<5; i++){
    for (j=0; j<=i; j++){
        document.write("*");
    }
    document.write("<br>");
}

document.write("<br>");	

for(i=0; i<5; i++){
    for(j=5; j>i; j--){
        document.write("*");
    }
    document.write("<br>");			
}

document.write("<br>");			

for(i=0; i<5; i++){
    for(j=5; j>i; j--){
        document.write("&nbsp &nbsp");	
    }
    for(k=0; k<(i*2)+1; k++){
        document.write("* ");
    }						
    document.write("<br>");						
}

document.write("<br>");

for (i=5; i>0; i--){
    for (j=5; j>=i; j--){
        document.write("&nbsp &nbsp");
    }
    for(k=0; k<(i*2)-1; k++){
        document.write("*&nbsp");
    }
    document.write("<br>");
}

document.write("<br>");

for(i=0; i<5; i++){
    if (i % 2 == 0){
        document.write("&nbsp&nbsp&nbsp");
    }else if(i % 2 == 1){
        document.write("&nbsp&nbsp");
    }
    for(j=0; j<5; j++){
        document.write("# &nbsp");
    }
    document.write("<br>");
}