
<?php
/***
*
*   getspeller.php  submission controller for uploading file
* 
*   Robert Clark, aka ebobtron et al.
*
*   CS50x final project   winter/spring 2014  with Launch Code
*
***************************************************************/

    require "../include/helfun.php";

    $error = false;
    
    $title = $titleString[1];
    
    $email = validEmail(($_POST['email']));
    $name = validName($_POST['name']);

<<<<<<< HEAD
    // set grp number based on last group user chose
    $grp = getGroupNumber($_COOKIE['leaderboard_cookie']);
=======
//  TODO:
//  need some cookie code here to set $grp
//  cookie_name will be 'leaderboard_cookie'

    // current group hard coded replace with
    #$group = the value of cookie;
    $group = 1;
    
    $title = $titleString[$group];
    $head = $headString[$group];
    $link = $linkString[$group]; 
>>>>>>> master
     
    $validSubMsg = null;
    
    if(!array_key_exists('magword', $_POST)) {
        
        $_POST = array('magword' => null, 'submit' => null);
    }
    else {
        
        $magWrd = $_POST['magword'];
        $submit = $_POST['submit'];
    }

    if($magWrd != "launchcode" || !$name || !$email) {

        if(!$email && $submit) {
            
            $validSubMsg = "alert('Submission needs an email address: ')";
        }        

        if(!$name && $submit) {
        
            $validSubMsg = "alert('Submission needs a name: ')";
        }
                
        if($magWrd != "launchcode" && $submit) {
        
            $validSubMsg = "alert('You must use a magicword')";
                                   
        }
        
        // if not magicword stay on the getspeller form
        $template = "getspellerform.html";

            // render header
            require("../template/header.php");
        
            echo "<script type='text/javascript'>",$validSubMsg,"</script>";
    
            // render template
            require("../template/$template");

            // render footer
            require("../template/footer.php");
    }
    else {

        // good magicword and valid email address continue submission
        
        $email = $_POST['email'];

        // return id from the submisson name or the next id

<<<<<<< HEAD
// TODO:  we need to pass getPut the grp number and the name
//        $data = array('name'=> $name, 'grp' => $grp);
=======
>>>>>>> master
                

// all the code between here and ******************* is moot
/* this will be gone in new verson
        $newId = getPut("nameId",$name);
        if(is_array($newId)) {
            if($newId['lastId'] == null) {
                $id = $newId['nextId'];
            }
            else {
                $id = $newId['lastId'] + 1;
            }
        }
        else {  
            $error = true;
        }
//********************************************************/

        $template = "submitform.php";

        // render header
        require("../template/header.php");
             
        if($error) { 

            echo "<br /><br /><br /><br /><br /><br />";
            echo " &nbsp; &nbsp; &nbsp; ".$newId;
            echo "<br /><br /><br /><br /><br /><br />";
        }
        else {

            // render template
            require("../template/$template");
        }

        // render footer
        require("../template/footer.php");	
    }

?>

