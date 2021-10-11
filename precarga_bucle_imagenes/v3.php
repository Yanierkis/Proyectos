
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Preload Image</title>
<?php

$url='http://150.214.182.170/guadalquivir_biblia/';
$data= file_get_contents('http://150.214.182.170/guadalquivir_biblia/');
$cont=substr_count($data, 'K');
?>

<script type="text/javascript">
var imageData = [
    //Example Images
    '001.jpg','002.jpg','003.jpg',
    '004.jpg','005.jpg'
];

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function demo(x) {
    var imagenes=document.getElementsByTagName("img");
    var longitud = imagenes.length;
    for(x = 0, y = longitud; x < y; x++){
    
    if(x==0){
      imagenes[longitud-1].style.display = "none";
      imagenes[x].style.display = "";
    }else if(x == (longitud-1)){
      imagenes[x].style.display = "";
      imagenes[x-1].style.display = "none";
      x = -1;
    }
    else{
      imagenes[x].style.display = "";
      imagenes[x-1].style.display = "none";
    }



    await sleep(2000);

    
    }

}

function preloadImage(data)
{
    var base_path = 'images/';
    var total = data.length;
    var i = 0;
    var imgArray = new Array();
    for(i=0; i<total; i++)
    {
    var tmpImage = new Image();
    tmpImage.src = base_path + data[i];
    imgArray.push(tmpImage);
    }
    demo();
}

</script>

</head>


<body onload="preloadImage(imageData);">
<!--<body>-->



<table border="0" cellpadding="0" cellspacing="0">
    <tr id="muestra">
        
    </tr>
    
    
</table>

<script>
    var longitud2 = <?php echo $cont;?>;
    //var longitud2 = imageData.length;
    for(x = 0, y = longitud2; x < y; x++){
        var aux= 'http://150.214.182.170/guadalquivir_biblia/guadalquivir-'+x+'.jpg';
        var mu=document.getElementById('muestra');
        var col=document.createElement('td');
        var ima=document.createElement('img');
        ima.setAttribute( 'src',aux );
        ima.setAttribute( 'style','display:none' );
        col.appendChild(ima);
        mu.appendChild(col);
    }


</script>

</body>
</html>