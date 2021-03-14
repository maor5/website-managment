

    $( document ).ready(function() {
        $(".table td").mouseover(function(){
            $(this).css('background-color','red');
        }).mouseout(function(){
            $(this).css('background-color','white');
        });

        $(document).mouseleave(function () {
            alert("Goodbye! Hope to see back.");
            $(document).off('mouseleave');
        });


       

        
             amount=0;
            arr_price=document.getElementsByClassName("price");//array of prices
            arr_names=document.getElementsByClassName("card-title");//array of prices
        
            items = [ [],[],[],[],[],[] ];//6 itemes
            j=0;
         
            
        
                
                for(let i=0;i<arr_names.length;i++){
                   
                        items[i][j]=arr_names[i].innerHTML;
                        j++;
                        items[i][j]=arr_price[i].innerHTML;
                        j++;
                        items[i][j]=0
                        j--; 
                        j--;          
                   
                }
            
            $('.logo_pic ,#close').on('click',function(){
               $('.popup ').toggle();
               
             });
             $('.btn').on('click',function(){
                
                $('#order-button').attr("disabled",false);
				var productID = $(this).parent().attr("id");
				
                 name= $(this).parent().find('.card-title').html();
                price=$(this).parent().find('.price').html();
                $(".total-price").html(parseInt($(".total-price").html())+parseInt(price.replace('$')));
                for( i=0;i<6;i++){
                    if(items[i][0]==name){
                    items[i][2]++;
                    amount=items[i][2];
                    }
                    
                }
               
                if(amount==1){
					$("#form").append('<input type="hidden" name="product_'+productID+'" value="1" />');
					
                    //  var remove=`<button class="remove_button"> remove</button>`;
                    var creat= $('.double').clone();
                    $(creat).children("p").children('.product-id').append(productID);
                    $(creat).children("p").children('.product-name').append(name);
                    $(creat).children("p").children('.price-product').append(price);
                    $(creat).children("p").children('.amount-product').append(amount);
                    $('.output').append(creat.html());
                    // $(creat).wrap("<span class="+name+"></span>");
                    $('.remove_button').on('click',function(){
                   
                       var productID=$(this).parent().children('.product-id').html();
					   
                        var amount_to_remove=$(this).parent().children('.amount-product').html();
                        var price_to_remove=$(this).parent().children('.price-product').html();
                       var price_to_remove_num= parseInt(price_to_remove.replace('$'))
                       var total_price_num= $(".total-price").html();
                     
                        $(".total-price").html(total_price_num-price_to_remove_num);
                        name_to_cheak=($(this).parent().children('.product-name').html())
                        for( i=0;i<6;i++){
                            if(items[i][0]==name_to_cheak){
                                
                            items[i][2]--;
                            }
                            
                        }
                        if(amount_to_remove>1){
                            $(this).parent().children('.amount-product').html((amount_to_remove-1));
							$("#form input[name='product_"+productID+"']").attr('value',(amount_to_remove-1));
                        }
                        else{
                            $(this).parent().empty();
							$("#form input[name='product_"+productID+"']").remove();
                        }
                       
               });
                  
                   
                   
            }
               else{
              
                    var z=$(this).parent().find('.card-title').html();

                   $('.output').children().each(function(){
                      if($(this).children('.product-name').html()==z) {
                          
                        $(this).children('.amount-product').html(amount);
						$("#form input[name='product_"+productID+"']").attr('value',amount);
                      }
                   });
               
                

                    }

               
               });

               
              
        
        });
    