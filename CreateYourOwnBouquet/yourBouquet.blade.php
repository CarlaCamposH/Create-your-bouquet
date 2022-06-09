<x-web title="{{__('Crea tu propio ramo')}}">
    @push('styles')
        <link href="{{ asset('css/yourbouquet.css') }}" rel="stylesheet">
    @endpush
    <div class="maain">
        <section class="module bg-dark-30" data-background="{{asset('images/8MKwudhBqJ0NKvcwb3NXV6P1fuFVWSlDaHg0EAh4.jpg')}}">
            <div class="row">
                <div class="col-12 mt-5">
                    <blockquote class="blockquote">
                        <p class="module-title font-alt mt-5 mb-1 text-white">
                            @if( locale()=='ca') Crea el teu propi Ram @endif
                            @if( locale()=='es') Crea tu propio Ramo @endif
                            @if( locale()=='en') Create your own Bouquet @endif
                        </p>
                    <footer class="blockquote-footer font-alt text-center text-white">
                        @if( locale()=='ca') Arrossega les imatges a la dreta per crear el teu ram! @endif
                        @if( locale()=='es') ¡Arrastra las imágenes a la derecha para crear tu ramo! @endif
                        @if( locale()=='en') Drag the images to the right to create your bouquet! @endif
                    </footer>
                    </blockquote>
                </div>
            </div>
        </section>
        <section class="module-small">
            <div class="col justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-5 m-2 text-dark">
                        <div class="container">   
                            <button class="btn dropdownN text-white rounded m-2 dropdown-toggle" type="button" data-toggle="collapse" data-target="#flower" aria-expanded="false" aria-controls="flower">
                                @if( locale()=='ca') FLOR @endif
                                @if( locale()=='es') FLOR @endif
                                @if( locale()=='en') FLOWER @endif
                                
                          </button> 
                        </div>
                        {{-- FLOWERS --}}
                        <div class="row collapse" id="flower">
                            @foreach ($products as $item)
                                @if($item->categories == '0FL0')
                            <div draggable="true" id="{{$item->id}}" class="{{$item->id}}" name="{{$item->id}}" producto="{{$item->id}}" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" style="margin: 0.5rem; position:relative;" onmouseover="hover({{$item->id}})" onmouseout="hoverOut({{$item->id}})">
                                <div style="position: absolute; background-color: black; width: 100%; height:100%; display:none; opacity: 0.6;" class="rounded remove1" id="remove" test="{{$item->id}}" ></div>
                                <div style="position: absolute; display:none;" class="rounded text-white m-2" id="remove2" test="{{$item->id}}" ><b>Nom:</b> {{$item->getLocalizedName()}} <br><b>Preu:</b> {{$item->price}}€ per unitat</div>
                                <div style="height: 100px; width: 100px; background-image: url(http://risistirem.com/resources/{{$item->images}}); background-size: 100%;" class="m-2 rounded" price="{{$item->price}}" nombre="{{$item->getLocalizedName()}}" productId="{{$item->id}}"></div>
                                <div price ="{{$item->price}}" id="price" class="collapse"  nombre="{{$item->getLocalizedName()}}"><b>Nom:</b> {{$item->getLocalizedName()}} <br><b>Preu:</b> {{$item->price}}€ per unitat</div>      
                            </div>
                           

                                @endif
                            @endforeach
                        </div>

                        <div class="container">   
                            <button class="btn dropdownN text-white rounded m-2 dropdown-toggle" type="button" data-toggle="collapse" data-target="#plant" aria-expanded="false" aria-controls="plant">
                                @if( locale()=='ca') PLANTA @endif
                                @if( locale()=='es') PLANTA @endif
                                @if( locale()=='en') PLANT @endif
                          </button> 
                        </div>
                        {{-- PLANTS --}}
                        <div class="row collapse" id="plant">
                            @foreach ($products as $item)
                                @if($item->categories == '0PT0')
                                <div draggable="true" id="{{$item->id}}" class="{{$item->id}}" name="{{$item->id}}" producto="{{$item->id}}" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" style="margin: 0.5rem; position:relative;" onmouseover="hover({{$item->id}})" onmouseout="hoverOut({{$item->id}})">
                                    <div style="position: absolute; background-color: black; width: 100%; height:100%; display:none; opacity: 0.6;" class="rounded remove1" id="remove" test="{{$item->id}}" ></div>
                                    <div style="position: absolute; display:none;" class="rounded text-white m-2" id="remove2" test="{{$item->id}}" ><b>Nom:</b> {{$item->getLocalizedName()}} <br><b>Preu:</b> {{$item->price}}€ per unitat</div>
                                    <div style="height: 100px; width: 100px; background-image: url(http://risistirem.com/resources/{{$item->images}}); background-size: 100%;" class="m-2 rounded" price="{{$item->price}}" nombre="{{$item->getLocalizedName()}}" productId="{{$item->id}}"></div>
                                    <div price ="{{$item->price}}" id="price" class="collapse"  nombre="{{$item->getLocalizedName()}}"><b>Nom:</b> {{$item->getLocalizedName()}} <br><b>Preu:</b> {{$item->price}}€ per unitat</div>      
                                </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="container">   
                            <button class="btn dropdownN text-white rounded m-2 dropdown-toggle" type="button" data-toggle="collapse" data-target="#wrap" aria-expanded="false" aria-controls="wrap">
                                @if( locale()=='ca') ENVOLTORI @endif
                                @if( locale()=='es') ENVOLTORIO @endif
                                @if( locale()=='en') WRAP @endif
                          </button> 
                        </div>
                        {{-- WRAPS --}}
                        <div class="row collapse" id="wrap">
                            @foreach ($products as $item)
                                @if($item->categories == '0EN0')
                                <div draggable="true" id="{{$item->id}}" class="{{$item->id}}" name="{{$item->id}}" producto="{{$item->id}}" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" style="margin: 0.5rem; position:relative;" onmouseover="hover({{$item->id}})" onmouseout="hoverOut({{$item->id}})">
                                    <div style="position: absolute; background-color: black; width: 100%; height:100%; display:none; opacity: 0.6;" class="rounded remove1" id="remove" test="{{$item->id}}" ></div>
                                    <div style="position: absolute; display:none;" class="rounded text-white m-2" id="remove2" test="{{$item->id}}" ><b>Nom:</b> {{$item->getLocalizedName()}} <br><b>Preu:</b> {{$item->price}}€ per unitat</div>
                                    <div style="height: 100px; width: 100px; background-image: url(http://risistirem.com/resources/{{$item->images}}); background-size: 100%;" class="m-2 rounded" price="{{$item->price}}" nombre="{{$item->getLocalizedName()}}" productId="{{$item->id}}"></div>
                                    <div price ="{{$item->price}}" id="price" class="collapse"  nombre="{{$item->getLocalizedName()}}"><b>Nom:</b> {{$item->getLocalizedName()}} <br><b>Preu:</b> {{$item->price}}€ per unitat</div>      
                                </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="container">   
                            <button class="btn dropdownN text-white rounded m-2 dropdown-toggle" type="button" data-toggle="collapse" data-target="#complement" aria-expanded="false" aria-controls="complement">
                                @if( locale()=='ca') COMPLEMENTS @endif
                                @if( locale()=='es') COMPLEMENTOS @endif
                                @if( locale()=='en') COMPLEMENTS @endif
                          </button> 
                        </div>
                        {{-- COMPLEMENTS --}}
                        <div class="row collapse" id="complement">
                            @foreach ($products as $item)
                                @if($item->categories == '0CM0')
                                <div draggable="true" id="{{$item->id}}" class="{{$item->id}}" name="{{$item->id}}" producto="{{$item->id}}" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" style="margin: 0.5rem; position:relative;" onmouseover="hover({{$item->id}})" onmouseout="hoverOut({{$item->id}})">
                                    <div style="position: absolute; background-color: black; width: 100%; height:100%; display:none; opacity: 0.6;" class="rounded remove1" id="remove" test="{{$item->id}}" ></div>
                                    <div style="position: absolute; display:none;" class="rounded text-white m-2" id="remove2" test="{{$item->id}}" ><b>Nom:</b> {{$item->getLocalizedName()}} <br><b>Preu:</b> {{$item->price}}€ per unitat</div>
                                    <div style="height: 100px; width: 100px; background-image: url(http://risistirem.com/resources/{{$item->images}}); background-size: 100%;" class="m-2 rounded" price="{{$item->price}}" nombre="{{$item->getLocalizedName()}}" productId="{{$item->id}}"></div>
                                    <div price ="{{$item->price}}" id="price" class="collapse" nombre="{{$item->getLocalizedName()}}"><b>Nom:</b> {{$item->getLocalizedName()}} <br><b>Preu:</b> {{$item->price}}€ per unitat</div>      
                                </div>
                                @endif
                            @endforeach
                        </div>
  
                        <div class="justify-content-center" style="margin-top: 5rem;">
                            <div id="basket" class="col-12 dest text-white text-center" ondrop="drop_handler(event);" ondragover="dragover_handler(event);" ><i class="fas fa-trash fa-5x" style="color: #dc3545;" ondrop="drop_handler(event);" ondragover="dragover_handler(event);" id="basket"></i></div>
                        </div>
                    </div>
                    <div class="col-5 m dest text-dark" style="height: 500px; background-image: url({{url('images/ramsupremeLessOpacity.png')}}); background-repeat: no-repeat; background-position:center; background-size: contain;">
                        <div id="dest_copy" style="height: 100%; width: 100%;" ondrop="drop_handler(event);" ondragover="dragover_handler(event);" class="test"></div>  
                    </div> 
                </div>

                <div class="row justify-content-center">
                    <div class="col-5 m-2"></div>
                    <div  class="row col-5 m-2 d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <h3>TOTAL: </h3>
                        </div>
                        <div class="float-right">
                            <h2 class="font-weight-bold" name="totalPrice" id="totalPrice" totalPrice="0" style="color: #794903;">0€</h2>
                        </div>                     
                    </div>     
                </div>

                <div class="row justify-content-center">
                    <div class="col-5 m-2"></div>
                    <div  class="row col-5 m-2">
                        <form id="target" method="POST" action="yourBouquetCart" >
                            @csrf
                            <input type="hidden" name="bouquetData" id="bouquetData" value="">
                            <div class="col"><button class="btn btn-block btn-round btn-b">{{__('Añade al Carrito')}}</button></div>
                        </form>
                    </div> 
                    
                </div> 
            </div>

        </section>
    
    
        <hr class="divider-d">
        @include('layouts.last-section')
    </div>
    @push('scripts')
    <script>
        var flag = false;
        var total = document.getElementById('totalPrice');
        var id_number=0;
        function dragstart_handler(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
            ev.effectAllowed = "copyMove";
        }
        function dragover_handler(ev) {
            ev.preventDefault();
        }
        function drop_handler(ev) { 
            var nodeCopy;
            ev.preventDefault();
            var id = ev.dataTransfer.getData("text");
            var element = document.getElementById(id);
            if( ev.target.id == "dest_copy") {
                    var cantityNumber = 0;
                    //new nodes created
                    var div = document.createElement("div");
                    div.classList.add("row", "m-1");
                    var button1 = document.createElement("button");
                    button1.classList.add("btn-light","rounded", "m-3", "newColor2", "font-weight-bold");
                    button1.setAttribute("style", "font-size: 20px; width: 30px; height: 30px; border:none; line-height: normal");
                    button1.innerText = "+";
                    
                    var button2 = document.createElement("button");
                    button2.classList.add("btn-light","rounded", "text-center", "m-3", "text-dark", "font-weight-bold");
                    button2.setAttribute("style", "font-size: 20px; width: 30px; height: 30px; border:none; line-height: normal");
                    button2.innerText = "-";
                    
                    var cantity = document.createElement("p");
                    cantity.setAttribute("style", "font-size: 32px; width: 3rem; text-align:center;");
                    cantity.setAttribute("cantity", "1");
                   
                    var existingItem = exists(element); 

                if(existingItem==null){
                    id_number++;
                    cantity.id="cant"+id_number;
                    nodeCopy = document.getElementById(id).cloneNode(true);
                    nodeCopy.id = "newId"+id_number;
                    nodeCopy.appendChild(div);
                    div.appendChild(button1);
                    div.appendChild(cantity);
                    div.appendChild(button2);
                    cantityNumber = cantity.getAttribute('cantity');
                    cantity.innerText = cantityNumber ;
                    //sums cantity
                    button1.onclick = function(event){
                        cantityNumber = cantity.getAttribute('cantity');
                        cantityNumber ++;
                        cantity.setAttribute("cantity", cantityNumber);
                        cantity.innerText = cantityNumber ;
                        calcPrice(total);
                    }
                    //rests cantity
                    button2.onclick = function(event){
                        cantityNumber = cantity.getAttribute('cantity');
                        cantityNumber --;
                        cantity.setAttribute("cantity", cantityNumber);
                        cantity.innerText = cantityNumber ;                        
                        if(cantityNumber == 0){
                            document.getElementById(nodeCopy.id).remove();
                        }
                        calcPrice(total);
                        
                    }
                    nodeCopy.removeAttribute('onmouseover');
                    nodeCopy.removeAttribute('onmouseout');
                    nodeCopy.removeChild(nodeCopy.childNodes[1]);
                    nodeCopy.removeChild(nodeCopy.childNodes[2]);
                    nodeCopy.classList.add("backgroundColor", "rounded", "text-white","row", "d-flex");
                    nodeCopy.childNodes[5].setAttribute("style", "padding-top:30px;");
                    nodeCopy.childNodes[5].classList.add("col-7");
                    nodeCopy.childNodes[5].classList.remove("collapse");
                    nodeCopy.childNodes[7].setAttribute("style", "padding-top:20px; float:right;");
                    ev.target.appendChild(nodeCopy);
                    calcPrice(total);     
                }else{
                        var test2 = existingItem.getElementsByClassName('row');
                        var test = test2.item(0);
                        var test4 = test.childNodes[1];
                        var test3 = test4.getAttribute('cantity');
                        test3 ++;
                        test4.setAttribute('cantity', test3);
                        test4.innerText = test3 ;
                        calcPrice(total);                 
                    
                }
            }
            if( ev.target.id == "basket" && /*document.id ==*/document.getElementById(document.querySelector('[id^="newId"]').id)) {
                console.log(id);
                document.getElementById(id).remove();
                calcPrice(total);
            
            }
        }
        function dragend_handler(ev) {
        }
        function exists(element){
            var ret = null;
            document.getElementById("dest_copy").childNodes.forEach(function(item){
                if(element.getAttribute('producto')==item.getAttribute('producto')){
                    ret = item; //return item si no existe 
                }
            });
           return ret;         //return null si existe
        }

        function calcPrice(total){
            //recorremos la array para coger todos los preciosy las cantidades y calcular el precio total
            let totalpriceT = 0;
            var bouquetDataV=[];        

            document.getElementById("dest_copy").childNodes.forEach(function(item){
                let getPrice = item.childNodes[3].getAttribute('price');
                let getCant = item.childNodes[7].childNodes[1].getAttribute('cantity');               
                totalpriceT = totalpriceT + getPrice * getCant;
                bouquetDataV.push(item.childNodes[3].getAttribute('productId'));
                bouquetDataV.push(item.childNodes[3].getAttribute('nombre'));
                bouquetDataV.push(item.childNodes[3].getAttribute('price'));
                bouquetDataV.push(item.childNodes[7].childNodes[1].getAttribute('cantity'));

                document.getElementById('bouquetData').setAttribute('value', bouquetDataV); 
            });
            bouquetDataV.push(totalpriceT.toFixed(2));
            

            document.getElementById('bouquetData').setAttribute('value', JSON.stringify(bouquetDataV)); 
            console.log(document.getElementById('bouquetData'));
            total.setAttribute('totalPrice', totalpriceT.toFixed(2)); 
            document.getElementById("totalPrice").innerText=totalpriceT.toFixed(2) + "€";
        }

        function hover(test){
            document.getElementById(test).childNodes[1].style.display="block";
            document.getElementById(test).childNodes[3].style.display="block";
        }
        function hoverOut(test){
            document.getElementById(test).childNodes[1].style.display="none";
            document.getElementById(test).childNodes[3].style.display="none";
        }

        function test(bouquetData){
            console.log(bouquetData);
            var data = document.getElementById('bouquetData');
            var form = document.getElementById('target');
            data.value = JSON.stringify(bouquetData);
            console.log(data);
            form.submit();
        }

    </script>
    @endpush

</x-web>