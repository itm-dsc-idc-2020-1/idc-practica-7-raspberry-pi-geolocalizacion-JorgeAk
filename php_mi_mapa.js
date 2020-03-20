function dibujar(latitud1, longitud1, latitud2, longitud2,latitud3,longitud3,latitud4,longitud4,latitud5,longitud5){
    var canvas=document.getElementById('mapa');
	if(canvas&&canvas.getContext){
		var ctx=canvas.getContext("2d");
		if (ctx) {
            
            //Conversion de datos que se reciben
            a=parseFloat(latitud1);
            b=parseFloat(longitud1);
            c=parseFloat(latitud2);
            d=parseFloat(longitud2);
            e=parseFloat(latitud3);
            f=parseFloat(longitud3);
            g=parseFloat(latitud4);
            h=parseFloat(longitud4);
            j=parseFloat(latitud5);
            k=parseFloat(longitud5);
            document.write("<br />Recibiendo: "+a+" "+b+" "+c+" "+d+" "+e+" "+f+" "+g+" "+h+" "+j+" "+k+" ");
            
            // Regla de 3 para calcular el primer punto
            latitud_superior = 19.723225;
            y1 = ((latitud_superior - a)*500)/0.01108;
            longitud_superior = -101.185929;
            x1 = ((longitud_superior - b)*1000)/(-0.001597);
            //document.write("<br />x1: "+x1+" y1: "+y1);
            
            // Dibujar un círculo en el primer punto
            ctx.beginPath();
            ctx.fillStyle="#4C0B5F";
            ctx.arc(x1,y1,5, 0, 2*Math.PI,true);
            ctx.fill();
            
            // Regla de 3 para calcular el segundo punto
            y2 = ((latitud_superior - c)*500)/0.01108;
            x2 = ((longitud_superior - d)*1000)/(-0.001597);
            //document.write("<br />x2: "+x2+" y2: "+y2);
            
            // Dibujar un círculo en el segundo punto
            ctx.beginPath();
            ctx.fillStyle="#08088A";

            ctx.arc(x2,y2,5, 0, 2*Math.PI,true);
            ctx.fill();

            // Regla de 3 para calcular el tercer punto
            y3 = ((latitud_superior - e)*500)/0.01108;
            x3 = ((longitud_superior - f)*1000)/(-0.001597);
            //document.write("<br />x3: "+x3+" y3: "+y3);
            
            // Dibujar un círculo en el tercer punto
            ctx.beginPath();
            ctx.fillStyle="#FFFF00";
            ctx.arc(x3,y3,5, 0, 2*Math.PI,true);
            ctx.fill();

            // Regla de 3 para calcular el cuarto punto
            y4 = ((latitud_superior - g)*500)/0.01108;
            x4 = ((longitud_superior - h)*1000)/(-0.001597);
            //document.write("<br />x4: "+x4+" y4: "+y4);
            
            // Dibujar un círculo en el cuarto punto
            ctx.beginPath();
            ctx.fillStyle="#DF7401";
            ctx.arc(x4,y4,5, 0, 2*Math.PI,true);

            ctx.fill();

            // Regla de 3 para calcular el quinto punto
            y5 = ((latitud_superior - j)*500)/0.01108;
            x5 = ((longitud_superior - k)*1000)/(-0.001597);
            //document.write("<br />x5: "+x5+" y5: "+y5);
            
            // Dibujar un círculo en el quinto punto
            ctx.beginPath();
            ctx.fillStyle="#FE2E64";
            ctx.arc(x5,y5,5, 0, 2*Math.PI,true);

            ctx.fill();
            
            // Dibujar linea
            ctx.beginPath();
            ctx.moveTo(x1, y1);
            ctx.lineTo(x2, y2);
            ctx.lineTo(x3, y3);
            ctx.lineTo(x4, y4);
            ctx.closePath();
            ctx.stroke();
            
		} else { alert("Error al crear el contexto"); }
	}   
}