$(document).ready(function (){
    loadcart();
    loadwish();
    
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
      function loadcart(){
        $.ajax({
    method:"GET",
    url:"/loadcart",
    
    
    success:function(response){
      $('.cart-count').html('');
      $('.cart-count').html(response.count);
      
    
    }
     });
      }
    
    
      function loadwish(){
        $.ajax({
    method:"GET",
    url:"/loadwish",
    
    
    success:function(response){
      $('.wish-count').html('');
      $('.wish-count').html(response.count);
      
    
    }
     });
      }

      function loadwish(){
        $.ajax({
    method:"GET",
    url:"/loadwish",
    
    
    success:function(response){
      $('.wish-count').html('');
      $('.wish-count').html(response.count);
      
    
    }
     });
      }

      function loadcart(){
        $.ajax({
    method:"GET",
    url:"/loadcart",
    
    
    success:function(response){
      $('.cart-count').html('');
      $('.cart-count').html(response.count);
      
    
    }
     });
      }

      $('.addtocartbtn').click(function (e){
        e.preventDefault();
      
       var product_id=$(this).closest('.product_data').find('.prod_id').val();
       var product_qty=$(this).closest('.product_data').find('.qty-input').val();
        
       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
       $.ajax({
      method:"POST",
      url:"/addtoCart",
      data:{
        'product_id':product_id,
      'product_qty':product_qty,
      },
      
      success:function(response){
      alert(response.status);
      loadcart();

      }
       });
      });
      
      $('.increment-btn').click(function (e){
        e.preventDefault();
      
       
      
        var inc_value=$(this).closest('.product_data').find('.qty-input').val();
        var value=parseInt(inc_value,10);
        value=isNaN(value)?0:value;
        if(value <10){
          value++;
      
          $(this).closest('.product_data').find('.qty-input').val(value);
        }
        
      });
      
      
      $('.decrement-btn').click(function (e){
        e.preventDefault();
      
       
        var dec_value=$(this).closest('.product_data').find('.qty-input').val();
        var value=parseInt(dec_value,10);
        value=isNaN(value)?0:value;
        if(value > 1){
          value--;
          $(this).closest('.product_data').find('.qty-input').val(value);
        }
        
      });
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      
      $('.delete-cart-item').click(function (e){
        e.preventDefault();
      
      
        var prod_id=$(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
      method:"POST",
      url:"/deleteW",
      data:{
        'prod_id':prod_id,
      
      },
      success:function(response){
        window.location.reload();
        alert(response.status,);
      }
        });
      });
      $('.changequan').click(function (e){
        e.preventDefault();
        var prod_id=$(this).closest('.product_data').find('.prod_id').val();
        var qty=$(this).closest('.product_data').find('.qty-input').val();
      data={
        'prod_id':prod_id,
        'prod_qty':qty,
      }
       
        $.ajax({
      method:"POST",
      url:"updatecart",
      data:data,
      success:function(response){
        window.location.reload();
       
      }
        });
      
      });
      $('.addtowish').click(function (e){
        e.preventDefault();
      
       var product_id=$(this).closest('.prod_data').find('.prod_id').val();
       
        
       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
       $.ajax({
      method:"POST",
      url:"/addtowish",
      data:{
        'product_id':product_id,
      
      },
      
      success:function(response){
      alert(response.status);
      loadwish();
      }
       });
      });

      
  $('.addtocartbtn').click(function (e){
    e.preventDefault();
  
   var product_id=$(this).closest('.prod_data').find('.prod_id').val();
   var product_qty=$(this).closest('.prod_data').find('.qty-input').val();
    
   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
   $.ajax({
  method:"POST",
  url:"/addtoCart",
  data:{
    'product_id':product_id,
  'product_qty':product_qty,
  },
  
  success:function(response){
  
  alert(response.status);
  loadcart();
  }
   });
  });
  
  $('.increment-btn').click(function (e){
    e.preventDefault();
  
    // var inc_value=$('.qty-input').val();
  
    var inc_value=$(this).closest('.product_data').find('.qty-input').val();
    var value=parseInt(inc_value,10);
    value=isNaN(value)?0:value;
    if(value <10){
      value++;
      // $('.qty-input').val(value);
      $(this).closest('.product_data').find('.qty-input').val(value);
    }
    
  });
  
  
  $('.decrement-btn').click(function (e){
    e.preventDefault();
  
   
    var dec_value=$(this).closest('.product_data').find('.qty-input').val();
    var value=parseInt(dec_value,10);
    value=isNaN(value)?0:value;
    if(value > 1){
      value--;
      $(this).closest('.product_data').find('.qty-input').val(value);
    }
    
  });
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  
  $('.delete-cart-item').click(function (e){
    e.preventDefault();
  
  
    var prod_id=$(this).closest('.product_data').find('.prod_id').val();
    $.ajax({
  method:"POST",
  url:"/deletecart",
  data:{
    'prod_id':prod_id,
  
  },
  success:function(response){
    window.location.reload();
    alert(response.status,);
  }
    });
  });
  $('.changequan').click(function (e){
    e.preventDefault();
    var prod_id=$(this).closest('.product_data').find('.prod_id').val();
    var qty=$(this).closest('.product_data').find('.qty-input').val();
  data={
    'prod_id':prod_id,
    'prod_qty':qty,
  }
   
    $.ajax({
  method:"POST",
  url:"updatecart",
  data:data,
  success:function(response){
    window.location.reload();
   
  }
    });
  
  });

  function loadcart(){
    $.ajax({
method:"GET",
url:"/loadcart",


success:function(response){
  $('.cart-count').html('');
  $('.cart-count').html(response.count);
  

}
 });
  }
  
  $('.addtocartbtn').click(function (e){
  e.preventDefault();

 var product_id=$(this).closest('.prod_data').find('.prod_id').val();
 var product_qty=$(this).closest('.prod_data').find('.qty-input').val();
  
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
 $.ajax({
method:"POST",
url:"/addtoCart",
data:{
  'product_id':product_id,
'product_qty':product_qty,
},

success:function(response){
alert(response.status);
loadcart();
}
 });
});

$('.increment-btn').click(function (e){
  e.preventDefault();

  var inc_value=$('.qty-input').val();
  var value=parseInt(inc_value,10);
  value=isNaN(value)?0:value;
  if(value <10){
    value++;
    $('.qty-input').val(value);
  }
  
});


$('.decrement-btn').click(function (e){
  e.preventDefault();

  var dec_value=$('.qty-input').val();
  var value=parseInt(dec_value,10);
  value=isNaN(value)?0:value;
  if(value > 1){
    value--;
    $('.qty-input').val(value);
  }
  
});

$('.addtowish').click(function (e){
  e.preventDefault();

 var product_id=$(this).closest('.prod_data').find('.prod_id').val();
 
  
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
 $.ajax({
method:"POST",
url:"/addtowish",
data:{
  'product_id':product_id,

},

success:function(response){
alert(response.status);
}
 });
});
});
    