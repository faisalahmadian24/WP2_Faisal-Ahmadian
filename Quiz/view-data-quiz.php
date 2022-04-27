<html> 
 
<head>     
    <title>Tampil Input Data Profil</title> 
</head>

<style>
    fieldset {
        width: 45%;
        margin: 20px auto;
        border-radius: 5px;
    }

</style>

<body bgcolor='pink'>
<fieldset>
<font face="Courier new">     
    <center>         
        <table>             
            <tr>                 
                <th colspan="3">                     
                <h3>Tampil Input Data Profil</h3>                
                </th>             
            </tr>             
            <tr>                 
                <td colspan="3">                     
                    <hr>                 
                </td>             
            </tr>             
            <tr>                 
                <td>NIM</td>                 
                <td>:</td>                 
                <td>                     
                    <?= $nim; ?>                 
                </td>             
            </tr>             
            <tr>                 
                <td>Nama</td>                 
                <td>:</td>                 
                <td>                     
                    <?= $nama; ?>                 
                </td>             
            </tr>
            <tr>                 
                <td>Kelas</td>                 
                <td>:</td>                 
                <td>                     
                    <?= $kelas; ?>                 
                </td>             
            </tr>     
            <tr>                 
                <td>Tanggal Lahir</td>                 
                <td>:</td>                 
                <td>                     
                    <?= $tgl; ?>                 
                </td>             
            </tr>     
            <tr>                 
                <td>Alamat</td>                 
                <td>:</td>                 
                <td>                     
                    <?= $alamat; ?>                 
                </td>             
            </tr>                  
                       
            <tr>                 
                <td colspan="3" align="center">                     
                    <a href="<?= base_url('quiz'); ?>">Kembali</a>                 
                </td>             
            </tr>         
        </table>     
    </center>
</fieldset> 
</body> 
 
</html>