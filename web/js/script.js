$('tr>td>a.delete').click(function(){
   
   //deletedId=$(this).attr('id');
   
   deleteConfirmed=confirm('delete item ?');
   element=$(this).parent().parents('tr');
   deletedId=$(element).attr('id');
  alert(deletedId);
   if(deleteConfirmed)

			   $.get('delete/'+deletedId).success(function(data){element.remove();});
  
});

 