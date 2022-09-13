<html>
<style>
    body{
    width: 40%;
    
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>



<div>
  <form action="tampil.php" method="post">
    <label for="nama">Nama anda</label>
    <input type="text" id="nama" name="nama" placeholder="nama anda...">
   
    <p>Gender :<p>
    <input type="radio" id="laki-laki" name="kelamin" value="laki-laki">
    <label for="laki-laki">Laki-laki</label><br>
    <input type="radio" id="perempuan" name="kelamin" value="perempuan">
    <label for="perempuan">Perempuan</label>

</br></br><label for="lname">Alamat</label>
    <input type="text" id="alamat" name="alamat" placeholder="alamat anda...">

    <label for="country">Agama</label>
    <select id="country" name="country">
      <option value="islam">Islam</option>
      <option value="kristen">Kristen</option>
      <option value="katholik">Katholik</option>
      <option value="hindu">Hindu</option>
      <option value="budha">Budha</option>
      <option value="kunghucu">konghucu</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>