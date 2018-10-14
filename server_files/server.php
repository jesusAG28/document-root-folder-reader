<?php
        $content ='';
        $exts = array();
        // Open directory
        $myDirectory=opendir(".");
        
        // Get each entry
        while($entryName=readdir($myDirectory)){
            $dirArray[]=$entryName;
        }

        // Close directory
        closedir($myDirectory);
        
        // Count elements in array
        $indexCount=count($dirArray);
        
        // Sort files
        sort($dirArray);
        
        // Loop through the array of files
        for($index=0; $index < $indexCount; $index++) {
        
            // Allow ./?hidden to show hidden files
            if($_SERVER['QUERY_STRING']=="hidden"){
                $hide="";
                $ahref="./";
                $atext="Hide";
            }else{
                $hide=".";
                $ahref="./?hidden";
                $atext="Show";
            }
            
            if(substr("$dirArray[$index]", 0, 1) != $hide) {
            
                // Gets File Names
                $name=$dirArray[$index];
                $namehref=$dirArray[$index];
                
                // Separates directories
                if(is_dir($dirArray[$index])) {
                    $extn="&lt;Directory&gt;"; 
                    $class="dir";

                    //Set the content to print, without the server files

                    if($name!=='server_files'){
                        $content=$content . "
                            <div class='card'>
                                <img class='card-img-top' src='./server_files/folder.png'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$name</h5>
                                    <a href='./$namehref' target='_blank'><button class='mt-2 btn btn-sm btn-info'>Go To  <span class='fa fa-external-link'></span></button></a>
                                </div>
                                <div class='card-footer'>
                                    <small class='text-muted'>".
                                        $_SERVER["SERVER_NAME"]."/".$namehref
                                    ."</small>
                                </div>
                            </div>
                        ";
                    }

                }
                
            }
        }
    ?>
