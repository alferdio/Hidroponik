    setInterval(function(){
        $.ajax({
            url:'/neos/readdata.php',
            method:'get',
            data:{},
            success:function(response){
                var arr=$.parseJSON(response);
                var a=arr['field1'];
                var b=arr['field2']
                var c=arr['field3']
                var str="Kondisi : ";
                var e = parseFloat(arr['field1']);
                var d = parseFloat(arr['field2']);
                $('#tds').html(a.concat(""));
                $('#ph').html(b.concat(""));
                $('#s').html(c.concat(" cm"));
                // statemen d
                if (d<5.5){
                /*var res = str.concat("Tidak Baik")*/
                var str = "Tidak Baik"
                var res = str.fontcolor("red")
                document.getElementById("status").innerHTML = res;
                }
                else if (d>5.5 && d<6.5)
                {
                /* var res = str.concat("Baik")*/
                var str = "Baik"
                var res = str.fontcolor("green")
                document.getElementById("status").innerHTML = res;   
                }
                else if (d>6.5)
                {
                /* var res = str.concat("tidak Baik")*/
                var str = "Tidak Baik"
                var res = str.fontcolor("red")
                document.getElementById("status").innerHTML = res;   
                }
                // statemen e
                
                if (e<900)
                {
                var str = "Tidak Baik"
                var res = str.fontcolor("red")
                document.getElementById("statuse").innerHTML = res;   
                }
                else if (e>900 && e<1200)
                {
                var str = "Baik"
                var res = str.fontcolor("green")
                document.getElementById("statuse").innerHTML = res;   
                }
                else if (e>1200)
                {
                var str = "Tidak Baik"
                var res = str.fontcolor("red")
                document.getElementById("statuse").innerHTML = res;   
                }
                
                
                console.log(e);
                 console.log(d);
                 console.log(arr['field1']);
                 console.log(arr['field2']);
                 console.log(arr['field3']);
            }
        });
    },1000);

