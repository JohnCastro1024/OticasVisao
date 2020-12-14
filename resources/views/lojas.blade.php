@extends('templates\templatemain')				
@section('titulo', 'Lojas')
@section('conteudo_principal')
<style type="text/css">

    
    
.buttonlojas{
    font:normal 15px Tahoma, Geneva, sans-serif !important;
    font-style:normal !important;
    color:#ffffff;
    background:#00c206;
    border:2px solid #000000;
    text-shadow:0px -1px 1px #222222;
    box-shadow:0px 8px 5px #000000;
    -moz-box-shadow:0px 8px 5px #000000;
    -webkit-box-shadow:0px 8px 5px #000000;
    border-radius:10px 10px 10px 10px;
    -moz-border-radius:10px 10px 10px 10px;
    -webkit-border-radius:10px 10px 10px 10px;
    max-width:150px;
    padding:5px 19px;
    cursor:pointer;
    margin:0 auto;
    }
    .buttonlojas:active{
    cursor:pointer;
    position:relative;
    top:2px;
    }
    
    
    #cx1{
    position:relative;
    
    height: 220px;
   
   
    
    
    }
    
    #cx2{
    position:relative;
    
    height: 220px;
  
    
    
    }
    
    #cx3{
    position:relative;
    height: 220px;
    
    }
    
    #cx4{
    position:relative;
    
    height: 220px;
    
   
    }

    #cx5{
    
    position:relative;
    height: 220px;
    
    }
    
    #cx6{
    position:relative;
    height: 220px;
    }
    #cx7{
    position:relative;
    height: 220px;
    }
    #cx8{
    position:relative;
    height: 220px;
    }
    #cx9{
    position:relative;
    height: 220px;
    }
    
    #cx10{
    position:relative;
    height: 220px;
    }
    
    #cx11{
    position:relative;
    height: 220px;
    }
    
    #cx12{
    position:relative;
    height: 220px;
    }
    #cx13{
    position:relative;
    height: 220px;
   
    }
    #cx14{
    position:relative;
  
    height: 220px;
   
    
    }
    
   
    .divmaster1{
    position:absolute;
    width: 50%;
    height: 100%;
    max-width: 1920px;
    max-height: 1080px;
    min-width: 320px;
    min-height: 240px;
   background:purple;

    }
    
    .divmaster2{
    position:absolute;
    top:9%;
    left: 50%;
    width: 50%;
    height: 100%;
    max-width: 1920px;
    max-height: 1080px;
    min-width: 320px;
    min-height: 240px;
   background:yellowgreen;
    }

    .divmaster{
    position:relative;
    width:100%;
    height:100%;
    max-width: 1920px;
    max-height: 1080px;
    min-width: 320px;
    min-height: 240px;
  background-color: violet;

    }
  
    
    .textimg{
 
    color: red;
    
    }
    div{
        
        
    }
    .imgdiv{
        
        max-width: 200px;
        max-height: 160px;
        min-width: 30px;
        min-height: 18px;


        
    }
    .voltar {
                padding: 3px;
                position: absolute; 
                top: 10px; 
                right: 20px;
               	width: 60px;
                display: inherit;
                text-decoration: none;
                font-size: 20px;
                color: red;
                text-align: center;
                border:grey 2px solid;
                border-radius: 20px;
                
            }
            h1{
                font-size: 30px;
            }
            .sair {
                padding: 10px;
                position: absolute; 
                top: 10px; 
                right: 20px;
               	width: 60px;
                display: inherit;
                text-decoration: none;
                font-size: 20px;
                color: red;
                text-align: center;
                border:grey 2px solid;
                border-radius: 20px;
                
            }
 
</style>
    
        
  



<div class="container-fluid">
</p><h1><b>CONFIRA NOSSAS LOJAS:</b></h1><p><br><br>
   
    <div class="row">
        
<div class="col-sm-6 col-xs-12" id="cx1">

        <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
        <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
        </div>
        
        
        <div class="col-sm-6 col-xs-12"id="cx3">
            <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
            <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
            </div>
        
        
    </div>
        



    <div class="row">



    <div class="col-sm-6 col-xs-12"id="cx2">
    
        <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
        <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
        </div>
        
        
        
        
        <div class="col-sm-6 col-xs-12" id="cx4">
            <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
            <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
            </div>
        
        
        
        
        
</div>

<div class="row">
        
    <div class="col-sm-6 col-xs-12" id="cx5">
    
        <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
        <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
        </div>
            
            
            <div class="col-sm-6 col-xs-12"id="cx7">
                <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
                <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
                </div>
            
            
        </div>

        <div class="row">
        
            <div class="col-sm-6 col-xs-12" id="cx6">
            
                <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
                <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
                </div>
                    
                    
                    <div class="col-sm-6 col-xs-12"id="cx8">
                        <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
                        <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
                        </div>
                    
                    
                </div>
        
                <div class="row">
        
                    <div class="col-sm-6 col-xs-12" id="cx9">
                    
                        <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
                        <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
                        </div>
                            
                            
                            <div class="col-sm-6 col-xs-12"id="cx11">
                                <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
                                <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
                                </div>
                            
                            
                        </div>

                        <div class="row">
        
                            <div class="col-sm-6 col-xs-12" id="cx10">
                            
                                <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
                                <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
                                </div>
                                    
                                    
                                    <div class="col-sm-6 col-xs-12"id="cx12">
                                        <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
                                        <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
                                        </div>
                                    
                                    
                                </div>
                                <div class="row">
        
                                    <div class="col-sm-6 col-xs-12" id="cx13">
                                    
                                        <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
                                        <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
                                        </div>
                                            
                                            <div class="col-sm-6 col-xs-12"id="cx14">
                                                <img class="imgdiv"src="https://img.ibxk.com.br/2019/07/26/26000403908396.jpg?w=328"/>
                                                <p style="display: inline-block;margin-left:5px;position: absolute;"><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/yF1z5rGpAJZLXDae8');" style="color:#FFFFFF !important;">TOUR 360&deg;</button><br><br><button class="buttonlojas" onclick="window.open('https://goo.gl/maps/4zWH2ZGHojk');" style="color:#FFFFFF !important;">LOCALIZA&Ccedil;&Atilde;O</button><br><br><button class="buttonlojas" onclick="window.open('https://linktr.ee/flulook');" style="color:#FFFFFF !important;">CONTATO</button></p>
                                                </div>
                                            
                                            
                                        </div>





</div>
@endsection