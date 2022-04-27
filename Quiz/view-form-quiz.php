<html> 
 
<head>     
    <title>Form Input Data Profil</title> 
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
                 
        <form action="<?=('quiz/cetak'); ?>" 
        method="post">             
        <table>                 
            <tr>                     
                <th colspan="3">                         
                <h3>Form Input Data Profil</h3>                    
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
            <input type="text" name="nim" id="nim">                     
        </td>                 
    </tr>
                    
    <tr>                     
        <td>Nama</td>                     
        <td>:</td>                     
        <td>                         
            <input type="text" name="nama" id="nama">                     
        </td>                 
    </tr>  
    <tr>                     
        <td>kelas</td>                     
        <td>:</td>                     
        <td>                         
            <input type="text" name="kelas" id="kelas">                     
        </td>                 
    </tr>         
    <tr>                     
        <td>Tanggal lahir</td>                     
        <td>:</td>                     
        <td>                         
            <input type="text" name="tgl" id="tgl">                     
        </td>                 
    </tr> 
    <tr>                     
        <td>Alamat</td>                     
        <td>:</td>                     
        <td>                         
            <input type="text" name="alamat" id="alamat">                     
        </td>                 
    </tr>                                
     
    <tr>                     
        <td colspan="3" align="center">                         
            <input type="submit" value="Submit">                     
        </td>                 
    </tr>             
</table>         
</form>     
</center> 
</font> 
</fieldset>
</body> 
 
 </html> 