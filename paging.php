<?php 

?>

    <head>
        <style type="text/css">    
            .pg-normal {
                color: black;
                font-weight: normal;
                text-decoration: none;    
                cursor: pointer;    
            }
            .pg-selected {
                color: black;
                font-weight: bold;        
                text-decoration: underline;
                cursor: pointer;
            }
        </style>
        
        <script type="text/javascript" src="paging.js"></script>
    </head>
    
    <body>
        <form action="" method="get" enctype="application/x-www-form-urlencoded">
        <table id="results">
            <tr>
                <th>#</th>
                <th>field</th>
            </tr>
          
               <?php
               $number = 0;
         for ($aa=0; $aa<20; $aa++) { 
             $number += 1;
        echo ' <tr><td>'.$number.'</td>
                <td><input type="text" name="field-name" value="'.$aa.'"></td>
            </tr>';
         
       
         }
         
           ?>
          
          
            
            <select id="alex">
    <option  value=9 >10</option>
    <option  value=20 >20</option>
</select>

    
        </table>
        <div id="pageNavPosition"></div>
        <div><input type="submit" onclick="alert('Hey, this is just a sample!'); return false;" />&nbsp;<input type="reset" /></div>
    </form>
    
       
           
            
    
        
        
        
    <script type="text/javascript">


 var x = document.getElementById("alex");
            var y = x.options[x.selectedIndex].value;
            console.log(y);
            
        var pager = new Pager('results',y); 
        pager.init(); 
        
        pager.showPageNav('pager', 'pageNavPosition'); 
        pager.showPage(1);
     
        console.log(pager);

    //--></script>
       
              
       
    
    
   
    
    </body>
</html>
