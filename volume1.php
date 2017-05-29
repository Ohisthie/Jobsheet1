<html>
 <head>
  <title>Hitung Volume</title>
 </head>
 <body bgcolor="lightblue">
  <form action="volume2.php" method="get">
  <table border="2" bgcolor="magenta" style="color:black">
    <tr>
  <th colspan="2">
  Menghitung Volume
  </th>
 </tr>
 <tr>
  <td>
      Masukan Panjang :
   </td>
   <td>
       <input type="text" name="panjang" maxlength="6" size="20">
   </td>
  </tr>
  <tr>
   <td>
       Masukan Lebar :
      </td>
   <td>
       <input type="text" name="lebar" maxlength="6" size="20">
      </td>
  </tr>
  <tr>
   <td>
       Masukan Tinggi :
      </td>
   <td>
       <input type="text" name="tinggi" maxlength="6" size="20">
      </td>
  </tr>
  <tr>
   <td>
       <input type="submit" name="hitung" value="Hitung">
      </td>
   <td>
       <input type="reset" name="reset" value="Hapus">
   </td>
  </tr>
  </form>
     <form action="volume1.php">
  <tr>
  <td colspan='2'>
   <center>
   <input type="submit" name="submit" value="Home">
   </center>
  </td>
 </tr>
 </table>
   </form>
  </body>
 </html>