 <!DOCTYPE html>
 <html>
 <head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <title>Delete Tabel Dengan Java Script</title>
 <script language="JavaScript">
    // konfirmasi menghapus record tertentu
    function konfirmasi(id)
    {
        tanya = confirm('Anda yakin ingin menghapus produk '+ id + '?');
        if (tanya == true)
            return true;
        else
            return false;
    }
 </script>

 </head>

 <body>
    <?php
        include "lat1.1_koneksi.php";
       
        $id = $_GET['id'];
        if ($id)
        {
            $query = mysql_query("DELETE FROM mahasiswa WHERE nim=$id");
            header("Location:".$_SERVER['PHP_SELF']);
        }
    ?>
 <form id="form1" name="form1" method="post" action="">
  <table width="350" border="1" align="center">
    <tr>
      <td colspan="4" align="center">Daftar Produk</td>
    </tr>
    <tr>
      <td align="center">No</td>
      <td align="center">Nama Produk</td>
      <td align="center">Harga</td>
      <td align="center">Keterangan</td>
    </tr>
    <?php
        $sql = mysql_query("SELECT * FROM mahasiswa");
    while ($row = mysql_fetch_array($sql))
    {
        $id = $row['nim'];
        $nama = $row['nama'];
        $hrg = $row['alamat'];
        $_SERVER['PHP_SELF'];
    ?>
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $nama; ?></td>
      <td><?php echo $hrg; ?></td>
      <td><?php echo "<a href=\"".$_SERVER['PHP_SELF']."?id=$id\" onclick=\"return konfirmasi('$id')\">Delete</a>"; ?></td>
    </tr>
    <?php
    }
    ?>
  </table>
 </form>
 <a href="?m=logout">Logout</a>
 </body>
 </html>