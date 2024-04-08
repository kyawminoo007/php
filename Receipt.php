<?php
$A= explode (",",$_GET["item"]);
$B= explode (",",$_GET["price"]);
$C= explode (",",$_GET["qty"]);
$D= explode (",",$_GET["subtotal"]);
$result= array();
foreach ( $A as $id => $key ) 
{

    $result[$key]=array(
    'item'=> $A[$id],
    'price'=> $B [$id],
    'qty'=> $C [$id],
    'sub_ttal'=> $D [$id],
    );
}?>

<html><head>
<title>Pharmacy POS Receipt</title>
<style type="text/css">

#thermal-pos {
box-shadow: 0 0 5mm #EEE;
;
margin: 0 auto;
max-width: 58mm;
line-height: 6mm;}

#thermal-pos h2 {
font-size: 4mm;
line-height: 13px;}

#thermal-pos h3 {
font-size: 4mm;
text-align: right;
line-height: 13px;}

#thermal-pos .label {
text-align: center;
font-family: sans-serif;
font-size: 3mm;}


#thermal-pos .informasi {
vertical-align: text-top;
max-width: 45mm;
font-size: 3mm;
font-family: sans-serif;
word-wrap: break-word;}

#thermal-pos .informasi3 {
vertical-align: text-top;
max-width: 45mm;
font-size: 3mm;
font-family: sans-serif;
text-align: right;
word-wrap: break-word;}

#thermal-pos .informasi2 {
vertical-align: text-top;
max-width: 45mm;
font-size: 4mm;
text-align: right;
word-wrap: break-word;}

#thermal-pos .listitem {
font-size: 4mm;
height: 5mm;}

#thermal-pos table {
width: 100%;}
table, th {
  border:Nill;
  text-align:left;
  font-size: 2.95mm;
  font-family: sans-serif;
  
}

#thermal-pos .item {
max-width: 30mm;
font-size: 3.7mm;
padding: 2.5px;
word-wrap: break-word;}

#thermal-pos .total {
vertical-align: bottom;
text-align: left;
font-size: 4.2mm;}

#thermal-pos .total2 {
vertical-align: bottom;
text-align: right;
font-size: 3.7mm;}

#thermal-pos .qty {
text-align: left;
}

#thermal-pos .bawah {
margin-top: 2.5mm;
text-align: center;
height: 30px;
font-size: 3mm;
font-family: sans-serif;
page-break-after: auto;}



</style></head>

<body onload="window.print()" on focus="window.close()">

<div id= "thermal-pos">
   <div class= "label">
   <b>Dr. Neo 24 Hours Clinic</b>
   <br> Room ( A ), Bagan Road, 56 Ward, South Dagon Township
   <br>09 - 12345678
   </div>
   <div align='centre'>.......................................................</div>
 <table>
<tr>
    <td class="informasi">Invoice ID</td>
    <td class="informasi3">&nbsp;<?php echo $_GET["id_invoice"] ?></td>
</tr>
<tr>
    <td class= "informasi">Date</td>
    <td class= "informasi3">&nbsp;<?php echo $_GET["Date"] ?></td>
</tr>
</table>
<div align='center'>.......................................................</div>
<table>
<tbody>


<tr>
    <th align='left'>Qty</th>
    <th align='left'>Items</th>
    
    <th align='left'>Price</th>
    <th class= "informasi3">Amount</th>
  </tr>
 

<?php
foreach($result as $row) {
echo'
  <tr>
    <td>'.$row['qty'].'</td>
    <td>'.$row['item'].'</td>
    
    <td>'.$row['price'].'</td>
    <td class= "informasi3">'.$row['sub_ttal'].'</td>
  </tr>';} ?>
 
<tr>
    <th align='left'>Total</th>
    <th></th>
    <th></th>
    <th class= "informasi3"><?php echo $_GET["total"]?></th>
</tr>
<tr>
    <th align='left'>Cash</th>
    <th></th>
    <th></th>
    <th class= "informasi3"><?php echo $_GET["Payment"]?></th>
</tr>
<tr>
    <th align='left'>Balance</th>
    <th></th>
    <th></th>
    <th class= "informasi3"><?php echo $_GET["Balance"]?></th>

</tr>




</div>
</tbody>
</table>

<div align='center'>.......................................................</div>

<p class= "bawah">Good Solds are not returnable</p>

</body>

</html>
