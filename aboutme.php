<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>aboutme</title>
</head>
<body>
    <table border="1" cellspacing="1" cellpadding="1">
        <input type="checkbox" onclick="ubahMode()">

        <tr>
            <td>
                <h2 class="section-tittle">About Me</h2>
                <img src="Fotoku.jpeg" width="250" height="200">

            </td>
            <td class="Data">
                <pre><p>Nama                : Silvia Ananda</p></pre>
                <pre><p>NIM                 : 2009106120</p></pre>
                <pre><p>Program Studi       : Informatika</p></pre>
                <pre><p>Angkatan            : 2020</p></pre>
                <pre><p>Hobi                : Ngoding</p></pre>
            </td>
        </tr> 


    </table>
    <script>
        function ubahMode(){
            const ubah = document.body;
            ubah.classList.toggle("dark");
        }
   </script>
</body>
</html>