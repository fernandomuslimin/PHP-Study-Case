<html>
    <body>
        <h1>Write To FILE</h1>
        <?php                    
            function writeToFile(){
                $myfile = fopen("./Support Files/new file.txt", "w") or die ("Unable to open file!");
                $txt = "Fernando Muslimin\n";
                fwrite($myfile, $txt);
                $txt = "Maharani Devi Adzhani\n";
                fwrite($myfile, $txt);
                fclose($myfile);
            }            
                        
            writeToFile();
        ?>
        
        
    </body>
</html>