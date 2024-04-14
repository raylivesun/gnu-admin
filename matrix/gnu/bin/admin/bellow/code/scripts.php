<?php
     date_modify_time(); // date modification time
     date_modify_timezone(); // date modification timezone
     date_modify_date(); // date modification date


     // dinner successfully modified the date field in the table
     echo '<table class="table table-striped table-responsive>
     <thead>
       <tr>
         <th>Date</th>
         <th>Time</th>
         </tr>
     <thead> 

     <tbody>
           <tr>
               <td>"Date"</td>
               <td>"Time"</td>
            </tr>   
     </tbody> 

     <tfoot>
     </table>
     ';
     echo date('Y-m-d H:i:s', $this->sapi_windows_vt100_support_date_format);
?>