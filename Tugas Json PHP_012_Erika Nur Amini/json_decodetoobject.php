<?php 
$JSON = '{
    "DATA_MAHASISWA":
    {
        "Nama Mahasiswa": "Erika Nur Amini",
        "data":
        {
            "NIM": "20050974012",
            "No_Telepon": "085755351868",
            "Hobi": "Menulis"
        }     
            
    }
}';

$outputObject = json_decode($JSON);

print "<PRE>";
print_r($outputObject);